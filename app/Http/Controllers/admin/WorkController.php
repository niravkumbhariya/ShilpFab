<?php

namespace App\Http\Controllers\admin;

use DataTables;
use App\Models\Work;
use App\Helper\Helper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\WorkImages;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    public $route = 'admin/works';
    public $view  = 'admin/works.';
    public $moduleName = 'Works';

    public function index()
    {
        $moduleName = $this->moduleName;
        return view($this->view . 'index', compact('moduleName'));
    }

    public function getData()
    {
        $data = Work::get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $editUrl = route('works.edit', encrypt($row->id));
                $deleteUrl = route('works.delete', encrypt($row->id));
                $statusUrl = route('works.changeStatus', encrypt($row->id));
                $btn = '';
                $btn .= '<a href="' . $editUrl . '" class="edit btn btn-primary btn-sm" style="margin-left:5px;"><i class="fa fa-pencil"> </i> Edit</a>';


                //   if($row->is_active == 1) {
                //     $btn .= '<a href="'.$statusUrl.'" class="edit btn btn-success btn-sm" style="margin-left:5px;"><i class="fa fa-check"> </i> Inactive</a>';
                //   } else {
                //     $btn .= '<a href="'.$statusUrl.'" class="edit btn btn-danger btn-sm" style="margin-left:5px;"><i class="fa fa-check" > </i> Active</a>';
                //   }

                $btn .= '<a href="' . $deleteUrl . '" class="edit btn btn-danger btn-sm" style="margin-left:5px;"> <i class="fa fa-trash" /> </i> Delete</a>';
                return $btn;
            })

            ->editColumn('desc', function ($row) {
                return \Str::limit(strip_tags($row->desc), 100, '...');
            })

            ->addColumn('image', function ($row) {
                $path = asset('public/storage/works/' . $row->image);
                return "<center><img src='$path' width='100px' height='70px'></center>";
            })

            ->rawColumns(['action', 'image'])
            ->make(true);
    }

    public function create()
    {
        $moduleName = $this->moduleName;
        return view($this->view . 'form', compact('moduleName'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'desc' => 'required',
        ]);

        $image = Helper::fileUpload($request, 'image', 'works');
        Work::create([
            'title' => $request->title,
            'image' => $image,
            'desc'  => $request->desc
        ]);

        Helper::successMsg('insert', $this->moduleName);
        return redirect($this->route);
    }

    public function edit($id)
    {
        $moduleName = $this->moduleName;
        $work = Work::find(decrypt($id));
        return view($this->view . '_form', compact('work', 'moduleName'));
    }



    public function update(Request $request, $id)
    {
        $work = Work::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $work->title = $request->title;
        $work->desc = $request->desc;

        // Single image (main image)
        if ($request->hasFile('image')) {
            if ($work->image && Storage::exists("public/works/{$work->image}")) {
                Storage::delete("public/works/{$work->image}");
            }

            $fileName = Helper::fileUpload($request, 'image', 'works');
            $work->image = $fileName;
        }

        $work->save();

        // Handle multiple image uploads and store in WorkImages table
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $img) {
                $fileName = time() . '_' . uniqid() . '.' . $img->getClientOriginalExtension();
                $img->storeAs('public/works', $fileName);

                // Insert record in WorkImages table
                WorkImages::create([
                    'work_id' => $work->id,
                    'image'   => $fileName
                ]);
            }
        }

        Helper::successMsg('update', $this->moduleName);
        return back();
        // return redirect($this->route);
    }




    public function changeStatus($id)
    {
        $status = Work::find(decrypt($id))->is_active;

        if ($status == 1) {
            Work::find(decrypt($id))->update(['is_active' => 0]);
        } else {
            Work::find(decrypt($id))->update(['is_active' => 1]);
        }

        Helper::successMsg('custom', 'Status Change Successfully.');
        return redirect($this->route);
    }

    public function delete($id)
    {
        // Find the work by its decrypted ID
        $work = Work::findOrFail(decrypt($id));

        // Delete the image if it exists
        if ($work->image && Storage::exists("public/works/{$work->image}")) {
            Storage::delete("public/works/{$work->image}");
        }

        // Delete the work record from the database
        $work->delete();

        Helper::successMsg('delete', $this->moduleName);
        return redirect($this->route);
    }

    public function deleteImage($id)
    {
        try {
            $image = WorkImages::findOrFail($id);

            // Delete image from storage
            if (Storage::exists("public/works/{$image->image}")) {
                Storage::delete("public/works/{$image->image}");
            }

            // Delete record from DB
            $image->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Image deleted successfully!'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete image! Please try again.'
            ], 500);
        }
    }
}
