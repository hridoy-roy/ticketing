@extends('layout')

@section('main')
    <main id="main">
        <div class="l-main-container">
            <div class="login-area login-s2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-10 mx-auto">
                            <div class="login-box">
                                <form>
                                    <div class="login-form-head">
                                        <h4>Sign Up</h4>
                                        <p>Hello there, Sign up and start managing your Dashboard</p>
                                    </div>

                                    <div id="loginErr"></div>

                                    <div class="login-form-body">
                                        <div class="form-gp">
                                            <input id="name" type="text" name="name" required="" placeholder="Name"
                                                   autocomplete="off">
                                            <i class="fa fa-user"></i>
                                        </div>
                                        <div class="form-gp">
                                            <input id="phone" type="text" maxlength="10" name="phone" required=""
                                                   placeholder="Mobile Number" autocomplete="off">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                        <div class="form-gp">
                                            <input id="email" type="email" name="email" placeholder="Email (Optional)"
                                                   autocomplete="off">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="form-gp togglePass5">
                                            <input id="password" type="password" name="password" required=""
                                                   placeholder="Password" autocomplete="off">
                                            <i class="fa fa-eye eye_icon" id="regPassShowHide"></i>
                                        </div>

                                        <div class="submit-btn-area">
                                            <button id="form_submit" type="button">Submit<i
                                                    class="fa fa-arrow-right"></i></button>
                                        </div>
                                        <div class="form-footer text-center mt-4">
                                            <p class="text-muted">Already have an account? <a href="#">Sign In</a></p>
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
