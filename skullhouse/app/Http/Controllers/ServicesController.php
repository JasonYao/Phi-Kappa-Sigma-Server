<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    /* Returns views for services page */
    function services()
    {
        // Data variables passed to the view
        $title = 'Services';

        return view('public/services/services', compact('title'));
    } // End of the services function


    /* Returns views for vpn page */
    function vpn()
    {
        // Data variables passed to the view
        $title = 'Virtual Private Network';

        return view('public/services/vpn', compact('title'));
    } // End of the vpn function


    /* Returns views for study rooms page */
    function studyRooms()
    {
        // Data variables passed to the view
        $title = 'Study Rooms';

        return view('public/services/studyRooms', compact('title'));
    } // End of the studyRooms function


    /* Returns views for forum page */
    function forum()
    {
        // Data variables passed to the view
        $title = 'Forum';

        return view('public/services/forum', compact('title'));
    } // End of the forum function


    /* Returns views for email page */
    function email()
    {
        // Data variables passed to the view
        $title = 'Email';

        return view('public/services/email', compact('title'));
    } // End of the email function


    /* Returns views for photography page */
    function photography()
    {
        // Data variables passed to the view
        $title = 'Photography';

        return view('public/services/photography', compact('title'));
    } // End of the photography function


} // End of the services controller
