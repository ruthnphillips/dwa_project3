@extends('layouts.master')


@section('title')
    Shelter Finder
@endsection


@section('content')
	<div class="container">
		<h1>Shelter Finder</h1>

	    <form>
			<div class="row">
				<div class="col-sm-12 option-large">
					<h2>How many slots do you need </h2>
			        <input type='number' class="form-control input-lg" name='guests'>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 form-group">
					<h2>Any Pets ?</h2>
					<label class="radio-inline"><input type="radio" name="pets" value="yes"> Yes</label>
					<label class="radio-inline"><input type="radio" name="pets" value="no"> No</label>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 form-group required">
					<h2>Enter your email </h2>
					<input type='email' class='form-control' id='inputEmail' name='email'>
				</div>
			</div>

	        <input type='submit' class='btn btn-primary btn-small' value='Check Availability'>
	    </form>
	</div>
@endsection
