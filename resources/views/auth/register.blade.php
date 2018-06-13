@extends('auth.layouts.auth')

@section('content')

		<div class="account-pages"></div>
		<div class="clearfix"></div>
		<div class="wrapper-page">
			<div class=" card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Sign Up </h3>
				</div>

				<div class="panel-body">
					<form class="form-horizontal m-t-20" method="POST" action="{{ route('register') }}">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">

   @if ($errors->has('name')==TRUE || $errors->has('email')==TRUE ||
        $errors->has('password')==TRUE || $errors->has('password_confirmation')==TRUE ||
        $errors->has('g-recaptcha-response')==TRUE || $errors->has('captcha')==TRUE)

		<div class="alert alert-info alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
								×
							</button>

                         @if ($errors->has('name'))  
                             {{ $errors->first('name') }}
 				         @endif

                         @if ($errors->has('email'))  
                            <br/> {{ $errors->first('email') }}
 				         @endif

                         @if ($errors->has('password'))  
                            <br/> {{ $errors->first('password') }}
 				         @endif

                         @if ($errors->has('password_confirmation'))  
                            <br/> {{ $errors->first('password_confirmation') }}
 				         @endif

                         @if ($errors->has('g-recaptcha-response'))  
                            <br/> {{ $errors->first('g-recaptcha-response') }}
 				         @endif

                         @if ($errors->has('captcha'))  
                            <br/> {{ $errors->first('captcha') }}
 				         @endif

						</div>
                                @endif

						<div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}" required="" placeholder="Email">
							</div>
						</div>

						<div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" type="text" name="name" value="{{ old('name') }}" id="name" required="" placeholder="Username">
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<input class="form-control" type="password" id="password" name="password" required="" placeholder="Password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
								<input class="form-control" type="password" id="password-confirm" name="password_confirmation" required="" placeholder="Confirm Password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-12">
							  <div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
							</div>
						</div>


						<div class="form-group text-center">
							<div class="col-xs-12">
								<button class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="submit">
									Register
								</button>
							</div>
						</div>

					</form>

				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 text-center">
					<p>
						Already have account?<a href="/login" class="text-primary m-l-5"><b>Log In</b></a>
					</p>
				</div>
			</div>

		</div>


@endsection
