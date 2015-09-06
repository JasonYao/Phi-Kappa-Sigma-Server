<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
	/* Returns views for reservation page */
	function getReservation()
	{return view('public/reservation');} // End of the reservation function

	/* Sanitisation */
    protected function sanitise(array $input)
    {
        // Sanitises the output, filters HTML tags and ACII characters higher than 127
        $output = [
            'netID' => filter_var($input['netID'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
            'password' => filter_var($input['password'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
			'password_confirmation' => filter_var($input['password_confirmation'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH)
        ];

        return $output;
    } // End of the sanitise function

	/* Validation of input */
	protected function validator(array $data)
    {
        return Validator::make($data, [
            'netID' => 'required|alpha_num|max:30',
            'password' => 'required|confirmed|min:8',
        ]);
    } // End of the validator function

	// Create ReservationUser
    protected function create(array $data)
    {
        return \App\ReservationUser::create([
            'netID' => $data['netID'],
            'password' => $data['password']
        ]);
    } // End of the create function

	/* Inputs the data inside the database after sanitisation */
    protected function postReservation(Request $request)
    {
        // Arrayises the request (yeah, it's now a verb, suck my dick english profs)
        $data = [
            'netID' => $request->input('netID'),
            'password' => $request->input('password'),
            'password_confirmation' => $request->input('password_confirmation')
        ];

        // Sanitises the data
        $sanitisedData = $this->sanitise($data);

        // Validates all user inputs
        $validator = $this->validator($sanitisedData);

        if ($validator->fails())
        {
            // User input is invalid, flashes errors and goes back to page
            $messages = $validator->messages();
            \Session::flash('flashMessage', $messages);
            return back()->withInput();
        }

		// Creates a reservation user object
		$newUser = $this->create($sanitisedData);

		// Assigns the data values given to the new reservation user
		$newUser->netID = $sanitisedData['netID'];
		$newUser->password = $sanitisedData['password'];

		// Stores the user object
		$newUser->save();

		\Session::flash('flashMessage', 'Thank you for your help with booking study rooms for Delta Phi');
        return redirect('/');
	} // End of the postReservatioon

} // End of the reservation controller
