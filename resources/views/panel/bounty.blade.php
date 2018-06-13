

<ScriptLoader>
   document.title = "{{ $title }}";
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
                                <h4 class="page-title">Bounty</h4><br/>
                            </div>
                        </div>








					<div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="card-box widget-box-1 bg-white">
                                	<h4 class="text-center" style="color: #1da1f2; font-size: 48px;"><i class="fa fa-twitter"></i></h4>
                                	<h2 class="text-center" style="color:#666; font-size: 18px; font-weight: 700; padding: 0px; margin-top: 0px; margin-bottom: 10px;">(Re-)Tweets</h2>
									<p class="text-center">Tweet or retweet posts on twitter</p>
                                	<br/><br/>
									<button class="btn btn-info btn-block text-uppercase waves-effect waves-light" data-toggle="modal" data-target="#Re-Tweets" type="button">More Info</button>
                                    <br/><br/>
								</div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="card-box widget-box-1 bg-white">
                                	<h4 class="text-center" style="color: #6ecadc; font-size: 48px;"><i class="fa fa-slack"></i></h4>
                                	<h2 class="text-center" style="color:#666; font-size: 18px; font-weight: 700; padding: 0px; margin-top: 0px; margin-bottom: 10px;">Join Slack</h2>
									<p class="text-center">Join us on Slack</p>
                                	<br/><br/>
									<button class="btn btn-info btn-block text-uppercase waves-effect waves-light" data-toggle="modal" data-target="#slack" type="button">More Info</button>
                                    <br/><br/>
								</div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="card-box widget-box-1 bg-white">
                                	<h4 class="text-center" style="color: #3b5998; font-size: 48px;"><i class="fa fa-facebook-official"></i></h4>
                                	<h2 class="text-center" style="color:#666; font-size: 18px; font-weight: 700; padding: 0px; margin-top: 0px; margin-bottom: 10px;">Facebook Post</h2>
									<p class="text-center">Post about HERO and earn tokens</p>
                                	<br/><br/>
									<button class="btn btn-info btn-block text-uppercase waves-effect waves-light" data-toggle="modal" data-target="#Facebook-Post" type="button">More Info</button>
                                    <br/><br/>
								</div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="card-box widget-box-1 bg-white">
                                	<h4 class="text-center" style="color: #cd201f; font-size: 48px;"><i class="ion-social-youtube "></i></h4>
                                	<h2 class="text-center" style="color:#666; font-size: 18px; font-weight: 700; padding: 0px; margin-top: 0px; margin-bottom: 10px;">Youtube Video</h2>
									<p class="text-center">Make a YouTube video and share it</p>
                                	<br/><br/>
									<button class="btn btn-info btn-block text-uppercase waves-effect waves-light" data-toggle="modal" data-target="#Youtube-Video" type="button">More Info</button>
                                    <br/><br/>
								</div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="card-box widget-box-1 bg-white">
                                	<h4 class="text-center" style="color: #517fa4; font-size: 48px;"><i class="fa fa-instagram"></i></h4>
                                	<h2 class="text-center" style="color:#666; font-size: 18px; font-weight: 700; padding: 0px; margin-top: 0px; margin-bottom: 10px;">instagram</h2>
									<p class="text-center">Instagram Follow</p>
                                	<br/><br/>
									<button class="btn btn-info btn-block text-uppercase waves-effect waves-light" data-toggle="modal" data-target="#instagram" type="button">More Info</button>
                                    <br/><br/>
								</div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-4">
                                <div class="card-box widget-box-1 bg-white">
                                	<h4 class="text-center" style="color: #ffd900; font-size: 48px;"><i class="ion-social-bitcoin "></i></h4>
                                	<h2 class="text-center" style="color:#666; font-size: 18px; font-weight: 700; padding: 0px; margin-top: 0px; margin-bottom: 10px;">Bitcoin Talk Forum</h2>
									<p class="text-center">Signature Campaign</p>
                                	<br/><br/>
									<button class="btn btn-info btn-block text-uppercase waves-effect waves-light" data-toggle="modal" data-target="#Bitcoin-Talk-Forum" type="button">More Info</button>
                                    <br/><br/>
								</div>
                            </div>


                        </div>







                        <div class="row">




							                            <!-- Transactions -->
                            <div class="col-lg-12 col-sm-12">
                            	<div class="card-box">

									<h4 class="m-t-0 header-title"><b>Results<hr/></b></h4>
                                    <div class="table-responsive">
										<table class="table table-bordered m-0">

													<thead>
														<tr>
															<th>#</th>
															<th>Email</th>
															<th>Tokens</th>
															<th>Date</th>
															<th>Status</th>

														</tr>
													</thead>
											<tbody>
											<tr>
												<td>(Re-)Tweets</td>
												<td>{{ $email }}</td>
												<td>{{ 0 + $Tweets["tokens"] }} FNX</td>
												<td>
                                                @if($Tweets["data"]!="")
                                                  {{ date('Y-m-d', $Tweets["data"]) }}
                                                @endif
                                                </td>
												<td>


                                                @if($Tweets["status"] == 0)
                                                  <span class="label label-table label-inverse">No information</span>
                                                @endif

                                                @if($Tweets["status"] == 1)
                                                  <span class="label label-table label-success">Confirmed</span>
                                                @endif

                                                @if($Tweets["status"] == 2)
                                                  <span class="label label-table label-danger">Blocked</span>
                                                @endif

                                                @if($Tweets["status"] == 3)
                                                  <span class="label label-table label-success">Paid</span>
                                                @endif

