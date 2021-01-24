<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('site.index');
    }

    public function appProcessForm()
    {
        return view('site.pages.app_proccess_wizard');
    }

    public function PHomePending()
    {
        return view('site.pages.portal_home_pending');
    }


}
