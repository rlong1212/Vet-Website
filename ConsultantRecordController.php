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
        $consultant = App\animal::all();
        return view::make('consultantrecord')
        ->with("consultant.show",$consultant);
    }


    /**
     *show the form for creating a new resource.
     *  @return \Illuminate\Http\Response
     */

    public function create()
    {
        //load the view with the form for a new animal
        return view('addnewconsultant');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consultant = new \App\consultant($request-> all());
        $consultant -> save();
        return redirect('consultant');
    }
    /** 
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultant = \App\consultant::where('id','=',$id)->first();
        return view::make('consultantrecord')
        ->with('consultant.show', $consultant);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultant = \App\consultant::all();
        return view::make('consultant')
        ->with('consultant.show', $consultant);


    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $consultant = \App\consultant::all();
        return view::('consultant')
        
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