</td>
											</tr>
											<tr>
												<td>Join Slack</td>
												<td>{{ $email }}</td>
												<td>{{ 0 + $Slack["tokens"] }} FNX</td>
												<td>
                                                @if($Slack["data"]!="")
                                                  {{ date('Y-m-d', $Slack["data"]) }}
                                                @endif
                                                </td>
												<td>
                                                @if($Slack["status"] == 0)
                                                  <span class="label label-table label-inverse">No information</span>
                                                @endif

                                                @if($Slack["status"] == 1)
                                                  <span class="label label-table label-success">Confirmed</span>
                                                @endif

                                                @if($Slack["status"] == 2)
                                                  <span class="label label-table label-danger">Blocked</span>
                                                @endif

                                                @if($Slack["status"] == 3)
                                                  <span class="label label-table label-success">Paid</span>
                                                @endif

</td>
											</tr>
											<tr>
												<td>Facebook Post</td>
												<td>{{ $email }}</td>
												<td>{{ 0 + $Facebook["tokens"] }} FNX</td>
												<td>
                                                @if($Facebook["data"]!="")
                                                  {{ date('Y-m-d', $Facebook["data"]) }}
                                                @endif
                                                </td>
												<td>

                                                @if($Facebook["status"] == 0)
                                                  <span class="label label-table label-inverse">No information</span>
                                                @endif

                                                @if($Facebook["status"] == 1)
                                                  <span class="label label-table label-success">Confirmed</span>
                                                @endif

                                                @if($Facebook["status"] == 2)
                                                  <span class="label label-table label-danger">Blocked</span>
                                                @endif

                                                @if($Facebook["status"] == 3)
                                                  <span class="label label-table label-success">Paid</span>
                                                @endif

</td>
											</tr>
											<tr>
												<td>Youtube Video</td>
												<td>{{ $email }}</td>
												<td>{{ 0 + $Youtube["tokens"] }} FNX</td>
												<td>
                                                @if($Youtube["data"]!="")
                                                  {{ date('Y-m-d', $Youtube["data"]) }}
                                                @endif
                                                </td>
												<td>

                                                @if($Youtube["status"] == 0)
                                                  <span class="label label-table label-inverse">No information</span>
                                                @endif

                                                @if($Youtube["status"] == 1)
                                                  <span class="label label-table label-success">Confirmed</span>
                                                @endif

                                                @if($Youtube["status"] == 2)
                                                  <span class="label label-table label-danger">Blocked</span>
                                                @endif

                                                @if($Youtube["status"] == 3)
                                                  <span class="label label-table label-success">Paid</span>
                                                @endif

</td>
											</tr>
											<tr>
												<td>instagram</td>
												<td>{{ $email }}</td>
												<td>{{ 0 + $instagram["tokens"] }} FNX</td>
												<td>
                                                @if($instagram["data"]!="")
                                                  {{ date('Y-m-d', $instagram["data"]) }}
                                                @endif
                                                </td>
												<td>

                                                @if($instagram["status"] == 0)
                                                  <span class="label label-table label-inverse">No information</span>
                                                @endif

                                                @if($instagram["status"] == 1)
                                                  <span class="label label-table label-success">Confirmed</span>
                                                @endif

                                                @if($instagram["status"] == 2)
                                                  <span class="label label-table label-danger">Blocked</span>
                                                @endif

                                                @if($instagram["status"] == 3)
                                                  <span class="label label-table label-success">Paid</span>
                                                @endif

</td>
											</tr>
											<tr>
												<td>Bitcoin Talk Forum</td>
												<td>{{ $email }}</td>
												<td>{{ 0 + $Bitcoin["tokens"] }} FNX</td>
												<td>
                                                @if($Bitcoin["data"]!="")
                                                  {{ date('Y-m-d', $Bitcoin["data"]) }}
                                                @endif
                                                </td>
												<td>

                                                @if($Bitcoin["status"] == 0)
                                                  <span class="label label-table label-inverse">No information</span>
                                                @endif

                                                @if($Bitcoin["status"] == 1)
                                                  <span class="label label-table label-success">Confirmed</span>
                                                @endif

                                                @if($Bitcoin["status"] == 2)
                                                  <span class="label label-table label-danger">Blocked</span>
                                                @endif

                                                @if($Bitcoin["status"] == 3)
                                                  <span class="label label-table label-success">Paid</span>
                                                @endif

