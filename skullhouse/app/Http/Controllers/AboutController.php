<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
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


    /* Returns views for about page */
    function about()
    {
        // Data variables passed to the view
        $title = 'About Us';

        return view('public/about/about', compact('title'));
    } // End of the about function


    /* Returns views for core values page */
    function coreValues()
    {
        // Data variables passed to the view
        $title = 'Core Values';

        return view('public/about/coreValues', compact('title'));
    } // End of the core values function


    /* Returns views for public mottos page */
    function publicMottos()
    {
        // Data variables passed to the view
        $title = 'Public Mottos';

        return view('public/about/publicMottos', compact('title'));
    } // End of the public mottos function

} // End of the about controller
