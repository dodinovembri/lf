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
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['phone'] = "+ 1235 2355 988";
        $data['email'] = "youremail@email.com";
        $data['ket'] = "3-5 Business days delivery & Free Returns";
        $data['shop_name'] = "Minishop";


        return view('home', $data);
    }
}