</td>
											</tr>
										</tbody>
												</table>
											</div>
</div>



                            </div> <!-- end col -->


						</div>


                        		</div>
                            </div>
                         </div>




                    </div> <!-- container -->

                </div> <!-- content -->











<style>
.panel-body {
    max-height: calc(100vh - 210px);
    overflow-y: auto;
}

.modal-open .modal {
    overflow-x: hidden;
    overflow-y: hidden;
}

</style>








                                    <div id="Re-Tweets" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content p-0 b-0">
                                                <div class="panel panel-color panel-primary">
                                                    <div class="panel-heading" style="background-color:#1da1f2;">
                                                        <button type="button" class="close m-t-5" data-dismiss="modal" style="color: #fff;" aria-hidden="true">×</button>
														<p class="text-center" style="font-size: 60px; color: #fff;"><i class="fa fa-twitter"></i></p>
														<p class="text-center" style="font-size: 21px; color: #fff; margin-top: -20px;margin-bottom: 25px;">(Re-)Tweets</p>
                                                    </div>
                                                    <div class="panel-body">




<h4>How it works</h4>
<p>Tweet or retweet posts on twitter containing ALL of the following hashtags:<br/>
#FOXCSN #FOXCASINO #ICO #ETHEREUM #ETH #FXN</p>
<br/>

<div style="background-color: #eee;     padding: 15px;
    border-radius: 6px;">
<h5>Steps:</h5>
<ul>
<li>Follow @foxcsn on Twitter</li>
<li>(Re-)Tweet only content from/about the official @foxcsn</li>
<li>Fill out the form at the bottom</li>
</ul>
</div>
<br/>

<div style="background-color: #eee;     padding: 15px;
    border-radius: 6px;">
<h5>Rules:</h5>
<ul>
<li>Account must be at least 3 months old</li>
<li>Only Tweets containing all of the above hashtags qualify</li>
<li>You must be following @foxcsn</li>
<li>You can qualify for this bounty with a maximum of 30 (re-)tweets</li>
<li>You can qualify for this bounty with a maximum of 10 (re-)tweets per week</li>
<li>Retweets must be retweeted from the official @foxcsn channel</li>
</ul>
</div>
<br/>

<p>Rewards:</p>
<div class="p-20">
												<table class="table table-bordered m-0">

													<thead>
														<tr>
															<th>#</th>
															<th>TWEET</th>
															<th>Tokens</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">1</th>
															<td>>1.000.000</td>
															<td>1000 FXN</td>
														</tr>
														<tr>
															<th scope="row">2</th>
															<td>>500.000</td>
															<td>500 FXN</td>
														</tr>
														<tr>
															<th scope="row">3</th>
															<td>>100.000</td>
															<td>50 FXN</td>
														</tr>
														<tr>
															<th scope="row">4</th>
															<td>>50.000</td>
															<td>25 FXN</td>
														</tr>
														<tr>
															<th scope="row">5</th>
															<td>>10.000</td>
															<td>10 FXN</td>
														</tr>
														<tr>
															<th scope="row">5</th>
															<td>>100</td>
															<td>5 FXN</td>
														</tr>
													</tbody>
												</table>
											</div>

<div class="p-20">
												<table class="table table-bordered m-0">

													<thead>
														<tr>
															<th>#</th>
															<th>RETWEET</th>
															<th>Tokens</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">1</th>
															<td>>1.000.000</td>
															<td>1000 FXN</td>
														</tr>
														<tr>
															<th scope="row">2</th>
															<td>>500.000</td>
															<td>500 FXN</td>
														</tr>
														<tr>
															<th scope="row">3</th>
															<td>>100.000</td>
															<td>50 FXN</td>
														</tr>
														<tr>
															<th scope="row">4</th>
															<td>>50.000</td>
															<td>25 FXN</td>
														</tr>
														<tr>
															<th scope="row">5</th>
															<td>>10.000</td>
															<td>10 FXN</td>
														</tr>
														<tr>
															<th scope="row">5</th>
															<td>>1.000</td>
															<td>5 FXN</td>
														</tr>
													</tbody>
												</table>
											</div>


<br/>


