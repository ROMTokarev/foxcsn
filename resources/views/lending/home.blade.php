@extends('lending.Child')

@section('content')


<style>
  .fixed {
    position: fixed;
    top: 0;
    left: 0;
  }
</style>


     <script type="text/javascript">
       $(document).ready(function(){
          /* Get iframe src attribute value i.e. YouTube video url
          and store it in a variable */
          var url = $("#cartoonVideo").attr('src');

          /* Assign empty url value to the iframe src attribute when
          modal hide, which stop the video playing */
          $("#VideoModal").on('hide.bs.modal', function(){
             $("#cartoonVideo").attr('src', '');
          });

          /* Assign the initially stored url back to the iframe src
          attribute when modal is displayed again */
          $("#VideoModal").on('show.bs.modal', function(){
             $("#cartoonVideo").attr('src', url);
          });

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

				<span class="image"><img src="images/logo.png" alt="" /></span>
				<h2>Decentralized Casino Platform</h2>
				<p>WE ARE A ZONE OF TRUST AND FREEDOM</p>
				<ul class="actions">
					<li><a href="#VideoModal" data-toggle="modal" class="button big special">play video</a></li>
				</ul>


  </td>

</tr>
</table>
</div>



			</section>

		<!-- One -->
			<section id="one" class="wrapper style1">
				<div class="inner">
					<article class="feature left">
						<span class="image"><img src="images/pic01.jpg" alt="" /></span>
						<div class="content">
							<h2>SECURITY FOXCASINO SYSTEM</h2>
							<p>This is transparency, consistency and cryptographic verification of software used to automate processes related to trust and economic incentives for its participants. We will provide a sustainable model that will benefit all parties involved in the business processes of online gambling, as well as players.</p>
							<ul class="actions">
								<li>
									<a href="https://www.ethereum.org/" target="_blank" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
					<article class="feature right">
						<span class="image"><img src="images/pic02.jpg" alt="" /></span>
						<div class="content">
							<h2>TOKEN FOXCASINO SYSTEM</h2>
							<p>An internal FoxCasino token called FXN is an ERC20 token running on the Ethereum platform. It is used as a game currency for all gaming contracts integrated with the protocol and to provide the FoxCasino reward system. The internal currency and the system of remuneration are free.</p>
							<ul class="actions">
								<li>
									<a href="https://theethereum.wiki/w/index.php/ERC20_Token_Standard" target="_blank" class="button alt">More</a>
								</li>
							</ul>
						</div>
					</article>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper special">
				<div class="inner">
					<header class="major narrow" style="margin-bottom: 00px;">
						<h2>RoadMap</h2>
						<p style="margin-bottom: 10px;">We invite you to the future together with us!</p>
					</header>

						<img src="images/pic03.jpg" class="PCRoadmap" alt="" />
						<img src="images/foxmob.jpg" class="MOBILERoadmap" alt="" />

<br/>
<header class="major narrow" style="margin-bottom: 00px;">
  <h2>TEAM</h2>
</header>
<br/>
<div class="row">
<div class="col-md-6">
  <div class="row">
    <div class="col-md-4  col-sm-12 col-xs-12">
     <img src="images/faces/romadev.png" width="140" alt="" />
    </div>

    <div class="col-md-8  col-sm-12 col-xs-12">
      <div class="col-md-12">
<span style="text-transform: uppercase; color:#000; font-weight: 500;font-size: 1.25em; line-height: 1.85em;">Roman Tokarev</span>
      </div>
      <div class="col-md-12" style="text-align:justify;">
Full Stack and Game Developer. He graduated from the Taganrog College of Marine Instrumentation, I am currently a student of the Southern Federal University, actively engaged in scientific activities. Certified specialist in the field of network technologies (cisco ccna routing and switching, cisco ccna discovery) and business (certificate of the bank center invest). More than 5 years I have been engaged in web development. Freely I know PHP, JS, CSS, HTML, C, C ++, CLR, Sign with perl, python, solidity. Quote: “We will make a secure system and a zone of trust for both sides of the online gambling market!”
      </div>
    </div>

  </div>
</div>
<div class="col-md-6">
  <div class="row">
    <div class="col-md-4  col-sm-12 col-xs-12">
     <img src="images/faces/sts.png" width="140" alt="" />
    </div>

    <div class="col-md-8  col-sm-12 col-xs-12">
      <div class="col-md-12">
<span style="text-transform: uppercase; color:#000; font-weight: 500;font-size: 1.25em; line-height: 1.85em;">Stanislav Aleynikov</span>
      </div>
      <div class="col-md-12" style="text-align:justify;">
Branding and Games Design. With dignity he graduated from the University of Contemporary Art. He has extensive experience working with major brands and branded agencies in the field of graphic design and branding. Worked with: Vodafone, Joyable, Zomato, Netflix. Quote: “We wants to make this casino truly unique, combining stylish design and modern musical accompaniment!”
      </div>
    </div>

  </div>
</div>
</div>
<br/><br/>


<div class="row">
<div class="col-md-6">
  <div class="row">
    <div class="col-md-4  col-sm-12 col-xs-12">
     <img src="images/faces/rm.png" width="140" alt="" />
    </div>

    <div class="col-md-8  col-sm-12 col-xs-12">
      <div class="col-md-12">
<span style="text-transform: uppercase; color:#000; font-weight: 500;font-size: 1.25em; line-height: 1.85em;">Roman Svetlichny</span>
      </div>
      <div class="col-md-12" style="text-align:justify;">
Sound Designer and Musician. Graduated from the Rostov State College of Arts with honors. Actively develops his skills in music and writes his own compositions. Quote: “Music will be one of the key moments in the game process, we make a modern online casino!”
      </div>
    </div>

  </div>
</div>
<div class="col-md-6">
  <div class="row">
    <div class="col-md-4  col-sm-12 col-xs-12">
     <img src="images/faces/kiri.png" width="140" alt="" />
    </div>

    <div class="col-md-8  col-sm-12 col-xs-12">
      <div class="col-md-12">
<span style="text-transform: uppercase; color:#000; font-weight: 500;font-size: 1.25em; line-height: 1.85em;">Kirill Romanenko</span>
      </div>
      <div class="col-md-12" style="text-align:justify;">
Protocol Architect and Blockchain Developer, Game Developer. Graduated with honors from Taganrog College of Marine Instrument. Making. Student of the Southern Federal University. Certified Expert in Network Technologies (cisco ccna discovery). I develop on JS, CSS, HTML, C, C ++, Java, Solidity. Quote: “Our future is the future of Blockchain!”
      </div>
    </div>

  </div>
</div>
</div>

<br/><br/>
          <style>
          .coingecko{margin: 0px;}
          .Mobile{display: block;}
          @media(min-width:768px)  { .coingecko{margin: -110px;}
                                     .etherscan{float: left;margin-left: 50px;}
                                     .track{float: right;}
                                     .Mobile{display: none;}
                                   }
          </style>

          <div class="row">
  <div class="col-md-4 col-sm-4 col-xs-12"><a href="https://www.icoalert.com/" target="_blank"><img src="logos/ICOALERT.png" width="200" alt="" /></a></div>
  <div class="col-md-4 col-sm-4 col-xs-12"><a href="https://www.coingecko.com/ico?locale=en" target="_blank"><img src="logos/CoinGecko-Full-Logo1.png" width="210" class="coingecko" alt="" /></a></div>
  <div class="col-md-4 col-sm-4 col-xs-12"><a href="https://www.ethereum.org/" target="_blank"><img src="logos/ETHEREUM-YOUTUBE-PROFILE-PIC.png" width="180" alt="" /></a></div>
</div>

<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12"><a href="https://www.trackico.io/ico/foxcasino/" target="_blank"><img src="logos/partner_logo_black.png" width="200" alt="" /></a></div>
<div class="col-md-4 col-sm-4 col-xs-12"><div class="Mobile"><br/><br/></div><a href="https://etherscan.io/" target="_blank"><img src="logos/EtherScan-Logo-Big.png" class="etherscan" width="210" alt="" /></a></div>
<div class="col-md-4 col-sm-4 col-xs-12"><div class="Mobile"><br/><br/></div><a href="https://icodaily.net" target="_blank"><img src="logos/ICO-Daily-Header-Logo-2.png" class="etherscan" width="210" alt="" /></a></div>
</div>
<br/><br/>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12"><a href="https://wiserico.com/"><img src="https://wiserico.com/logo.png" width="210" alt="Cryptocurrency ico list"></a></div>
</div>

<br/>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style3 special" style=" padding-top: 0px; padding-left: 0px; padding-bottom: 0px; padding-right: 0px;">
             <div style="background: url('/images/overlay.png');
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                    padding-left: 48px;
                    padding-top: 80px;
                    padding-bottom: 48px;
                    padding-right: 48px;
                    ">
				<div class="inner">
					<header class="major narrow	">
						<h2>WhitePaper & Terms ICO</h2>
						<p>HERE YOU CAN FIND THE DETAILED INFORMATION ABOUT OUR PROJECT AND THE<br/> RULES/TERMS OF ICO.</p>
					</header>
					<ul class="actions">
						<li><a href="/doc/foxcsn_ico_terms.pdf" onclick="window.open('/doc/foxcsn_white_paper.pdf','white paper');" class="button big alt">Download</a></li>
					</ul>
				</div>
              </div>
			</section>

		<!-- Four -->

            <script>
              function FormSend(frm)
              {
                if(frm.name.value == "" || frm.email.value == "" || frm.message.value == "")
                {
                 alert("please complete all required fields");
                 return false;
                }
              }
            </script>

			<section id="four" class="wrapper style2 special">
				<div class="inner">
					<header class="major narrow">
						<h2>Get in touch</h2>
						<p>We are always happy to answer your questions!</p>
					</header>
					<form action="/email" method="POST" onsubmit="return FormSend(this);">
                      {{ csrf_field() }}
						<div class="container 75%">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input name="name" placeholder="Name" type="text" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input name="email" placeholder="Email" type="email" />
								</div>
								<div class="12u$">
									<textarea name="message" style="resize: none;" placeholder="Message" rows="4"></textarea>
								</div>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" class="special" value="Submit" /></li>
							<li><input type="reset" class="alt" value="Reset" /></li>
						</ul>
					</form>
				</div>
			</section>



<!-- Modal -->
<div class="modal fade" id="VideoModal" tabindex="-1" role="dialog" aria-labelledby="VideoModalLabel">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h3 id="VideoModalLabel">FoxCasino - How it works?</h3>
    </div>
    <div class="modal-body">
            <iframe id="cartoonVideo" width="100%" height="360" src="https://www.youtube.com/embed/6sZJeU99rME?showinfo=0&iv_load_policy=3&rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="modal-footer">
      <button class="button alt" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
  </div>
</div>
</div>


<script type ="text/javascript">
  var avatarElem = document.getElementById('header');

var ScrollStat = 0;


window.onscroll = function() {
if(ScrollStat == 0)
{
 window.avatarSourceBottom = avatarElem.getBoundingClientRect().bottom + window.pageYOffset;
 ScrollStat++;
}


if (avatarElem.classList.contains('none') && window.pageYOffset < window.avatarSourceBottom) {
avatarElem.classList.add('alt');
avatarElem.classList.remove('none');
} else if (window.pageYOffset > window.avatarSourceBottom) {
avatarElem.classList.remove('alt');
avatarElem.classList.add('none');
}
};

</script>


@endsection
