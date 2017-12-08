@extends('layouts.masterWB')

@section('content')
    
<div class="container">
    <h5>Register Form</h5>
    <h4> &nbsp</h4>
    <form class="form-horizontal left-align" action="register-user" method="post">
        {{ csrf_field() }}
        <div class="row">          
            <input type="text" class="form-control col s7 push-s3" id="nama" name="nama">
            <label class="control-label col s3 pull-s7" for="nama">Nama:</label>
        </div>
        <div class="row">          
            <input type="text" class="form-control col s7 push-s3" id="username" name="username">
            <label class="control-label col s3 pull-s7" for="username">Username:</label>
        </div>
        <div class="row">          
            <input type="password" class="form-control col s7 push-s3" id="password" name="password">
            <label class="control-label col s3 pull-s7" for="password">Password:</label>
        </div>
        <div class="row">          
            <input type="password" class="form-control col s7 push-s3" id="password_confirmation" name="password_confirmation">
            <label class="control-label col s3 pull-s7" for="password_confirmation">Confirm Password:</label>
        </div>
        <div class="row">          
            <input type="text" class="form-control col s7 push-s3" id="role" name="role">
            <label class="control-label col s3 pull-s7" for="role">Role:</label>
        </div>
        <div class="row">          
            <input type="text" class="form-control col s7 push-s3" id="instansi" name="instansi">
            <label class="control-label col s3 pull-s7" for="instansi">Sekolah:</label>
        </div>
        <div class="form-group center-align">        
        <div class="col-sm-5">
            <button type="submit" class="btn btn-default">Register</button>
        </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form>
</div>

@endsection