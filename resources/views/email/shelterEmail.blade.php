<h1>Result: {{$numShelter}} Shelter(s) Found: </h1>

<!-- display result -->
@if($numShelter == 0)
    <div class='alert alert-warning'> Sorry, there are no vacancies </div>
@else
    @foreach ($shelters as $name => $shelter)
        <div>
            <h2>{{$name}}</h2>
            <ul>
                <li>Maximum Occupancy: {{$shelter['maxOccupancy']}}</li>
                <li>Persons currentlty in shelter: {{$shelter['currentGuests']}}</li>
                <li>Pets Allowed: {{$shelter['petsAllowed']}}</li>
            </ul>
        </div>
    @endforeach
@endif
