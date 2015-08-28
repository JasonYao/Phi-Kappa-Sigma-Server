<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Validator;
use File;
use Storage;
use Input;
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

	protected function getProfile()
    {
        // Data variables passed to the view
        $title = 'Profile';

        return view('private/profile', compact('title'));
    } // End of the get profile function

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    protected function updateProfile(Request $request)
    {
		// Arrayises the request (yeah, it's now a verb, suck my dick english profs)
        $data = [
			'firstName' => $request->input('firstName'),
			'middleInitial' => $request->input('middleInitial'),
			'lastName' => $request->input('lastName'),
			'email' => $request->input('email'),
			'description' => $request->input('description'),
			'initiationClass' => $request->input('initiationClass'),
			'degree' => $request->input('degree'),
			'school' => $request->input('school'),
			'honours' => $request->input('honours'),
			'picture' => $request->input('picture')
        ];

        // Sanitises the data
        $sanitisedData = $this->sanitise($data);

		// Sets email to different one, before saving new state
		if ($data['email'] === Auth::user()->email)
		{
			$temp = Auth::user();
			$temp->email = $data['email'] . '123';
			$temp->save();
		}

        // Validates all user inputs
        $validator = $this->validator($sanitisedData);

        if ($validator->fails())
        {
            // User input is invalid, flashes errors and goes back to page
            $messages = $validator->messages();
            \Session::flash('flashMessage', $messages);
            return back()->withInput();
        }

		// Retrieves data from db
		$currentUser = Auth::user();

		// Patches the new values in
		$currentUser->firstName = $sanitisedData['firstName'];
		$currentUser->middleInitial = $sanitisedData['middleInitial'];
		$currentUser->lastName = $sanitisedData['lastName'];
		$currentUser->email = $sanitisedData['email'];
		$currentUser->description = $sanitisedData['description'];
		$currentUser->initiationClass = $sanitisedData['initiationClass'];
		$currentUser->degree = $sanitisedData['degree'];
		$currentUser->school = $sanitisedData['school'];
		$currentUser->honours = $sanitisedData['honours'];

		// Checks if image was uploaded
		if($sanitisedData['picture'] !== NULL)
		{
			// Replaces the old profile.png
			$path = '/assets/img/profiles/' . $currentUser->obfuscationCode . '/profile.';
			if (File::exists($path . $currentUser->extension))
	        {File::delete($path . $currentUser->extension);}
			$file = $request->file('picture');
			$extension = $file->getExtension();

			$currentUser->extension = $extension;
			$currentUser->picture = $path . $extension;
			Storage::disk('local')->put($path .$extension,  File::get($file));
		}
		// Stores the new profile
		$currentUser->save();

		\Session::flash('flashMessage', 'Profile successfully updated!');
        return redirect('dashboard');
    } // End of the update profile function

	protected function getProfileUpdate()
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
		if($data['picture'] !== NULL)
		{
	        return Validator::make($data, [
				'firstName' => 'required|alpha_dash|max:30',
				'middleInitial' => 'alpha|max:1',
				'lastName' => 'required|alpha_dash|max:30',
				'email' => 'required|email|max:50|unique:users',
				'description' => 'max:65534',
				'initiationClass' => 'max:25',
				'degree' => 'max:255',
				'school' => 'max:255',
				'honours' => 'max:255',
				'picture' => 'image'
			]);
		}
		else
		{
			// No picture uploaded
			return Validator::make($data, [
                'firstName' => 'required|alpha_dash|max:30',
                'middleInitial' => 'alpha|max:1',
                'lastName' => 'required|alpha_dash|max:30',
                'email' => 'required|email|max:50|unique:users',
                'description' => 'max:65534',
                'initiationClass' => 'max:25',
                'degree' => 'max:255',
                'school' => 'max:255',
                'honours' => 'max:255'
            ]);

		}
    } // End of the validator function

	 /**
     * Sanitises any user input and strips special characters
     */
    protected function sanitise(array $input)
    {
        // Sanitises the output, filters HTML tags and ACII characters higher than 127
        $output = [
			'firstName' => filter_var($input['firstName'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
			'middleInitial' => filter_var($input['middleInitial'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
			'lastName' => filter_var($input['lastName'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
			'email' => filter_var($input['email'], FILTER_SANITIZE_EMAIL),
			'description' => filter_var($input['description'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
			'initiationClass' => filter_var($input['initiationClass'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
			'degree' => filter_var($input['degree'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
			'school' => filter_var($input['school'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
			'honours' => filter_var($input['honours'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
			'picture' => $input['picture']
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