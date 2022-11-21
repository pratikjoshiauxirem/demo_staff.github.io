@extends('layout')
@section('content')
    <div class="container-fluid row ">
        <div class="col-12 col-sm-5 login p-1 p-sm-4 m-auto">
                <form class="form" method="post" action="{{$url1}}">
                        <h4 class="text-center">{{$title}}</h4>
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" value="@php echo is_null($staff)?"":"$staff->name"; @endphp" class="form-control" name="name" placeholder='Enter Name address'>
                            <span>
                                @error('name')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="password">Mobile</label>
                            <input type="mobile" value="@php echo is_null($staff)?"":"$staff->mobile"; @endphp"  class="form-control" name="mobile"  placeholder="Enter Mobile number Here">
                            <span>
                                @error('mobile')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" value="@php echo is_null($staff)?"":"$staff->email"; @endphp"  name="email" placeholder='Enter Email address'>
                            <span>
                                @error('email')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" value="" name="password"  placeholder="Enter Password Here">
                            <span>
                                @error('password')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation"  placeholder="Enter Password Here">
                            <span>
                                @error('password')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                <input type="submit" value="Register" class="btn btn-success">
                            </div>
                        </div>
                </form>
        </div>
    </div>
@endsection