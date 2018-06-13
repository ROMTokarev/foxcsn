@extends('lending.Child')

@section('content')

      <style>
	    #banner {
		  background: url("../../images/banner-2.jpg")!Important;
	   }

      </style>


     <script type="text/javascript">
       $(document).ready(function(){
          function windowSize(){
            var height =  $(window).height();

            $("#banner").height(height);
            $("#bannerTab").height(height);
         }
         
         $(window).load(windowSize);
       });
     </script>



		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="/">FOXCASINO</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Banner -->
			<section id="banner" style="padding-bottom: 0px;padding-left: 0px;padding-right: 0px;padding-top: 0px;">
              
<div style="position: absolute; top:0px; width: 100%; background: url('/images/overlay.png');
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;">
<table id="bannerTab" style="width:100%;">
<tr>

  <td style="vertical-align: middle">

		<span class="image"><img src="images/massage-bad.png" alt="" /></span>
				<p>An error occurred while sending the message.<br/> Possible cause: A similar message was sent earlier.<p>


  </td>

</tr>
</table>
</div>
 

              
			</section>


@endsection
