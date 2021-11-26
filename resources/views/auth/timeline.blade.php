<form method="POST" action="{{route('updatetimeline')}}">
    @csrf
    <label for="gender">Select Gender:</label> 
       <input type="radio" name='gender' value='m'> Male
       <input type="radio" name='gender' value='f' > Female
       <br>
       <label for="gender">Select DOB:</label> 
       <input type="date" name='dob' class='form-control'>
       <input type="submit" name="submit" value="Submit">