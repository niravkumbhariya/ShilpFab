<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Service;
use App\Models\Visitor;
use App\Models\Work;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        $services = Service::where('is_active',1)->get();
        $totalVisitors = Visitor::count(); // Total unique visits
        return view('front.index',compact('services','totalVisitors'));
    }

    public function work() {
        $works = Work::where('is_active',1)->get();
        return view('front.our-work',compact('works'));
    }

    public function storeContact(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        ContactUs::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return response()->json(['status' => 'success']);
    }
}
