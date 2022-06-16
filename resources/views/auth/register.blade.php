@extends('layouts.app')
@section("title","Sample Request")

<head>
	<title>PT Victory Pan Multitex</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

@section('content')
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="images/img-01.png" alt="IMG">
            </div>
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                    <span class="login100-form-title">
						Member Register
					</span>
                    
                <div class="wrap-input100 validate-input"  data-validate = "Valid name is required: ex@abc.xyz">
                    <input type="text" id="name" class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Input Name" autofocus required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
    
                    @if ($errors->has('email'))
                        <br>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <strong><i class="icon fa fa-ban"></i> Alert!</strong> &nbsp; {{ $errors->first('email') }}
                        </div>
                    @endif
    
                </div>

                <div class="wrap-input100 validate-input"  data-validate = "Valid email is required: ex@abc.xyz">
                    <input type="email" name="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="inpuut Email" autofocus required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
    
                     @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
    
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input type="password" name="password"  id="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="password" required>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
    
                     @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
    
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input type="password" id="password-confirm"  name="password_confirmation" name="password-confirm" class="input100" placeholder="password-confirm" value="{{ old('password') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-key" aria-hidden="true"></i>
                    </span>
    
                  
                </div>
                <div class="row">
                    <div class="col-xs-12 container-login100-form-btn">
                        <button type="submit" class="login100-form-btn btn-block btn-flat">{{ __('Register') }}</button>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    @if (Route::has('login'))
                        <a href="{{ route('login') }}" class="btn btn-block btn-social btn-facebook btn-flat">Sign In<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i></a>
                    @endif
                </div>
            </form>
        <!-- /.social-auth-links -->

        </div>
    </div>
    <!-- /.login-box-body -->
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row wrap-input100 validate-input"  data-validate = "Valid email is required: ex@abc.xyz">
                            <label for="name" class=" input100 col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection

@push("scripts")
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

@endpush
