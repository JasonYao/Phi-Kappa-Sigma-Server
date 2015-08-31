<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BrothersController extends Controller
{

	protected function getBrother($brotherName)
	{
		$brother = User::where('seoExternal', $brotherName)->first();
		if (! $brother)
		{
			// No brother found, returns to index
			\Session::flash('flashMessage', 'Sorry, that brother was not found, please choose from the links below');
			return redirect('brothers');
		}
		return view('public.brothers.template', compact('brother'));
	}

	/**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
		$brothers = User::all();
        return view('public.brothers.brothers', compact('brothers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
		$brother = User::findOrFail($id);
        return view('public.brothers.template', compact('brother'));
    }

} // End of the brothers controller
