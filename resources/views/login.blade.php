@extends('layout')
@section('content')
    <div class="container-fluid row p-5">
        <div class="col-12 col-sm-5 login p-1 p-sm-4 m-auto">
                <form class="form" method="post" action="/login">
                        <h4 class="text-center">Login Form</h4>
                        @csrf
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="uname" placeholder='Enter Email address'>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="upass" id="" placeholder="Enter Password Here">
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <input type="submit" value="login" class="btn btn-success">
                            </div>
                            <div class="col-9">
                                <a href="" class="float-right">Already have an account? Register</a>
                            </div>
                        </div>
                </form>
        </div>
    </div>
@endsection