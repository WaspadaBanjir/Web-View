@extends('layouts.masterWB')

@section('content')
    <div class="container center-align">

        <h5> &nbsp</h5>

        <form action="login-user" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="username" class="col-3">Username:</label>
                <input type="text" class="col-3 form-control" id="username" placeholder="Username" name="username">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>

            <h5> &nbsp</h5>

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>
        </form>
    </div>
@endsection