<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use App\User;

class PhiKapValidationController extends Controller
{

	/* Sends a challenge email out to the request */
	protected function getPhiKapValidation($email)
	{
		if (! $email)
		{
			\Session::flash('flashMessage', "We're sorry, but that is not a proper email address.");
        	return redirect('/');
		}

		$user = User::where('email', $email)->first();
		if (! $user)
		{
			\Session::flash('flashMessage', "We're sorry, but that email address is not in our files.");
            return redirect('/');
		}
		else
		{
			Mail::send('emails.verifyPhiKap', ['user' => $user], function ($m) use ($user) {
    	        $m->to($user->email, $user->firstName)->subject('Skullhouse Challenge: verify your identity');
	        });

			\Session::flash('flashMessage', 'A challenge has been sent to your email, please respond correctly!');
    	    return redirect('/');
		}

	} // End of the getPhiKap validation function

	protected function confirm($confirmationReply)
    {
        if( ! $confirmationReply)
        {
            \Session::flash('flashMessage', 'Invalid confirmation code');
            return redirect('/');
        }

        $user = User::where('obfuscationCode', $confirmationReply)->first();

        if ( ! $user)
        {
            \Session::flash('flashMessage', 'Invalid confirmation code');
            return redirect('/');
        }

        $user->confirmationCode = "1";
        $user->save();

        \Session::flash('flashMessage', 'Welcome back, Phi Kap. Your account restrictions have been removed, and you will now have full access to your account.');
        return redirect()->intended('dashboard')->with('brother', $user);
    }
} // End of phi kap validation controller
