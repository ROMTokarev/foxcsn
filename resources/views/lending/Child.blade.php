<!DOCTYPE html>
<html lang="en">

  <head>
	<title>{{ $title or '' }}</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no" />

    <link href="{{ asset('assets/css/preloader.css') }}" rel="stylesheet" type="text/css" />

    <style>
       .preloader {
                   display: block;
                   background-color:#fff;
       }
    </style>

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ asset('/images/favicons/57favicon.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('/images/favicons/114favicon.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('/images/favicons/72favicon.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('/images/favicons/144favicon.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ asset('/images/favicons/120favicon.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ asset('/images/favicons/152favicon.png') }}" />
    <link rel="icon" type="image/png" href="{{ asset('/images/favicons/32favicon.png') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('/images/favicons/16favicon.png') }}" sizes="16x16" />

  </head>

<body class="landing">

 <div class="preloader" id="preloader">
  <div class="pre-block">
   <div class="cssload-loader">Loading...</div>
  </div>
 </div>


 <script>
  document.body.style.overflow = 'hidden';
 </script>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

  @include('lending.layouts.header')

	@yield('content')

  @include('lending.layouts.footer')

    <link rel="stylesheet" href="{{ asset('panel/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap-responsive.min.css') }}" />

    <link href="{{ asset('panel/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />

	<!--[if lte IE 8]><script src="{{ asset('assets/js/ie/html5shiv.js') }}"></script><![endif]-->
	<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/css/patch.css') }}" />
	<!--[if lte IE 8]><link rel="stylesheet" href="{{ asset('assets/css/ie8.css') }}" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="{{ asset('assets/css/ie9.css') }}" /><![endif]-->


  <!-- Scripts -->
  <script src="{{ asset('assets/js/skel.min.js') }}"></script>
  <script src="{{ asset('assets/js/util.js') }}"></script>
  <!--[if lte IE 8]><script src="{{ asset('assets/js/ie/respond.min.js') }}"></script><![endif]-->
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>


  <script type="text/javascript">
   window.onload = function() {

  //    var $preloader = $('.preloader');
  //    $preloader.delay(1000).fadeOut('slow');

   setTimeout(function() {

      document.getElementById('preloader').style.display="none";
      document.body.style.overflow = 'visible';

    }, 1000);


  };
        </script>


<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter46530441 = new Ya.Metrika({
                    id:46530441,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/46530441" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->



</body></html>
