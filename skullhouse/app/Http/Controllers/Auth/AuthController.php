<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use File;
use Image;
use Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

	protected $redirectPath = '/dashboard';
	protected $loginPath = '/login';

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => 'required|alpha_dash|max:30',
			'lastName' => 'required|alpha_dash|max:30',
            'email' => 'required|email|max:50|unique:users',
            'password' => 'required|confirmed|min:8',
        ]);
    } // End of the validator function

	/**
	 * Sanitises any user input and strips special characters
	 */
	protected function sanitise(array $input)
	{
		// Sanitises the output, filters HTML tags and ACII characters higher than 127
		$output = [
			'firstName' => filter_var($input['firstName'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
			'lastName' => filter_var($input['lastName'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
			'email' => filter_var($input['email'], FILTER_SANITIZE_EMAIL),
			'password' => filter_var($input['password'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH),
			'password_confirmation' => filter_var($input['password_confirmation'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH)
		];

		return $output;
	} // End of the sanitise function

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstName' => $data['firstName'],
            'middleInitial' => NULL,
            'lastName' => $data['lastName'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'description' => NULL,
            'initiationClass' => NULL,
            'degree' => NULL,
            'school' => NULL,
            'honours' => NULL,
			'extension' => 'png',
			'affiliations' => NULL
		]);
    } // End of the create function

	/* Registration post logic */
	protected function postRegister(Request $request)
	{
		// Arrayises the request (yeah, it's now a verb, suck my dick english profs)
		$data = [
			'firstName' => $request->input('firstName'),
			'lastName' => $request->input('lastName'),
			'email' => $request->input('email'),
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

		// Creates a user object
		$newUser = $this->create($sanitisedData);

		// For some reason I need to initialize this here
		$obf = md5(microtime()) . str_random(20);
		$newUser->obfuscationCode = $obf;
		$newUser->confirmationCode = str_random(20);
		$newUser->picture = '/assets/img/profiles/' . $obf . '/profile.png';
		$newUser->thumbnail = '/assets/img/profiles/' . $obf . '/profileThumbnail.png';
		$newUser->seo = $newUser->firstName . $newUser->lastName;
		$newUser->seoExternal = $newUser->firstName . $newUser->lastName;

		// Creates a user directory
		$path = public_path(). '/assets/img/profiles/' . $obf;

		// Creates a profile directory
		if (!File::exists($path))
		{File::makeDirectory($path, 0755, true);}

		// Copies over a default image
		File::copy(public_path(). '/assets/img/profiles/profile.png', $path . '/profile.png');

		// Creates a thumbnail
		$imageOriginal = public_path() . '/assets/img/profiles/' . $obf . '/profile.png';
		$imageThumbnail = public_path() . '/assets/img/profiles/' . $obf . '/profileThumbnail.png';

		Image::configure(array('driver' => 'imagick'));
		$img = Image::make($imageOriginal);
		$img->resize(200, 200);
		$img->save($imageThumbnail);

		// Stores the user object
		$newUser->save();

		// Sends a confirmation email to the new member
		$confirmationCode = $newUser->confirmationCode;
		$user = $newUser;
		Mail::send('emails.verify', ['user' => $user], function ($m) use ($user) {
            $m->to($user->email, $user->firstName)->subject('Skullhouse: verify your email address');
        });

		\Session::flash('flashMessage', 'Registration complete, please check your email!');
		return redirect('login');
	} // End of the registration post function

	protected function confirm($inputCode)
    {
        if( ! $inputCode)
        {
			\Session::flash('flashMessage', 'Invalid confirmation code');
			return redirect('/');
        }

		$user = User::where('confirmationCode', $inputCode)->first();

        if ( ! $user)
        {
			\Session::flash('flashMessage', 'Invalid confirmation code');
            return redirect('/');
        }

        $user->confirmationCode = NULL;
        $user->save();

        \Session::flash('flashMessage', 'You have successfully verified your account');
        return redirect()->intended('dashboard');
    }

	/**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password, 'confirmationCode' => NULL])) {
            // Authentication passed
            return redirect()->intended('dashboard');
        }
    }

} // End of the auth controller
