<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    //GET /send-email
	public function __invoke()
	{
		return 'Send email to user with result';
	}
}
