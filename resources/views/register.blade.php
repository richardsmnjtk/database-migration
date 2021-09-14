@extends('master')

@section('content')
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<form action="/welcome">
  <!-- nama  -->
  <label for="first">First Name :</label> <br />
  <input type="text" name="first" /> <br /><br />
  <label for="last">Last Name :</label><br />
  <input type="text" name="last" /><br /><br />

  <!-- gender -->
  <label for="">Gender:</label><br /><br />
  <input type="radio" id="man" name="gender" value="man" />
  <label for="man">Man</label><br />
  <input type="radio" id="woman" name="gender" value="woman" />
  <label for="woman">Woman</label><br />
  <input type="radio" id="other" name="gender" value="other" />
  <label for="other">Other</label><br /><br />

  <!-- nationality -->
  <label for="national">Nationality</label><br /><br />
  <select name="national" id="">
    <option value="Indonesia">Indonesia</option>
    <option value="singapura">Singapura</option>
    <option value="malaysia">Malaysia</option> 
    <option value="thailand">Thailand</option></select
  ><br /><br />

  <!-- laguange spoken -->
  <label for=""></label>
  <label for="">Language Spoken:</label><br /><br />
  <input type="checkbox" id="Bahasa" name="lang" value="Bahasa" />
  <label for="Bahasa">Bahasa Indonesia</label><br />
  <input type="checkbox" id="english" name="lang" value="english" />
  <label for="english">English</label><br />
  <input type="checkbox" id="arabic" name="lang" value="arabic" />
  <label for="arabic">Arabic</label><br />
  <input type="checkbox" id="japanese" name="lang" value="japanese" />
  <label for="japanese">Japanese</label><br />

  <!-- bio -->
  <label for="bio">Bio :</label><br /><br />
  <textarea name="bio" id="" cols="30" rows="10"></textarea>
  <br />
  <button type="submit">Sign Up</button>
</form>
@endsection