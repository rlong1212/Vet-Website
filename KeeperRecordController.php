<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultantRecordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*adding the consultant guard so users cant access consultation page without authorisation*/
        $this->middleware('auth:admin');
    }

    /**
     * Show the animal records page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {   
        $keeper = App\animal::all();
        return view::make('keeperrecord')
        ->with("keeper.show",$keeper);
    }


    /**
     *show the form for creating a new resource.
     *  @return \Illuminate\Http\Response
     */

    public function create()
    {
        //load the view with the form for a new animal
        return view('addnewkeeper');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $keeper = new \App\keeper($request-> all());
        $keeper -> save();
        return redirect('keeper');
    }
    /** 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $keeper = \App\keeper::where('id','=',$id)->first();
        return view::make('keeperrecord')
        ->with('keeper.show', $keeper);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $keeper = \App\keeper::all();
        return view::make('keeper')
        ->with('keeper.show', $keeper);


}