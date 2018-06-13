
<ScriptLoader>

document.title = "{{ $title }}";

function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();

  $.Notification.notify('success','bottom right','Excellent!', 'Your address has been successfully copied!')

}

function buy() {

var preloader = document.getElementById('preloader2');

$.ajax(
{
    type: 'post',
    url: '{{ asset('a/home') }}',
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
        $.Notification.notify('warning','bottom right','Oops...', 'There are not enough funds on your account. Minimum Buy 5 FXN');
        return 0;
      }

      if(Number(data["code"]) == 400)
      {

        document.getElementById('Total').value = 0;
        document.getElementById('Bonus').value = 0;
        document.getElementById('BUY').value = 0;
        document.getElementById('BalETH').innerHTML = "0 ETH";

        window.balanceFXN = Number(window.balanceFXN) + Number(data["TokenTotal"]);
        $.Notification.notify('success','bottom right','You successfully bought tokens: '+Number(data["TokenTotal"])+' FXN', 'Current balance: '+window.balanceFXN+' FXN');
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

<style>

#qrcode img {display:block; margin:0 auto;}

</style>


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
                                <h4 class="page-title">Token Sale</h4><br/>
                            </div>
                        </div>





	<div class="row">


 <div class="col-xs-12 col-sm-4 col-md-4">
<div class="card-box">
                                            <div class="circliful-chart m-b-5" data-dimension="148" data-text="{{ $chart }}%" data-info="Token Sale" data-width="30" data-fontsize="24" data-percent="{{ $chart }}" data-fgcolor="#7266ba" data-bgcolor="#ebeff2"></div>
                                        </div> </div>




							<div class="col-xs-12 col-sm-5 col-md-5">
								<div class="card-box">
									<div class="bar-widget">
										<div class="table-box">

										<div class="iconbox bg-info" style="position:absolute">
											<i class="ion-arrow-graph-up-right"></i>
										</div>

											<div style="text-align: left; margin-left: 70px;">
											   <h4 class="m-t-0 m-b-5"><b>{{ $TokenCost }} $ / {{ $TokenCostETH }} ETH</b></h4>
											   <p class="text-muted m-b-0 m-t-0">FXN</p>
											</div>


										</div>
									</div>
								</div>
							</div>


              <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="card-box">
                  <div class="bar-widget">
                    <div class="table-box">

                    <div class="iconbox bg-info" style="position:absolute">
                      <i class="ion-plus-round"></i>
                    </div>

                      <div style="text-align: left; margin-left: 70px;">
                         <h4 class="m-t-0 m-b-5"><b>{{ $Bonus }}%</b></h4>
                         <p class="text-muted m-b-0 m-t-0">Bonus</p>
                      </div>


                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="card-box">
                  <div class="bar-widget">
                    <div class="table-box">

                    <div class="iconbox bg-info" style="position:absolute">
                      <i class="md-account-balance"></i>
                    </div>

                      <div style="text-align: left; margin-left: 70px;">
                         <h4 class="m-t-0 m-b-5"><b id="BalETH">{{ $EthBalance }} ETH</b></h4>
                         <p class="text-muted m-b-0 m-t-0">Balance</p>
                      </div>


                    </div>
                  </div>
                </div>
              </div>


							<div class="col-xs-12 col-sm-3 col-md-3">
								<div class="card-box">
									<div class="bar-widget">
										<div class="table-box">

										<div class="iconbox bg-info" style="position:absolute">
											<i class="ion-stats-bars"></i>
										</div>

											<div style="text-align: left; margin-left: 70px;">
											   <h4 class="m-t-0 m-b-5"><b>{{ $ETHCost }}$</b></h4>
											   <p class="text-muted m-b-0 m-t-0">ETH</p>
											</div>


										</div>
									</div>
								</div>
							</div>



	</div>



   <!-- end row -->













                        <div class="row">


                            <div class="col-lg-8 col-sm-8">
                        		<div class="card-box">

                                <h4 class="title">Pre-ICO</h4><hr/>

                            <div class="content">

                                    <div class="row">
                                        <div class="col-md-9 col-xs-12 col-sm-9">
                                            <div class="form-group">
                                                <label>Your wallet ETH</label>
                                                <input type="text" class="form-control" disabled value="{{ $Account }}">
<p id="wallet" style="display:none;">{{ $Account }}</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12 col-sm-3">
                                            <div class="form-group">
<label><br/></label>
<button onclick="copyToClipboard('#wallet')" class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="button">Copy</button>



                                            </div>
                                        </div>

                                    </div>
<div class="row">


 <div class="col-md-2 col-sm-3  col-xs-5">
                                           <div class="form-group">

                                                <label>BUY</label>
                                                <input type="text" id="BUY" class="form-control" disabled value="{{ $TokenBuy }}">
                                            </div>
                                        </div>

 <div class="col-md-1 col-sm-1  col-xs-2">
                                           <div class="form-group">

<lable><br/></lable>
                        <p align="center" style="font-size: 28px;">+</p>
                                            </div>
                                        </div>


 <div class="col-md-2 col-sm-3  col-xs-5">
                                           <div class="form-group">

                                                <label>Bonus</label>
                                                <input type="text" id="Bonus" class="form-control" disabled value="{{ $TokenBonus }}">
                                            </div>
                                        </div>

 <div class="col-md-1 col-sm-1 hidden-xs">
                                           <div class="form-group">

<lable><br/></lable>
                        <p align="center" style="font-size: 28px;">=</p>
                                            </div>
                                        </div>

 <div class="col-md-3 col-sm-4 col-xs-12">
                                            <div class="form-group">

                                                <label>Total</label>
                                                <input type="text" id="Total" class="form-control" disabled value="{{ $TokenTotal }}">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
<label><br/></label>


             <button  class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="button" onclick="buy()">Buy</button>

                                            </div>
                                        </div>


</div>








                                    <div class="clearfix"></div>
                            </div>






                        		</div>
                            </div>

                            <div class="col-lg-4 col-sm-4">
                        		<div class="card-box">

<h4 align="center" class="title">Wallet
                                      </h4>

                 <p class="description text-center" style=" vertical-align: middle;
text-align: center;">
<div id="qrcode"  style="margin-top:8px; vertical-align: middle;
text-align: center;"></div>
 <p></p>



                        		</div>
                            </div>


						</div>
                        <!-- end row -->

<div class="row">
                            <div class="col-lg-12 col-sm-12">
                            	<div class="card-box">

									<h4 class="m-t-0 header-title"><b>Transactions<hr/></b></h4>
                                    <div class="table-responsive">


                           @if($tx["status"] == 0)
                              No transactions found
                           @endif

                           @if($tx["status"] == 1)

										<table class="table table-bordered m-0">

													<thead>
														<tr>
															<th>TxHash</th>
															<th>Block</th>
															<th>Age</th>
															<th>From</th>
															<th>#</th>
															<th>To</th>
															<th>Value</th>
															<th>Confirm</th>
															<th>Status</th>
														</tr>
													</thead>
											<tbody>

                                           @foreach(array_reverse($tx["result"])  as $hash)
                                             <tr>
												<td><a href="https://etherscan.io/tx/{{ $hash["hash"] }}" target="_blank" alt="{{ $hash["hash"] }}" title="{{ $hash["hash"] }}">{{ substr($hash["hash"], 0, 15) }}...</a></td>
												<td>{{ $hash["blockNumber"] }}</td>
												<td>{{  date("Y-m-d H:i", $hash["timeStamp"]) }}</td>
												<td>
@if($Account != $hash["from"])
<a href="https://etherscan.io/address/{{ $hash["from"] }}" target="_blank" alt="{{ $hash["from"] }}" title="{{ $hash["from"] }}">{{ substr($hash["from"], 0, 15) }}...</a>
@endif

@if($Account == $hash["from"])
<span alt="{{ $hash["from"] }}" title="{{ $hash["from"] }}">{{ substr($hash["from"], 0, 15) }}...</sapn>
@endif

</td>
												<td>

@if($Account == $hash["from"])
<span class="label label-warning rounded">OUT</span>
@endif

@if($Account == $hash["to"])
<span class="label label-success rounded" style="padding-left: 12px;padding-right: 12px;">IN</span>
@endif

</td>
												<td>

@if($Account != $hash["to"])
<a href="https://etherscan.io/address/{{ $hash["to"] }}" target="_blank" alt="{{ $hash["to"] }}" title="{{ $hash["to"] }}">{{ substr($hash["to"], 0, 15) }}...</a>
@endif

@if($Account == $hash["to"])
<span alt="{{ $hash["to"] }}" title="{{ $hash["to"] }}">{{ substr($hash["to"], 0, 15) }}...</sapn>
@endif


</td>
												<td>{{ (float)bcdiv($hash["value"],'1000000000000000000',18) }} Ether</td>
												<td>

@if($hash["confirmations"] < 12)
 <span style="color:rgb(255, 189, 74);font-weight: 500;">{{ $hash["confirmations"] }}</span>
@endif

@if($hash["confirmations"] >= 12)
 <span style="color:rgb(129, 200, 104);font-weight: 500;">{{ $hash["confirmations"] }}</span>
@endif

</td>
												<td>

@if($hash["isError"] == 0)
 <span style="color:rgb(129, 200, 104);font-weight: 500;">Success</span>
@endif

@if($hash["isError"] == 1)
 <span style="color:#FF4500;font-weight: 500;">Error</span>
@endif

</td>
											 </tr>
                                           @endforeach


										</tbody>
												</table>
                          @endif
         </div>
     </div>
  </div>

</div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->


<ScriptLoader>
function QRun(){
var qrcode = new QRCode(document.getElementById("qrcode"), {
	width : 180,
	height : 180
});

	qrcode.makeCode("{{ $Account }}");

$.getScript( "{{ asset('panel/assets/plugins/jquery-circliful/js/jquery.circliful.min.js') }}", function( data, textStatus, jqxhr ) {
   $('.circliful-chart').circliful();
});
}
</ScriptLoader>
