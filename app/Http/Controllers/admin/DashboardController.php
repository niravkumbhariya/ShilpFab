<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Visitor;
use App\Models\Work;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        $totalService = Service::count();
        $totalWorks = Work::count();
        $totalVisitors = Visitor::count(); // Total unique visits


        return view('admin.index',compact('totalService','totalWorks','totalVisitors'));
    }
}
