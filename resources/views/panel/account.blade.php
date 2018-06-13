

<ScriptLoader>

document.title = "{{ $title }}";

function settings() {

var preloader = document.getElementById('preloader2');

var PAddress = document.getElementById('PAddress').value;

$.ajax(
{
    type: 'post',
    url: '{{ asset('/a/account/settings') }}',
    data: {_token:"{{ csrf_token() }}", Address:PAddress},
    beforeSend: function()
    {
        preloader.style.display="block";
    },
    success: function(data)
    {
      preloader.style.display="none";

      if(Number(data["code"]) == 402)
      {
        $.Notification.notify('warning','bottom right','Oops...', 'You entered an incorrect address');
        return 0;
      }

      if(Number(data["code"]) == 400)
      {
        $.Notification.notify('success','bottom right','Oops...', 'Your new address: ' + data["Address"]);
      }

      document.getElementById('PAddress').value = data["Address"];
      document.getElementById('SaleAddress').value = data["Address"];
      document.getElementById('BountyAddress').value = data["Address"];


    },
    error: function()
    {
        preloader.style.display="none";
        $.Notification.notify('error','bottom right', 'Oops...', 'Something went wrong! Please reload the page and try again.');
    }
});

}





function bounty() {

var preloader = document.getElementById('preloader2');

var PAddress = document.getElementById('PAddress').value;

$.ajax(
{
    type: 'post',
    url: '{{ asset('/a/account/bounty') }}',
    data: {_token:"{{ csrf_token() }}"},
    beforeSend: function()
    {
        preloader.style.display="block";
    },
    success: function(data)
    {
      preloader.style.display="none";

      if(Number(data["code"]) == 402)
      {
        $.Notification.notify('warning','bottom right', 'Oops...', 'The withdrawal of funds will be available after the final Pre ICO'); 
        return 0;
      }

      if(Number(data["code"]) == 403)
      {
        $.Notification.notify('warning','bottom right','Oops...', 'You entered an incorrect address'); 
        return 0;
      }

      if(Number(data["code"]) == 404)
      {
        $.Notification.notify('warning','bottom right','Oops...', 'There are not enough funds on your account'); 
        return 0;
      }

      if(Number(data["code"]) == 400)
      {
        $.Notification.notify('success','bottom right','Excellent!', 'You have successfully sent '+data["tokens"]+' FXN tokens'); 
        window.balanceFXN = window.balanceFXN - data["tokens"];
        document.getElementById('BountyToken').value = "0";
      }


    },
    error: function()
    {
        preloader.style.display="none";
        $.Notification.notify('error','bottom right', 'Oops...', 'Something went wrong! Please reload the page and try again.');
    }
});

}


function ICO() {

var preloader = document.getElementById('preloader2');

var PAddress = document.getElementById('PAddress').value;

$.ajax(
{
    type: 'post',
    url: '{{ asset('/a/account/ico') }}',
    data: {_token:"{{ csrf_token() }}"},
    beforeSend: function()
    {
        preloader.style.display="block";
    },
    success: function(data)
    {
      preloader.style.display="none";


      if(Number(data["code"]) == 402)
      {
        $.Notification.notify('warning','bottom right', 'Oops...', 'The withdrawal of funds will be available after the final Pre ICO'); 
        return 0;
      }

      if(Number(data["code"]) == 403)
      {
        $.Notification.notify('warning','bottom right','Oops...', 'You entered an incorrect address'); 
        return 0;
      }

      if(Number(data["code"]) == 404)
      {
        $.Notification.notify('warning','bottom right','Oops...', 'There are not enough funds on your account'); 
        return 0;
      }

      if(Number(data["code"]) == 400)
      {
        $.Notification.notify('success','bottom right','Excellent!', 'You have successfully sent '+data["tokens"]+' FXN tokens'); 
        window.balanceFXN = window.balanceFXN - data["tokens"];
        document.getElementById('SaleToken').value = "0";
      }


    },
    error: function()
    {
        preloader.style.display="none";
        $.Notification.notify('error','bottom right', 'Oops...', 'Something went wrong! Please reload the page and try again.');
    }
});

}








function ChangePassword() {

var preloader = document.getElementById('preloader2');

var current_password      = document.getElementById('current_password').value;
var password              = document.getElementById('password').value;
var password_confirmation = document.getElementById('password_confirmation').value;

$.ajax(
{
    type: 'post',
    url: '{{ asset('/a/account/changepassword') }}',

    data: {_token:"{{ csrf_token() }}", current_password:current_password, password:password, password_confirmation:password_confirmation},

    beforeSend: function()
    {
        preloader.style.display="block";
    },
    success: function(data)
    {
      preloader.style.display="none";

      if(Number(data["code"]) == 402)
      {
       var error = "";

       if(data["error"]["current_password"] != null)
       {
         error += data["error"]["current_password"]+ ". ";
       }

       if(data["error"]["password"] != null)
       {
         error += data["error"]["password"]+ ". ";
       }

       if(data["error"]["password_confirmation"] != null)
       {
         error += data["error"]["password_confirmation"]+ ". ";
       }

        $.Notification.notify('warning','bottom right','Oops....', error);
        return 0;
      }

      if(Number(data["code"]) == 400)
      {
        window.location = "{{ asset('/a/panel') }}";
      }

    },
    error: function()
    {
        preloader.style.display="none";
        $.Notification.notify('error','bottom right', 'Oops...', 'Something went wrong! Please reload the page and try again.');
    }
});

}