<a href="https://docs.google.com/forms/d/1aLmTx7zL2N3_YIlPg2cp5Z5WANX2YCuFkPCLlhnW8Gg/viewform?edit_requested=true" target="_blank" class="btn btn-info btn-block text-uppercase waves-effect waves-light btn-custom">Start</a>




                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->



                                    <div id="slack" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content p-0 b-0">
                                                <div class="panel panel-color panel-primary">
                                                    <div class="panel-heading" style="background-color:#6ecadc;">
                                                        <button type="button" class="close m-t-5" data-dismiss="modal" style="color: #fff;" aria-hidden="true">×</button>
														<p class="text-center" style="font-size: 60px; color: #fff;"><i class="fa fa-slack"></i></p>
														<p class="text-center" style="font-size: 21px; color: #fff; margin-top: -20px;margin-bottom: 25px;">Join Slack</p>
                                                    </div>
                                                    <div class="panel-body">




<h4>How it works</h4>

<div style="background-color: #eee;     padding: 15px;
    border-radius: 6px;">
<h5>Steps:</h5>
<ul>
<li>Follow us on Slack (<a href="https://foxcsn.slack.com/" target="_blank">foxcsn.slack.com</a>)</li>
<li>Fill out the form at the bottom</li>
</ul>
</div>
<br/>

<div style="background-color: #eee;     padding: 15px;
    border-radius: 6px;">
<h5>Rules:</h5>
<ul>
<li>You can qualify for this bounty with a minimum of 5 messages</li>
<li>You can qualify for this bounty with a maximum of 1 message per day</li>
</ul>
</div>
<br/>

<p>Rewards:</p>
<div class="p-20">
												<table class="table table-bordered m-0">

													<thead>
														<tr>
															<th>#</th>
															<th>Join Slack</th>
															<th>Tokens</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">1</th>
															<td>-</td>
															<td>5 FXN</td>
														</tr>
													</tbody>
												</table>
											</div>


<br/>


<a href="https://docs.google.com/forms/d/1XXqlI4kjO2Lks7ybEgZP4Az0ass0e272LIPnx00uQ1A/viewform?edit_requested=true" target="_blank" class="btn btn-info btn-block text-uppercase waves-effect waves-light btn-custom">Start</a>


                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->


                                    <div id="Facebook-Post" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content p-0 b-0">
                                                <div class="panel panel-color panel-primary">
                                                    <div class="panel-heading" style="background-color:#3b5998;">
                                                        <button type="button" class="close m-t-5" data-dismiss="modal" style="color: #fff;" aria-hidden="true">×</button>
														<p class="text-center" style="font-size: 60px; color: #fff;"><i class="fa fa-facebook-official"></i></p>
														<p class="text-center" style="font-size: 21px; color: #fff; margin-top: -20px;margin-bottom: 25px;">Facebook Post</p>
                                                    </div>
                                                    <div class="panel-body">



<h4>How it works</h4>
<p>Post about FoxCasino and earn tokens</p>
<br/>

<div style="background-color: #eee;     padding: 15px;
    border-radius: 6px;">
<h5>Steps:</h5>
<ul>
<li>Like our page and follow us at <a href="https://www.facebook.com/Foxcsn-882509438582546/" target="_blank">https://www.facebook.com/Foxcsn-882509438582546/</a></li>
<li>Post something</li>
<li>Fill out the form at the bottom</li>
</ul>
</div>
<br/>

<div style="background-color: #eee;     padding: 15px;
    border-radius: 6px;">
<h5>Rules:</h5>
<ul>
<li>Account must be at least 3 months old</li>
<li>You must have liked <a href="https://www.facebook.com/Foxcsn-882509438582546/" target="_blank">https://www.facebook.com/Foxcsn-882509438582546/</a></li>
<li>An account only qualifies once, no matter how many posts are made</li>
<li>You can qualify for this bounty with a minimum of 5 posts</li>
<li>You can qualify for this bounty with a maximum of 1 post per day</li>
</ul>
</div>
<br/>


<p>Rewards:</p>
<div class="p-20">
												<table class="table table-bordered m-0">

													<thead>
														<tr>
															<th>#</th>
															<th>Followers/friends</th>
															<th>Tokens</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">1</th>
															<td>>1.000.000</td>
															<td>1000 FXN</td>
														</tr>
														<tr>
															<th scope="row">2</th>
															<td>>500.000</td>
															<td>500 FXN</td>
														</tr>
														<tr>
															<th scope="row">3</th>
															<td>>100.000</td>
															<td>60 FXN</td>
														</tr>
														<tr>
															<th scope="row">4</th>
															<td>>50.000</td>
															<td>30 FXN</td>
														</tr>
														<tr>
															<th scope="row">5</th>
															<td>>10.000</td>
															<td>10 FXN</td>
														</tr>
														<tr>
															<th scope="row">6</th>
															<td>>1.000</td>
															<td>5 FXN</td>
														</tr>
													</tbody>
												</table>
											</div>


<br/>


