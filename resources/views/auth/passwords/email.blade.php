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
					<form method="POST" action="{{ route('password.email') }}" role="form" class="text-center">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="alert alert-info alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
								×
							</button>
                    @if (session('status'))
                            {{ session('status') }}
                    @elseif ($errors->has('email'))
                            {{ $errors->first('email') }}
                    @else
                            Enter your <b>Email</b> and instructions will be sent to you!
                    @endif					
						</div>


						<div class="form-group m-b-0">
							<div class="input-group">
								<input type="email" id="email" style="height: 38px;" name="email" class="form-control" placeholder="Enter Email" value="{{ old('email') }}" required autofocus>
								<span class="input-group-btn">
									<button type="submit" class="btn btn-info w-sm waves-effect waves-light">
										Reset
									</button> 
								</span>
							</div>
						</div>


					</form>
				</div>
			</div>
		</div>



@endsection
