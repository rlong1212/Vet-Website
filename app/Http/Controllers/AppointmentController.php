<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Session;

class AppointmentController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*get appointments and load them into the view*/
        $appointment = App\Appointment::all();
        return view::make('bookinghistory')
        ->with('appointments.show', $appointment);        
    }

    /**
     * Show the form for creating a new resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*shows book new appointment page*/
        return view('booknewappointment.create');    
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            /*if no error was encountered, add to table*/
            $appointment = new Appointment;
            $appointment->animalID = Input::get('animalID'); 
            $appointment->keeperID = Input::get('keeperID');
            $appointment->consultantID = Input::get('consultantID');
            $appointment->appointmentType = Input::get('appointmentType');
            $appointment->time = Input::get('time');
            $appointment->date = Input::get('date');
            $appointment->save();

            /*message to tell user their appointment was successfully booked*/
            /*Session::flash('message', 'Appointment booked!');*/
            return Redirect::to('booknewappointment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointment = Appointment::find($id);
        return view::make('viewapp')
        ->with('appointments.show', $appointment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointment = Appointment::find($id);
        return view::make('editapp')
        ->with('appointments.edit', $appointment);
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
        //
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
