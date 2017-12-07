<?php

namespace App\Http\Controllers;
use App\products;
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
     * @return \Illuminate\Http\Response
     */

    public function admin()
    {

        return view('/admin/index');

    }

    public function logoutadmin()
    {
        Auth::guard('clients')->logout();

        return redirect('/admin');
    }



}
