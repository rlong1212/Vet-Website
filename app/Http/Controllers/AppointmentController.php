<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

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

        $appointment = App\Appointment::all();
        return view::make('editcancelappointment')
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
        /*creating rules that mean all fields must be filled*/
        $rules = array(
            'animalID' => 'required',
            'keeperID' => 'required',
            'consultantID' => 'required',
            'appointmentType' => 'required',
            'time' => 'required',
            'date' => 'required'
            );
        $validator = validator::make(Input::all(), $rules);

        /*redirecting back if there are input errors*/
        if($validator->fails()) 
        {
            return Redirect::to('booknewappointment')
            ->withErrors($validator)
            ->withInput(Input::all());
        }
        else
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
            Session::flash('message', 'Appointment booked!');
            return Redirect::to('booknewappointment');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointment = App\Appointment::all();
        return view::make('bookinghistory')
        ->with('appointments.show', $appointment);

        $appointment = App\Appointment::all();
        return view::make('editcancelappointment')
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
        $appointment = App\Appointment::find($id);
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
