<?php

namespace App\Http\Controllers\admin;

use App\Helper\Helper;
use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ContactUsController extends Controller
{
    public $route = 'admin/contacts';
    public $view  = 'admin/contacts.';
    public $moduleName = 'Contacts';

    public function index()
    {
        $moduleName = $this->moduleName;
        return view($this->view . 'index', compact('moduleName'));
    }

    public function getData()
    {
        $data = ContactUs::get();
        return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $deleteUrl = route('contacts.delete', encrypt($row->id));
                $btn = '';

                $btn .= '<a href="' . $deleteUrl . '" class="edit btn btn-danger btn-sm" style="margin-left:5px;"> <i class="fa fa-trash" /> </i> Delete</a>';
                return $btn;
            })

            ->rawColumns(['action'])
            ->make(true);
    }

    public function delete($id)
    {
        // Find the work by its decrypted ID
        $work = ContactUs::findOrFail(decrypt($id));
        // Delete the work record from the database
        $work->delete();

        Helper::successMsg('delete', $this->moduleName);
        return redirect($this->route);
    }
}
