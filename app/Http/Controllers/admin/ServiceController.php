<?php

namespace App\Http\Controllers\admin;

use DataTables;
use App\Helper\Helper;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public $route = 'admin/services';
    public $view  = 'admin/services.';
    public $moduleName = 'Services';

    public function index()
    {
        $moduleName = $this->moduleName;
        return view($this->view . 'index', compact('moduleName'));
    }

    public function getData()
    {
        $data = Service::get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $editUrl = route('services.edit', encrypt($row->id));
                $deleteUrl = route('services.delete', encrypt($row->id));
                $statusUrl = route('services.changeStatus', encrypt($row->id));
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
                $path = asset('public/storage/services/' . $row->image);
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

        $image = Helper::fileUpload($request, 'image', 'services');
        Service::create([
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
        $service = Service::find(decrypt($id));
        return view($this->view . '_form', compact('service', 'moduleName'));
    }

    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'desc' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $service->title = $request->title;
        $service->desc = $request->desc;

        // Handle new image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($service->image && Storage::exists("public/services/{$service->image}")) {
                Storage::delete("public/services/{$service->image}");
            }

            // Upload new image
            $fileName = Helper::fileUpload($request, 'image', 'services');
            $service->image = $fileName;
        }

        $service->save();

        Helper::successMsg('update', $this->moduleName);
        return redirect($this->route);
    }


    public function changeStatus($id)
    {
        $status = Service::find(decrypt($id))->is_active;

        if ($status == 1) {
            Service::find(decrypt($id))->update(['is_active' => 0]);
        } else {
            Service::find(decrypt($id))->update(['is_active' => 1]);
        }

        Helper::successMsg('custom', 'Status Change Successfully.');
        return redirect($this->route);
    }

    public function delete($id)
    {
        // Find the service by its decrypted ID
        $service = Service::findOrFail(decrypt($id));

        // Delete the image if it exists
        if ($service->image && Storage::exists("public/services/{$service->image}")) {
            Storage::delete("public/services/{$service->image}");
        }

        // Delete the service record from the database
        $service->delete();

        Helper::successMsg('delete', $this->moduleName);
        return redirect($this->route);
    }
}
