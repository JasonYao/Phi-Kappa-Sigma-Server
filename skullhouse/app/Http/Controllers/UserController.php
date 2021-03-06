<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Validator;
use File;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Image;

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
		$brother = Auth::user();

        return view('private/profile', compact('brother'));
    } // End of the get profile function

	protected function validateSchools(array $school)
	{
		return Validator::make($school, [
			'finalString' => 'max:255'
		]);
	} // End of the validate schools function

	protected function sanitiseSchool(array $schools)
	{
		$arraySize = sizeof($schools);
		$output = array_fill(0, $arraySize, 'testing');
		foreach ($schools as $index => $school)
		{$output[$index] = filter_var($school, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);}
		return $output;
	} // End of the sanitise schools function

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    protected function updateProfile(Request $request)
    {
		// Arrayises the checkboxes
		$schoolsChecked = Input::get('school');
		$sanitisedSchools = Input::get('school');
		if(is_array($schoolsChecked))
		{$sanitisedSchools = $this->sanitiseSchool($schoolsChecked);}

		$schoolSize = sizeof($sanitisedSchools);
		$finalSchoolString = "";
		if($schoolSize === 0)
		{
			// Does nothing
		}
		elseif ($schoolSize === 1)
		{$finalSchoolString = $finalSchoolString . $sanitisedSchools[0];}
		else
		{
			$finalSchoolString = $finalSchoolString . $sanitisedSchools[0];
			foreach($sanitisedSchools as $key => $addedSchool)
			{
				if ($key < 1) continue;
				$finalSchoolString = $finalSchoolString . ' &amp; ' . $addedSchool;
			}
		}

		$schoolArray = ['finalString' => $finalSchoolString];
        $schoolValidator = $this->validateSchools($schoolArray);

        if ($schoolValidator->fails())
        {
            // User input is invalid, flashes errors and goes back to page
            $messages = $schoolValidator->messages();
            \Session::flash('flashMessage', $messages);
            return back()->withInput();
        }

		// Patches the values in
		if ($schoolSize === 0)
		{
			// Does nothing
		}
		else
		{
			$schoolUser = Auth::user();
			$schoolUser->school = $finalSchoolString;
			$schoolUser->save();
		}

		// Arrayises the request (yeah, it's now a verb, suck my dick english profs)
        $data = [
			'firstName' => $request->input('firstName'),
			'middleInitial' => $request->input('middleInitial'),
			'lastName' => $request->input('lastName'),
			'email' => $request->input('email'),
			'description' => $request->input('description'),
			'initiationClass' => $request->input('initiationClass'),
			'degree' => $request->input('degree'),
			'honours' => $request->input('honours'),
			'picture' => $request->input('picture'),
			'affiliations' => $request->input('affiliations'),
			'seoExternal' => $request->input('seoExternal')
        ];

        // Sanitises the data
        $sanitisedData = $this->sanitise($data);

		// Sets email to different one, before saving new state
		if ($data['email'] === Auth::user()->email)
		{
			$temp = Auth::user();
			$temp->email = $sanitisedData['email'] . '123';
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
		$currentUser->honours = $sanitisedData['honours'];
		$currentUser->affiliations = $sanitisedData['affiliations'];
		$currentUser->seoExternal = $sanitisedData['seoExternal'];

		// Checks for existence
		if ($request->hasFile('picture'))
		{
			// Deletes the old image
			$path = public_path(). '/assets/img/profiles/' . $currentUser->obfuscationCode;
			if (File::exists($path . '/profile.' . $currentUser->extension))
			{File::delete($path . '/profile.' . $currentUser->extension);}

			$file = $request->file('picture');
			$extension = Input::file('picture')->getClientOriginalExtension();

			$currentUser->extension = $extension;
			$currentUser->picture = '/assets/img/profiles/' . $currentUser->obfuscationCode . '/profile.' . $extension;
			$currentUser->thumbnail = '/assets/img/profiles/' . $currentUser->obfuscationCode . '/profileThumbnail.' . $extension;
			$filePath = public_path() . '/assets/img/profiles/' . $currentUser->obfuscationCode;
			$success = Input::file('picture')->move($filePath, 'profile.' . $currentUser->extension);

			// Creates a thumbnail
			$imageOriginal = public_path() . '/assets/img/profiles/' . $currentUser->obfuscationCode . '/profile.' . $currentUser->extension;
			$imageThumbnail =  public_path() . '/assets/img/profiles/' . $currentUser->obfuscationCode . '/profileThumbnail.' . $currentUser->extension;

			Image::configure(array('driver' => 'imagick'));
			$img = Image::make($imageOriginal);
			$img->resize(200, 200);
			$img->save($imageThumbnail);
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
		$brother = Auth::user();

		return view('private/profileUpdate', compact('title', 'brother'));
	} // End of the get profile function

	/**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
		if($data['picture'] === NULL)
		{
	        return Validator::make($data, [
				'firstName' => 'required|alpha_dash|max:30',
				'middleInitial' => 'alpha|max:1',
				'lastName' => 'required|alpha_dash|max:30',
				'email' => 'required|email|max:50|unique:users',
				'description' => 'max:65534',
				'initiationClass' => 'max:25',
				'degree' => 'max:255',
				'honours' => 'max:255',
				'affiliations' => 'max:255',
				'seoExternal' => 'max:30'
			]);
		}
		else
		{
			// Picture was uploaded
			return Validator::make($data, [
                'firstName' => 'required|alpha_dash|max:30',
                'middleInitial' => 'alpha|max:1',
                'lastName' => 'required|alpha_dash|max:30',
                'email' => 'required|email|max:50|unique:users',
                'description' => 'max:65534',
                'initiationClass' => 'max:25',
                'degree' => 'max:255',
                'honours' => 'max:255',
				'picture' => 'image',
				'affiliations' => 'max:255',
				'seoExternal' => 'max:30'
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
			'honours' => filter_var($input['honours'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
			'picture' => $input['picture'],
			'affiliations' => filter_var($input['affiliations'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
			'seoExternal' => filter_var($input['seoExternal'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH)
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
