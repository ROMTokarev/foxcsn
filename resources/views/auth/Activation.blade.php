@extends('auth.layouts.auth')

@section('content')
		<div class="account-pages"></div>
		<div class="clearfix"></div>
		<div class="wrapper-page">
			<div class=" card-box">
				<div class="panel-heading">
					<h3 class="text-center"> Account Activation </h3>
				</div>


@isset($error)

		<div class="alert alert-info alert-dismissable">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
								×
							</button>
                            {{ $error }}
 				
						</div>

@endisset


			
					<form class="form-horizontal m-t-20" method="POST">
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group ">
							<div class="col-xs-12">
								<input class="form-control" type="text" name="Token" id="Token" value="{{ $Token }}" required>
							</div>
						</div>

                <div class="form-group ">
                    <div class="col-xs-12">
<div class="g-recaptcha" data-sitekey="{{ env('RE_CAP_SITE') }}"></div>
                    </div>
                </div>

						<div class="form-group text-center m-t-40">
							<div class="col-xs-12">
								<button class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="submit">
									Activation
								</button>
							</div>
						</div>

					</form>

			</div>
		</div>


@endsection
