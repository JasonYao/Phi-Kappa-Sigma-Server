<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
	/* Returns views for reservation page */
	function getReservation()
	{return view('public/reservation');} // End of the reservation function

} // End of the reservation controller
