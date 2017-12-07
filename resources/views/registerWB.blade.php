@extends('layouts.masterWB')

@section('content')
    
<div class="container">
  <h5>Register Form</h5>
  <h4> &nbsp</h4>
  <form class="form-horizontal left-align" action="/action_page.php">
    <div class="form-group">
      <div class="row">          
        <input type="password" class="form-control col s7 push-s4" id="nama" name="nama">
        <label class="control-label col s4 pull-s7" for="nama">Nama:</label>
      </div>
    </div>
    <div class="form-group">
      <div class="row">          
        <input type="password" class="form-control col s7 push-s4" id="username" name="username">
        <label class="control-label col s4 pull-s7" for="username">Username:</label>
      </div>
    </div>
    <div class="form-group">
      <div class="row">          
        <input type="password" class="form-control col s7 push-s4" id="password" name="password">
        <label class="control-label col s4 pull-s7" for="password">Password:</label>
      </div>
    </div>
    <div class="form-group">
      <div class="row">          
        <input type="password" class="form-control col s7 push-s4" id="confirmpassword" name="confirmpassword">
        <label class="control-label col s4 pull-s7" for="confirmpassword">Confirm Password:</label>
      </div>
    </div>
    <div class="form-group">
      <div class="row">          
        <input type="password" class="form-control col s7 push-s4" id="role" name="role">
        <label class="control-label col s4 pull-s7" for="role">Role:</label>
      </div>
    </div>
    <div class="form-group">
      <div class="row">          
        <input type="password" class="form-control col s7 push-s4" id="instansi" name="instansi">
        <label class="control-label col s4 pull-s7" for="instansi">Sekolah:</label>
      </div>
    </div>
    <div class="form-group center-align">        
      <div class="col-sm-5">
        <button type="submit" class="btn btn-default">Register</button>
      </div>
    </div>
  </form>
</div>

@endsection