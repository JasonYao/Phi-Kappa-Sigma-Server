<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MembershipController extends Controller
{
    /* Returns views for membership page */
    function membership()
    {
        // Data variables passed to the view
        $title = 'Membership';

        return view('public/membership/membership', compact('title'));
    } // End of the membership function


    /* Returns views for brothers page */
    function brothers()
    {
        // Data variables passed to the view
        $title = 'Brothers';

        return view('public/brothers', compact('title'));
    } // End of the brothers function


    /* Returns views for recruitment page */
    function recruitment()
    {
        // Data variables passed to the view
        $title = 'Recruitment';

        return view('public/membership/recruitment', compact('title'));
    } // End of the recruitment function


    /* Returns views for faqs page */
    function faqs()
    {
        // Data variables passed to the view
        $title = 'FAQs';

        return view('public/membership/faqs', compact('title'));
    } // End of the faqs function


	/* Returns views for expectations page */
    function expectations()
    {
        // Data variables passed to the view
        $title = 'Expectations';

        return view('public/membership/expectations', compact('title'));
    } // End of the expectations function


} // End of the membership controller
