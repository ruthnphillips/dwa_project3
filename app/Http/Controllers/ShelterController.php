<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShelterController extends Controller
{
    //GET /
	public function index()
	{
		return view('shelter.index');
	}

	//GET /find-shelter
	public function findShelter()
	{
		return 'perform processing to find shelter';
	}

	//GET /result
	public function result()
	{
		return view('shelter.result');
	}
}
