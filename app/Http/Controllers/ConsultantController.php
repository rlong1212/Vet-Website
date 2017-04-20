<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*adding the consultant guard so users cant access consultation page without authorisation*/
        $this->middleware('auth:consultant');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('consultant');
    }
}