</ScriptLoader>
       




            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="page-title">Account</h4><br/>
                            </div>
                        </div>








<div class="row">

<div class="col-lg-6">
								<div class="panel panel-color panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title"><i class="ti-settings"></i> General Settings</h3>
									</div>
									<div class="panel-body">

                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" disabled value="{{ Auth::user()->email }}">
                                            </div>
                                        </div>
                                     </div>

                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" class="form-control" disabled value="{{ Auth::user()->name }}">
                                            </div>
                                        </div>
                                     </div>	


                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>User ID</label>
                                                <input type="text" class="form-control" disabled value="{{ Auth::user()->id }}">
                                            </div>
                                        </div>
                                     </div>	

                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Payment Address</label>
                                                <input type="text" id="PAddress" placeholder="0x0000000000000000000000000000000000000000" class="form-control" value="{{ Auth::user()->Payment }}">
                                            </div>
                                        </div>
                                     </div>	
<br/>
                                      <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                               <button onclick="settings()" class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="button">Update Settings</button>


                                            </div>
                                        </div>
                                     </div>										





		</div>
								</div>











								<div class="panel panel-color panel-warning">
									<div class="panel-heading">
										<h3 class="panel-title"><i class="md md-devices"></i> Visit History</h3>
									</div>
									<div class="panel-body">

	

<div class="p-20" style="padding-bottom: 34px!important;">
												<table class="table table-bordered m-0">
													
													<thead>
														<tr>
															<th>#</th>
															<th>IP</th>
															<th>DATE</th>
														</tr>
													</thead>
													<tbody>
												
      @foreach ($History as $index => $mass)
		                                                <tr>
															<th scope="row">{{ $index+1 }}</th>
															<td>{{ $mass->ip }}</td>
															<td>{{ $mass->data }}</td>
														</tr>
      @endforeach

      @if(($index++) < 10)
        @if($index != 10)
         
         @for(;$index < 10; $index++)

		                                                <tr>
															<th scope="row">{{ $index }}</th>
															<td>NONE</td>
															<td>NONE</td>
														</tr>

         @endfor

        @endif
      @endif
													
													</tbody>
												</table>
											</div>


<br/>






									</div>
								</div>
							




							</div>






<div class="col-lg-6">




								<div class="panel panel-color panel-warning">
									<div class="panel-heading">
										<h3 class="panel-title"><i class="ti-settings"></i> Change Password </h3>
									</div>
									<div class="panel-body">

                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Current Password</label>
                                                <input type="password" id="current_password" class="form-control" value="">
                                            </div>
                                        </div>
                                     </div>

                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" id="password" class="form-control" value="">
                                            </div>
                                        </div>
                                     </div>	


                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Repeat New Password</label>
                                                <input type="password" id="password_confirmation" class="form-control" value="">
                                            </div>
                                        </div>
                                     </div>	

<br/>
                                      <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
 <button onclick="ChangePassword()" class="btn btn-warning btn-block text-uppercase waves-effect waves-light" type="button">CHANGE PASSWORD</button>

                                            </div>
                                        </div>
                                     </div>										


									</div>
								</div>



								<div class="panel panel-color panel-success">
									<div class="panel-heading">
										<h3 class="panel-title"><i class="ti-briefcase"></i> Token Sale Program</h3>
									</div>
									<div class="panel-body">


                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Balance</label>
                                                <input type="text" id="SaleToken" class="form-control" disabled value="{{ $TokenSale }}">
                                            </div>
                                        </div>
                                     </div>
	

                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Configured address</label>
                                                <input type="text" id="SaleAddress" class="form-control" disabled value="{{ Auth::user()->Payment }}">
                                            </div>
                                        </div>
                                     </div>	

<br/>
                                      <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               <button onclick="ICO();" class="btn btn-success btn-block text-uppercase waves-effect waves-light" type="button">Cash Out</button>
                                            </div>
                                        </div>
                                     </div>	


									</div>
								</div>


								<div class="panel panel-color panel-success">
									<div class="panel-heading">
										<h3 class="panel-title"><i class="ti-announcement"></i> Bounty  Program</h3>
									</div>
									<div class="panel-body">




                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Balance</label>
                                                <input type="text" id="BountyToken" class="form-control" disabled value="{{ $Bounty }}">
                                            </div>
                                        </div>
                                     </div>	

                                      <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Configured address</label>
                                                <input type="text" id="BountyAddress" class="form-control" disabled value="{{ Auth::user()->Payment }}">
                                            </div>
                                        </div>
                                     </div>	


<br/>
                                      <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               <button onclick="bounty();" class="btn btn-success btn-block text-uppercase waves-effect waves-light" type="button">Cash Out</button>
                                            </div>
                                        </div>
                                     </div>	



									</div>
								</div>
							</div>













</div>

 


                





                    </div> <!-- container -->

                </div> <!-- content -->




