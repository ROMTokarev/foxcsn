@extends('auth.layouts.auth')

@section('content')
		<div class="account-pages"></div>
		<div class="clearfix"></div>
		<div class="wrapper-page">
			<div class=" card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Reset Password </h3>
				</div>

				<div class="panel-body">
					<form class="form-horizontal m-t-20" method="POST" action="{{ route('password.request') }}">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">

                       <input type="hidden" name="token" value="{{ $token }}">

						<div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" type="email" name="email" id="email" value="{{ $email or old('email') }}" required autofocus placeholder="Email">
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

						<div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="submit">
									Reset Password
								</button>
							</div>
						</div>

					</form>

				</div>
			</div>
		</div>


@endsection
