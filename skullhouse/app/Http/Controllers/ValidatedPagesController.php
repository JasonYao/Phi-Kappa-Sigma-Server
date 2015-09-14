<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class ValidatedPagesController extends Controller
{
	/**
	* Create a new controller instance requiring a logged in user
	*
	* @return void
	*/
	public function __construct()
	{
		$this->middleware('auth');
	} // End of the authenticated constructor

	/* Returns views for dashboard */
	public function getDashboard()
	{
		$brother = Auth::user();

		return view('private/dashboard', compact('brother'));
	} // End of the dashboard view

} // End of the validated pages controller
