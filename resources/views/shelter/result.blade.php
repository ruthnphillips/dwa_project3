@extends('layouts.master')


@section('title')
    Shelter Finder Results
@endsection


@section('content')
	<div class="container">
		<h1>Result: # Shelters </h1>

		<!-- Display found shelters -->
		<div>
			<h2>Shelter Name: </h2>
			<ul>
				<li>Maximum Occupancy: </li>
				<li>Persons currentlty in shelter: </li>
				<li>Pets Allowed: </li>
			</ul>
		</div>
		<!-- inform user email has been sent -->
		<h3> Email has been sent to : </h3>
	</div>
@endsection
