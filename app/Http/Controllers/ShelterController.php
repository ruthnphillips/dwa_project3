<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ShelterController extends Controller
{
    //GET Homepage /
	public function index()
	{
		return view('shelter.index');
	}

	//GET /find-shelter
	public function findShelter(Request $request)
	{
        #Validate the form entries
        $this->validate($request, ['email'=>'required|email']);

        # Open the shelters.json data file
        $sheltersJson = file_get_contents(database_path('shelters.json'));
        $shelters = json_decode($sheltersJson, true);

        # set defaults to no shelter available
        $spaceAvailable = 'no';
        $vacancy = 0;

        # by default guests have no pets
        $petRequested = $request->input('pets', '0');

        #by default only 1 guest slot is requested
        $requestedGuests = $request->input('guests', 1);

        $email = $request->input('email');

        # search for available shelter
        foreach ($shelters as $name => $shelter)
        {

            # check to see if there is vacancy at the shelter
            $vacancy = $shelter['maxOccupancy'] - $shelter['currentGuests'];

            if($vacancy >= $requestedGuests)
            {
                $spaceAvailable = 'yes';

                # Check for pet space availability
                if($petRequested)
                {
                    if(strcmp($shelter['petsAllowed'], "no") == false)
                    {
                        $spaceAvailable = 'no';
                        unset($shelters[$name]);
                    }
                }
            }
            else
            {
                unset($shelters[$name]);
            }
        }

        #send email only if shelters were found
        # use email.shelterEmail view
        $numShelter = count($shelters);
        if($numShelter>0)
        {
            Mail::send('email.shelterEmail', [
            'shelters'=>$shelters,
            'numShelter'=> $numShelter],
            function($message) use ($email){
                $message->to($email)
                ->subject(config('app.name'));
            });
        }


        #Display results to user using shelter.result view
        return view('shelter.result')->with([
            'numShelter'=>$numShelter,
            'email'=>$email,
            'shelters'=>$shelters
        ]);
	}

	//GET /result
	public function result()
	{
		return view('shelter.result');
	}
}
