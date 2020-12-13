@extends('layouts.master')
@section('content')
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Login to your account</h2>
                        <form action="{{route('login.user')}}" method="post">
                            @csrf
                            <input type="text" placeholder="Enter Email Address or Phone Number" />
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <input type="password" placeholder="Enter Password" />
                            @error('password')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <span>
								<input type="checkbox" class="checkbox" value="keymelogin">
								Keep me signed in
							</span>
                            <button type="submit" class="btn btn-default" value="login" name="login">Login</button>
                        </form>
                    </div><!--/login form-->
                </div>
                <div class="col-sm-1">
                    <h2 class="or">OR</h2>
                </div>
                <div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
                        <h2>New User Signup!</h2>
                        @if(Session::has('register_successfully'))
                            <div class="alert alert-success">{{Session::get('register_successfully')}} </div>
                        @elseif(Session::has('registration_fails'))
                            <div class="alert alert-danger">{{Session::get('registration_fails')}} </div>
                        @endif
                        <form action="{{route('register.user')}}" method="POST">
                            @csrf
                            <input type="text" placeholder="Name" name="name"/>
                            @error('name')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="email" placeholder="Email Address" name="email"/>
                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="text" placeholder="Mobile Number: 03001234567" name="mobile"/>
                            @error('mobile')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <input type="password" placeholder="Password" name="password"/>
                            @error('password')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                            <button type="submit" class="btn btn-default" name="signup" value="singup">Signup</button>
                        </form>
                    </div><!--/sign up form-->
                </div>
            </div>
        </div>
    </section><!--/form-->
@endsection
