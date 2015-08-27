<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
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

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function updateProfile(Request $request, $id)
    {

    } // End of the update profile function

	protected function getProfile()
	{
		// Data variables passed to the view
		$title = 'Profile Update';

		return view('private/profileUpdate', compact('title'));
	} // End of the get profile function

	/**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'oldPassword' => 'required|min:8',
            'password' => 'required|min:8|confirmed',
        ]);
    } // End of the validator function

	 /**
     * Sanitises any user input and strips special characters
     */
    protected function sanitisePassword(array $input)
    {
        // Sanitises the output, filters HTML tags and ACII characters higher than 127
        $output = [
            'oldPassword' => filter_var($input['oldPassword'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
            'password' => filter_var($input['password'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
            'password_confirmation' => filter_var($input['password_confirmation'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH)
        ];

        return $output;
    } // End of the sanitise function

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    } // End of the destroy function
} // End of the user controller
