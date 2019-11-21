<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JobApplication;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_application = JobApplication::where('company_id', Auth::id())->orderBy('id', 'DESC')->get();
        return view('index', compact('all_application'));
    }
}
