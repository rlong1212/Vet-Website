<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class ConsultantLoginController extends Controller
{
    use AuthenticatesUsers;

	public function __construct()
	{
		$this->middleware('guest:consultant');
	}

	/*show login for admin*/
    public function showLoginForm()
    {
    	return view('auth.consultantlogin');
    }

    /*function to log in*/
    public function login(Request $request)
    {
    	/*validate login form*/
    	$this->validate($request, [
    		'username' => 'required|max:255',
    		'password' => 'required|min:8',
    		]);
    	/*attempt login*/
    	if(Auth::guard('consultant')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember))
    	{
    		/*if successful, log admin in*/
    		return redirect()->intended(route('consultant.dashboard'));
    	}
    	/*if unsuccessful, go back to log in page*/
    	return redirect()->back()->withInput($request->only('username'));
    }
}