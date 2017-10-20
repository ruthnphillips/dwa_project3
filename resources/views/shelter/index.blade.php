@extends('layouts.master')


@section('title')
    Shelter Finder
@endsection


@section('content')
    <div class="container">
        <form method='GET' action='/find-shelter'>

            <!-- dropdown input to select number of persons, default is 1 guest -->
            <div class='row'>
                <div class="form-group col-sm-8">
                    <label for="guests">How many slots do you need</label>
                    <select class="form-control" id="guests" name="guests">
                        <option @if(old('guests') == '1')selected @endif>1</option>
                        <option @if(old('guests') == '2')selected @endif>2</option>
                        <option @if(old('guests') == '3')selected @endif>3</option>
                    </select>
                </div>
            </div>

            <!-- radio button to select if pets are included, default is no pets -->
			<div class='row'>
                <div class='form-group col-sm-8'>
                    <label>Pets</label>
    				<div>
    					<label class="radio-inline">
                            <input type="radio" name="pets" value="1" @if(old('pets')) checked @endif>
                             Yes
                        </label>
    					<label class="radio-inline">
                            <input type="radio" name="pets" value="0" @if(!old('pets')) checked @endif>
                            No
                        </label>
    				</div>
                </div>
			</div>

                <!-- email input to enter email address -->
            <div class="row">
                <div class="form-group col-sm-8">
                    <label for="email">Enter your email </label>
                    <input type='text' class='form-control' id='email' name='email'
                       placeholder="(required) name@example.com" value='{{old('email')}}' >

                    @include('modules.error-field', ['fieldName' => 'email'])
                </div>
            </div>

	        <input type='submit' class='btn btn-primary btn-small' value='Check Availability'>
	    </form>
	</div>
@endsection
