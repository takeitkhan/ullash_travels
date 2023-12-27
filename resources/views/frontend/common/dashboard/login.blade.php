@extends('frontend.layouts.master')

@section('page-content')

<!-- customer login start -->
<!-- content start -->
    <div class="container-fluid bg-white pb-3 container-top-border">
        <!-- account block start -->
        <div class="container">
            <nav class="navbar clearfix secondary-nav pt-0 pb-0 login-page-seperator">
                <ul class="list mt-0">
                     <li><a href="{{ route('frontend_login') }}" class="active">Login</a></li>
                     <li><a href="{{ route('frontend_register') }}">Register</a></li>
                </ul>
            </nav>

            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 vertical-align d-none d-lg-block">
                    <img class="img-fluid" src="{{ asset('frontend/img/fimg.png') }}" width="500px" height="500px">
                </div>
                <div class="col-xl-6 offset-xl-0 col-lg-6 offset-lg-0 col-md-8 offset-md-2">
                    <div class="rightRegisterForm">
                    <form id="loginForm" class="form-horizontal" method="POST" action="{{ route('frontend_login') }}">
                        {{ csrf_field() }}
                        <div class="p-4">
                            <div class="form-group">
                                <label>Email ID</label>
                                <input name="email" type="text" class="form-control form-control-sm" placeholder="Email ID" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <label class="error text-danger" for="email">{{ $errors->first('email') }}</label>
                                @endif
                                
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password" class="form-control form-control-sm" placeholder="Password" value="{{ old('password') }}">
                                @if ($errors->has('password'))
                                <label class="error text-danger" for="password">{{ $errors->first('password') }}</label>
                                @endif
                            </div>
                            <div class="form-group">
                                <div class="row m-0">
                                    <div class="custom-control custom-checkbox col-6">
                                        <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="remember">Remember me</label>
                                    </div>
                                    <div class="col-6">
                                        <a href="{{ route('password.request') }}" class="float-right forgot-text">Forgot password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group d-grid">
                                <button type="submit" class="btn btn-primary login-page-button">Login</button>
                            </div>
                             <?php /*
                            <div class="hr-container">
                               <hr class="hr-inline" align="left">
                               <span class="hr-text"> or </span>
                               <hr class="hr-inline" align="right">
                            </div>

                            <div class="form-group d-grid">
                                <a href="{{ url('login/facebook') }}" class="btn btn-lg btn-block social-btn facebook-btn">
                                    <div class="row">
                                        <div class="col-3">
                                            <i class="fab fa-facebook-f float-right"></i>
                                        </div>
                                        <div class="col-9">
                                            <span>
                                            Login with Facebook
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="form-group  d-grid">
                                <a href="{{ url('login/google') }}" class="btn btn-lg btn-block social-btn google-btn">
                                    <div class="row">
                                        <div class="col-3">
                                            <i class="fab fa-google-plus-g float-right"></i>
                                        </div>
                                        <div class="col-9">
                                            <span>
                                            Login with Google plus
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            */ ?>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- account block end -->
    </div>
    <!-- content end -->    

<!-- customer login end -->



@endsection

@section('cusjs')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.1.60/inputmask/jquery.inputmask.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>

<script type="text/javascript">
$(document).ready(function()
{
    $("#loginForm").validate({
            rules: {
                email:{
                    required: true,
                    email:true
                },
                password:{
                    required: true
                }
            },
            messages: {
                email: {
                    required: 'The email field is required.',
                    email: 'The email must be a valid email address.'
                },
                password: {
                    required: 'The password field is required.'
                }
            }
        });

});
</script>
@endsection