<a href="https://docs.google.com/forms/d/1e-8xFe5jjPWprIadlD0Fjh5vtw7wNSZGxCz9-aKGHWM/viewform?edit_requested=true" target="_blank" class="btn btn-info btn-block text-uppercase waves-effect waves-light btn-custom">Start</a>

                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->



                                    <div id="Youtube-Video" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content p-0 b-0">
                                                <div class="panel panel-color panel-primary">
                                                    <div class="panel-heading" style="background-color:#cd201f;">
                                                        <button type="button" class="close m-t-5" data-dismiss="modal" style="color: #fff;" aria-hidden="true">×</button>
														<p class="text-center" style="font-size: 60px; color: #fff;"><i class="ion-social-youtube "></i></p>
														<p class="text-center" style="font-size: 21px; color: #fff; margin-top: -20px;margin-bottom: 25px;">Youtube Video</p>
                                                    </div>
                                                    <div class="panel-body">



<h4>How it works</h4>
<p>Make a Youtube video and share it</p>
<br/>

<div style="background-color: #eee;     padding: 15px;
    border-radius: 6px;">
<h5>Steps:</h5>
<ul>
<li>Post a video about FoxCasino</li>
<li>Fill out the form at the bottom</li>
</ul>
</div>
<br/>

<div style="background-color: #eee;     padding: 15px;
    border-radius: 6px;">
<h5>Rules:</h5>
<ul>
<li>Bounty applies to a maximum of 3 videos</li>
<li>Channel MUST be at least 3 months old</li>
<li>Videos MUST BE at least 2:00 Mins</li>
<li>Videos description must contain link back to foxcsn.com</li>
<li>Videos that do not have human voice over will only receive 50% of the total bounty.</li>
</ul>
</div>
<br/>

<div style="background-color: #eee;     padding: 15px;
    border-radius: 6px;">
<h5>Topics:</h5>
<ul>
<li>foxcsn.com (How they work together)</li>
<li>Token Description (Breakdown)</li>
<li>FoxCasino ICO (How it works/Tutorial)</li>
</ul>
</div>
<br/>


<p>Rewards:</p>
<div class="p-20">
												<table class="table table-bordered m-0">

													<thead>
														<tr>
															<th>#</th>
															<th>Subs + Views</th>
															<th>Tokens</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">1</th>
															<td>>1.000.000 + >300.000</td>
															<td>1000 FXN</td>
														</tr>
														<tr>
															<th scope="row">2</th>
															<td>>500.000 + >150.000</td>
															<td>500 FXN</td>
														</tr>
														<tr>
															<th scope="row">3</th>
															<td>>100.000 + >30.000</td>
															<td>60 FXN</td>
														</tr>
														<tr>
															<th scope="row">4</th>
															<td>>50.000 + >15.000</td>
															<td>30 FXN</td>
														</tr>
														<tr>
															<th scope="row">5</th>
															<td>>1.000 + >400</td>
															<td>5 FXN</td>
														</tr>
													</tbody>
												</table>
											</div>


<br/>


<a href="https://docs.google.com/forms/d/1eHFHsSsPPQDjrxkS1N_tMsTYi5nnkcf_0FbyPV9lYfo/viewform?edit_requested=true" target="_blank" class="btn btn-info btn-block text-uppercase waves-effect waves-light btn-custom">Start</a>


                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->



                                    <div id="instagram" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content p-0 b-0">
                                                <div class="panel panel-color panel-primary">
                                                    <div class="panel-heading" style="background-color:#517fa4;">
                                                        <button type="button" class="close m-t-5" data-dismiss="modal" style="color: #fff;" aria-hidden="true">×</button>
														<p class="text-center" style="font-size: 60px; color: #fff;"><i class="fa fa-instagram"></i></p>
														<p class="text-center" style="font-size: 21px; color: #fff; margin-top: -20px;margin-bottom: 25px;">instagram</p>
                                                    </div>
                                                    <div class="panel-body">


<h4>How it works</h4>

<div style="background-color: #eee;     padding: 15px;
    border-radius: 6px;">
<h5>Steps:</h5>
<ul>
<li>Follow us on Instagram (@foxcsn)</li>
<li>Fill out the form at the bottom</li>
</ul>
</div>
<br/>

<div style="background-color: #eee;     padding: 15px;
    border-radius: 6px;">
<h5>Rules:</h5>
<ul>
<li>Your account must be at least 6 months old</li>
</ul>
</div>
<br/>

<p>Rewards:</p>
<div class="p-20">
												<table class="table table-bordered m-0">

													<thead>
														<tr>
															<th>#</th>
															<th>Instagram Follow</th>
															<th>Tokens</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">1</th>
															<td>-</td>
															<td>5 FXN</td>
														</tr>
													</tbody>
												</table>
											</div>


<br/>


