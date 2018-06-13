@extends('lending.Child')

@section('content')

		<!-- Header -->
			<header id="header">
				<h1><a href="/">FOXCASINO</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="container">
                 <div class="MOBILERoadmap"><br/></div>

					<header class="major special" style="margin-bottom: 0px;">
						<h2>Bounty</h2>
						<p style="margin-bottom: 10px;">PARTICIPATE IN OUR OFFICIAL BOUNTY PROGRAM AND GET FXN TOKENS</p>
					</header>

					<img src="images/pic12.jpg" style="margin-left: 32px;" class="PCRoadmap" alt="" />
                    <img src="images/pic12mob.jpg" style="margin-left: 9px;" class="MOBILERoadmap" alt="" />

<p align="center" style="font-size: 1.25em; margin-top: -1em; line-height: 1.85em; color: #25383B; margin: 0 0 1.5em 0; position: relative; text-transform: uppercase;">Crowdsale ends in:</p>


<div class="timerContainer" id="timerContainer">
</div>



<script>
var width  =  $(window).width();

window.time = {{ $start }};

if(width <= 495)
{
  $.getScript( "{{ asset('timer2.js') }}", function( data, textStatus, jqxhr ) {
     $("#timerContainer").height('74');
     $("#timerContainer").width('290');
     return 0;
   });
}
else
{
  $.getScript( "{{ asset('timer.js') }}", function( data, textStatus, jqxhr ) {
     $("#timerContainer").height('128');
     $("#timerContainer").width('452');
     return 0;
   });
}
</script>



<br/>



<div style="text-align:  center;">
					<p style="text-align: center; margin: 0 auto; max-width: 700px;">FXN bounty is the campaign for everyone who supports FoxCasino.<br/> With participation in the bounty campaign, you can be FXN holder and be a part of the FoxCasino project.
Detailed details and conditions for participating in the FXN bounty, you will receive in your account after registration.
<br/>WE INVITE YOU TO THE FUTURE TOGETHER WITH US</p>
</div><br/>
<p align="center">
<a href="{{ asset('login') }}" class="button big alt">Join</a>
</p>

				</div>
			</section>


@endsection
