<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $type_id=Auth::user()->type_id;

        if($type_id=='1')
        {
            return view('admin');
        }

        if($type_id=='2')
        {
            return view('lecturer');
        }

        if($type_id=='3')
        {
            return view('labassistant');
        }

        if($type_id=='4')
        {
            return view('student');
        }

        else
        {
            return view('dashboard');
        } 
    }
}