<a href="https://docs.google.com/forms/d/1C6HcJ94Roo-KSwyk5WD5NQTRbyj1P_NjuyGOrhaUfWk/viewform?edit_requested=true" target="_blank" class="btn btn-info btn-block text-uppercase waves-effect waves-light btn-custom">Start</a>


                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->



                                    <div id="Bitcoin-Talk-Forum" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content p-0 b-0">
                                                <div class="panel panel-color panel-primary">
                                                    <div class="panel-heading" style="background-color:#ffd900;">
                                                        <button type="button" class="close m-t-5" data-dismiss="modal" aria-hidden="true">×</button>
														<p class="text-center" style="font-size: 60px; color: #fff;"><i class="ion-social-bitcoin"></i></p>
														<p class="text-center" style="font-size: 21px; color: #fff; margin-top: -20px;margin-bottom: 25px;">Bitcoin Talk Forum</p>
                                                    </div>
                                                    <div class="panel-body">

                                                        <h4>How it works</h4>
<p>Signature about FoxCasino and earn tokens</p>
<br/>
<div style="background-color: #eee;     padding: 15px;
    border-radius: 6px;">
<h5>Rules:</h5>
<ul>
<li>Integrate signature code to your profile</li>
<li>Add Avatar to your profile</li>
<li>Update the signature if necessary</li>
</ul>
</div>
<br/>

<p>Signature:</p>
<br/>

