<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShelterController extends Controller
{
    //GET /
	public function index()
	{
		return 'Show form to collect info';
	}

	//GET /find-shelter
	public function findShelter()
	{
		return 'perform processing to find shelter';
	}
}
