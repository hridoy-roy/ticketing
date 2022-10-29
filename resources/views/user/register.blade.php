@extends('layout')

@section('main')
    <main id="main">
        <div class="l-main-container">
            <div class="login-area login-s2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-10 mx-auto">
                            <div class="login-box">
                                <form action="{{route('user.register')}}" method="post">
                                    @csrf
                                    <div class="login-form-head">
                                        <h4>Sign Up</h4>
                                        <p>Hello there, Sign up and start managing your Dashboard</p>
                                    </div>
                                    @if ($errors->any())
                                        @foreach ($errors->all() as $error)
                                            <div>{{$error}}</div>
                                        @endforeach
                                    @endif
                                    <div id="loginErr"></div>

                                    <div class="login-form-body">
                                        <div class="form-gp">
                                            <input id="name" type="text" name="name" class="@error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="form-gp">
                                            <input id="phone" type="text" name="phone" placeholder="Mobile Number (Optional)" value="{{ old('phone') }}">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="form-gp">
                                            <input id="email" type="email" name="email" class="@error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="form-gp">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                            <i class="fa fa-eye eye_icon"></i>
                                        </div>
                                        <div class="form-gp">
                                            <input id="password" type="password" name="password_confirmation"  class="@error('password_confirmation') is-invalid @enderror" required=""
                                                   placeholder="Password">
                                            <i class="fa fa-eye eye_icon"></i>
                                        </div>

                                        <div class="submit-btn-area">
                                            <button id="form_submit" type="submit">Submit<i
                                                    class="fa fa-arrow-right"></i></button>
                                        </div>
                                        <div class="form-footer text-center mt-4">
{{--                                            <p class="text-muted">Already have an account? <a href="{{route('')}}">Sign In</a></p>--}}
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