<style>
.panel-default .panel-heading{background-color: #eee;}
.panel-default .panel-title{color:#666;}

.code {
height: 200px; /* высота нашего блока */
width: 100%; /* ширина нашего блока */
background: #fff; /* цвет фона, белый */
border: 1px solid #C1C1C1; /* размер и цвет границы блока */
overflow-x: scroll; /* прокрутка по горизонтали */
overflow-y: scroll; /* прокрутка по вертикали */
padding: 10px;
}
</style>

                                <div class="panel-group" id="accordion-test-2">
                                    <div class="panel panel-default">

                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseOne-2" aria-expanded="false" class="collapsed">
                                                    Hero/Legendary Members
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne-2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="code">
[center][table][tr][td][url=https://www.youtube.com/watch?v=6sZJeU99rME][font=century gothic][size=12pt][glow=#2D92DB,2,300][color=#2D92DB].[color=#FFF]FOXCASINO - HOW IT WORKS?[/color].[/color][/glow][/size][/font][/url][/td][td][/td]
[td][size=21pt][color=#7DC7FC]|[/size][/td]
[td][url=https://foxcsn.com/][i][font=arial][size=8pt][b][color=#093581][color=#2D92DB]  DECENTRALIZED CASINO[/color] WE ARE A ZONE OF TRUST AND FREEDOM[/color][/size][/font][/i][/url]
[center][url=https://foxcsn.com/][font=Arial black][b][i][size=8pt][color=#fc0]▬▬▬▬   [color=#093581]DATA[/color] [color=#2D92DB]DECENTRALIZED[/color] [color=#F8A604]NEW CASINO![/color]   ▬▬▬▬[/color][/size][/i][/b][/font][/url][/center][/td]
[td][size=21pt][color=#7DC7FC]|[/size][/td]
[td][center][b][font=Arial][size=8pt][color=#B6D3EB]▬[color=#A3CEF1]▬[color=#94C9F5]▬[color=#7CBEF5]▬[color=#68B6F7]▬[color=#52ACF6]▬[color=#3B9CED]▬[color=#2D8CDB]▬   [url=https://www.instagram.com/foxcsn/][color=#2D92DB]INSTAGRAM[/color][/url]   ▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]
[font=Arial narrow][glow=#093581,2,300][color=#093581]..[url=https://foxcsn.com/doc/foxcsn_white_paper.pdf][color=#fc0]WHITEPAPER[/color][/url]   [url=https://www.facebook.com/Foxcsn-882509438582546/][color=#fc0]FACEBOOK[/color][/url]   [url=https://twitter.com/FoxCsnPlatform][color=#fc0]TWITTER[/color][/url]   [url=https://bitcointalk.org/index.php?topic=2371475.0][color=#fc0]FOXCASINO Bitcointalk[/color][/url]..[/color][/glow][/font]
[color=#2D92DB][color=#B6D3EB]▬[color=#A3CEF1]▬[color=#94C9F5]▬[color=#7CBEF5]▬[color=#68B6F7]▬[color=#52ACF6]▬[color=#3B9CED]▬[color=#2D8CDB]▬   [url=https://bitcointalk.org/index.php?topic=2371475.0][color=#2D92DB]BOUNTY[/color][/url]   ▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color][/color][/size][/font][/b][/center][/td]
[td][size=21pt][color=#7DC7FC]|[/size][/td]
[td][center][url=https://foxcsn.com/tokensale][b][font=arial black][size=12pt][glow=#F8A604,2,300][color=#F8A604]IIIIIIII [font=Arial][color=#093581]Pre-ICO [color=#FFF]20[size=7pt][sup]th[/sup][/size] November[/color][/color][/font] IIIIIII[/color][/glow]
[size=9pt][color=#2D92DB]Register Now for[/color][/size] [color=#F8A604] Bonus![/color][/size][/font][/b][/url][/center][/td]
[td][size=21pt][color=#7DC7FC]|[/size][/td][/tr][/table][/center]
</div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseTwo-2" aria-expanded="false" class="collapsed">
                                                    Senior Members
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo-2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="code">[center][table][tr][td][url=https://www.youtube.com/watch?v=6sZJeU99rME][font=century gothic][size=12pt][color=#2D92DB]FOXCASINO - HOW IT WORKS?[/color][/size][/font][/url][/td][td][/td]
[td][size=21pt][color=#7DC7FC]|[/size][/td]
[td][url=https://foxcsn.com/][i][font=arial][size=8pt][b][color=#093581][color=#2D92DB]  DECENTRALIZED CASINO[/color] WE ARE A ZONE OF TRUST AND FREEDOM [color=#2D92DB]DECENTRALIZED CASINO[/color][/color][/size][/font][/i][/url]
[center][url=https://foxcsn.com/][font=Arial black][b][i][size=8pt][color=#fc0]▬▬▬▬   [color=#093581]Blockchain[/color] [color=#2D92DB]DECENTRALIZED[/color] [color=#F8A604]NEW CASINO![/color]   ▬▬▬▬[/color][/size][/i][/b][/font][/url][/center][/td]
[td][size=21pt][color=#7DC7FC]|[/size][/td]
[td][center][b][font=Arial][size=8pt][color=#B6D3EB]▬[color=#A3CEF1]▬[color=#94C9F5]▬[color=#7CBEF5]▬[color=#68B6F7]▬[color=#52ACF6]▬[color=#3B9CED]▬[color=#2D8CDB]▬   [url=https://www.instagram.com/foxcsn/][color=#2D92DB]INSTAGRAM[/color][/url]   ▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]
[font=Arial narrow][url=https://foxcsn.com/doc/foxcsn_white_paper.pdf][color=#093581]WHITEPAPER[/color][/url]   [url=https://www.facebook.com/Foxcsn-882509438582546/][color=#093581]FACEBOOK[/color][/url]   [url=https://twitter.com/FoxCsnPlatform][color=#093581]TWITTER[/color][/url]   [url=https://bitcointalk.org/index.php?topic=2371475.0][color=#093581]FOXCASINO Bitcointalk[/color][/url][/font]
[color=#2D92DB][color=#B6D3EB]▬[color=#A3CEF1]▬[color=#94C9F5]▬[color=#7CBEF5]▬[color=#68B6F7]▬[color=#52ACF6]▬[color=#3B9CED]▬[color=#2D8CDB]▬   [url=https://bitcointalk.org/index.php?topic=2371475.0][color=#2D92DB]BOUNTY[/color][/url]   ▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color][/color][/size][/font][/b][/center][/td]
[td][size=21pt][color=#7DC7FC]|[/size][/td]
[td][center][url=https://foxcsn.com/tokensale][b][font=arial black][size=12pt][color=#F7D759][font=Arial][color=#093581]Pre-ICO [color=#2D92DB]20[size=7pt][sup]th[/sup][/size] November[/color][/color][/font] [/color]
[size=9pt][color=#2D92DB]Register Now for[/color][/size] [color=#F8A604] Bonus![/color][/size][/font][/b][/url][/center][/td]
[td][size=21pt][color=#7DC7FC]|[/size][/td][/tr][/table][/center]</div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseThree-2" class="collapsed" aria-expanded="false">
                                                    Full Members
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree-2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="code">

[center][table][tr][td][url=https://www.youtube.com/watch?v=6sZJeU99rME][font=century gothic][size=12pt][color=#2D92DB]FOXCASINO - HOW IT WORKS?[/color][/size][/font][/url][/td][td][/td]
[td][size=21pt][color=#7DC7FC]|[/size][/td]
[td][url=https://foxcsn.com/][i][font=arial][size=8pt][b][color=#093581][color=#2D92DB]  DECENTRALIZED CASINO[/color] WE ARE A ZONE OF TRUST AND FREEDOM [color=#2D92DB]DECENTRALIZED CASINO[/color][/color][/size][/font][/i][/url]
[center][url=https://foxcsn.com/][font=Arial black][b][i][size=8pt][color=#fc0]▬▬▬▬   [color=#093581]Blockchain[/color] [color=#2D92DB]DECENTRALIZED[/color] [color=#F8A604]NEW CASINO![/color]   ▬▬▬▬[/color][/size][/i][/b][/font][/url][/center][/td]
[td][size=21pt][color=#7DC7FC]|[/size][/td]
[td][center][b][font=Arial][size=8pt][color=#B6D3EB]▬[color=#A3CEF1]▬[color=#94C9F5]▬[color=#7CBEF5]▬[color=#68B6F7]▬[color=#52ACF6]▬[color=#3B9CED]▬[color=#2D8CDB]▬   [url=https://www.instagram.com/foxcsn/][color=#2D92DB]INSTAGRAM[/color][/url]   ▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]
[font=Arial narrow][url=https://foxcsn.com/doc/foxcsn_white_paper.pdf][color=#093581]WHITEPAPER[/color][/url]   [url=https://www.facebook.com/Foxcsn-882509438582546/][color=#093581]FACEBOOK[/color][/url]   [url=https://twitter.com/FoxCsnPlatform][color=#093581]TWITTER[/color][/url]   [url=https://bitcointalk.org/index.php?topic=2049312.0][color=#093581]FOXCASINO Bitcointalk[/color][/url][/font]
[color=#2D92DB][color=#B6D3EB]▬[color=#A3CEF1]▬[color=#94C9F5]▬[color=#7CBEF5]▬[color=#68B6F7]▬[color=#52ACF6]▬[color=#3B9CED]▬[color=#2D8CDB]▬   [url=https://bitcointalk.org/index.php?topic=2140513.0][color=#2D92DB]BOUNTY[/color][/url]   ▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color]▬[/color][/color][/size][/font][/b][/center][/td]
[td][size=21pt][color=#7DC7FC]|[/size][/td]
[td][center][url=https://foxcsn.com/tokensale][b][font=arial black][size=12pt][color=#F7D759][font=Arial][color=#093581]Pre-ICO [color=#2D92DB]20[size=7pt][sup]th[/sup][/size] November[/color][/color][/font] [/color]
[size=9pt][color=#2D92DB]Register Now for[/color][/size] [color=#F8A604] Bonus![/color][/size][/font][/b][/url][/center][/td]
[td][size=21pt][color=#7DC7FC]|[/size][/td][/tr][/table][/center]

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseThree-4" class="collapsed" aria-expanded="false">
                                                    Members
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree-4" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="code">
[center]
[url=https://www.youtube.com/watch?v=6sZJeU99rME]FOXCASINO - HOW IT WORKS?[/url]
[url=https://foxcsn.com/][b]  DECENTRALIZED CASINO[/b][/url][url=https://foxcsn.com/tokensale] [b]Pre-ICO 20th November[/b][/url][url=https://foxcsn.com/doc/foxcsn_white_paper.pdf][b]  WHITEPAPER[/b] [/url]
[url=https://twitter.com/FoxCsnPlatform]  Twitter[/url][url=https://www.facebook.com/Foxcsn-882509438582546/]  Facebook[/url][url=https://www.instagram.com/foxcsn/] Instagram[/url]
[/center]
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapseThree-5" class="collapsed" aria-expanded="false">
                                                    Junior Members
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree-5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <div class="code">
[center]
[url=https://www.youtube.com/watch?v=6sZJeU99rME][color=#2D92DB]FOXCASINO - HOW IT WORKS?[/color][/url]
[url=https://foxcsn.com/][b][color=#2D92DB]  DECENTRALIZED CASINO[/color][/b][/url][url=https://foxcsn.com/tokensale] [b][color=#2D92DB]Pre-ICO 20th November[/color][/b][/url][url=https://foxcsn.com/doc/foxcsn_white_paper.pdf][b][color=#2D92DB]  WHITEPAPER[/color][/b] [/url]
[url=https://twitter.com/FoxCsnPlatform][color=#2D92DB]  Twitter[/color][/url][url=https://www.facebook.com/Foxcsn-882509438582546/][color=#2D92DB]  Facebook[/color][/url][url=https://www.instagram.com/foxcsn/][color=#2D92DB]  Instagram[/color][/url]
[/center]
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>









<br/>

<p>Rewards:</p>
<div class="p-20">
												<table class="table table-bordered m-0">

													<thead>
														<tr>
															<th>#</th>
															<th>Rank</th>
															<th>Tokens</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<th scope="row">1</th>
															<td>Hero/Legendary Members</td>
															<td>30 FXN</td>
														</tr>
														<tr>
															<th scope="row">2</th>
															<td>Senior Members</td>
															<td>25 FXN</td>
														</tr>
														<tr>
															<th scope="row">3</th>
															<td>Full Members</td>
															<td>15 FXN</td>
														</tr>
														<tr>
															<th scope="row">4</th>
															<td>Members</td>
															<td>10 FXN</td>
														</tr>
														<tr>
															<th scope="row">5</th>
															<td>Junior Members</td>
															<td>5 FXN</td>
														</tr>
													</tbody>
												</table>
											</div>


<br/>


<a href="https://docs.google.com/forms/d/1I8_UT9xyUrenn34EsELZ3dabhw0Mohg3paXTAHjxBJE/viewform?edit_requested=true" target="_blank" class="btn btn-info btn-block text-uppercase waves-effect waves-light btn-custom">Start</a>

                                                    </div>
                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
