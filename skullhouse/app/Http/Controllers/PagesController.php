<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	} // End of the constructor

	/* Returns views for home page */
	function home()
	{
		// Data variables passed to the view
		$title = 'Home';

		return view('public/home', compact('title'));
	} // End of the home function

	/* Returns views for vision page */
    function vision()
    {
        // Data variables passed to the view
        $title = 'Vision';

        return view('public/vision', compact('title'));
    } // End of the vision function

	/* Returns views for about page */
    function about()
    {
        // Data variables passed to the view
        $title = 'About Us';

        return view('public/about', compact('title'));
    } // End of the about function

	/* Returns views for rush page */
    function rush()
    {
        // Data variables passed to the view
        $title = 'Rush';

        return view('public/rush', compact('title'));
    } // End of the home function

	/* Returns views for membership page */
    function membership()
    {
        // Data variables passed to the view
        $title = 'Membership';

        return view('public/membership', compact('title'));
    } // End of the membership function

	/* Returns views for brothers page */
    function brothers()
    {
        // Data variables passed to the view
        $title = 'Brothers';

        return view('public/brothers', compact('title'));
    } // End of the brothers function

	/* Returns views for contact page */
    function contact()
    {
        // Data variables passed to the view
        $title = 'Contact';

        return view('public/contact', compact('title'));
    } // End of the contact function

	/* Returns views for events page */
    function events()
    {
        // Data variables passed to the view
        $title = 'Events';

        return view('public/events', compact('title'));
    } // End of the events function
} // End of the Pages controller
