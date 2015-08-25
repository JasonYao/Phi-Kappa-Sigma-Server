<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
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
		// Sanitises and replaces user input
		$this->sanitise();

        return Validator::make($data, [
            'firstName' => 'required|alpha|max:30',
			'lastName' => 'required|alpha|max:30',
            'email' => 'required|email|max:50|unique:users',
            'password' => 'required|confirmed|min:8|confirmed',
        ]);
    } // End of the validator function

	/**
	 * Sanitises any user input and strips special characters
	 */
	protected function sanitise ()
	{
		$input = $this->all();

		// Higher level of sanitisation that kills anything higher than ASCII 127
		$input['firstName'] = filter_var($input['firstName'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$input['lastName'] = filter_var($input['lastName'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$input['email'] = filter_var($input['email'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
		$input['password'] = filter_var($input['password'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

		// Replaces original with sanitised values
		$this->replace($input);
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
            'lastName' => $data['lastName'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    } // End of the create function
} // End of the auth controller
