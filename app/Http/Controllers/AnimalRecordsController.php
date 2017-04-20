<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalRecordsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*adding the consultant guard so users cant access consultation page without authorisation

        used https://laracasts.com/discuss/channels/general-discussion/l5-middleware-or-authorize-method?page=1
        to help understand setting auth for particular functions
        */
        $this->middleware('auth', ['only' => 'web', 'admin']);  
    }

    /**
     * Show the animal records page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('animalrecords');
    }
}
