<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
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

        <title>{{ $title or '' }}</title>

        <script> window.balanceFXN = "{{ $TokenBalance }}"; </script>


    </head>


    <body class="fixed-left" id="top">

 <div class="preloader" id="preloader">
  <div class="pre-block">
   <div class="cssload-loader">Loading...</div>
  </div>
 </div>



<div id="ListLoader">

</div>

<script src="{{ asset('qrcode.min.js') }}"></script>

<style>
ScriptLoader {display: none;}
</style>

 <script>
  document.body.style.overflow = 'hidden';

function ScriptLoader(id) {

               var scripts = document.getElementById(id).getElementsByTagName("ScriptLoader");
               var script;
               for (var i = 0; script = scripts[i]; i++)
               {
                var LoadID = "Loader" + id;
                if(document.getElementById(LoadID) == null)
                {
                  var newLoaderID = document.createElement('div');
                  newLoaderID.id  = LoadID;
                  ListLoader.appendChild(newLoaderID);
                }
                // eval(script.innerHTML);
                var scriptL = document.createElement("script");
                // Add script content
                scriptL.innerHTML = script.innerHTML;
                // Append
                document.getElementById(LoadID).appendChild(scriptL);
               }

}
 </script>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="{{ asset('panel/assets/plugins/morris/morris.css') }}">

        <link href="{{ asset('panel/assets/plugins/jquery-circliful/css/jquery.circliful.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('panel/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('panel/assets/css/core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('panel/assets/css/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('panel/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('panel/assets/css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('panel/assets/css/responsive.css') }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="{{ asset('panel/assets/js/modernizr.min.js') }}"></script>

        <script src="{{ asset('panel/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('panel/assets/js/bootstrap.min.js') }}"></script>

   <script src="{{ asset('base64.js') }}"></script>

<link href="{{ asset('assets/css/preloader2.css') }}" rel="stylesheet" type="text/css" />

 <div class="preloader2" id="preloader2">
  <div class="pre-block2">
   <div class="cssload-loader2">Loading...</div>
  </div>
 </div>

          <!-- Begin page -->
        <div id="wrapper">

     @include('panel.layouts.sidebar')
     @include('panel.layouts.navbar')

    <div class="AJBody" id="AJBody">

    </div>

     @include('panel.layouts.footer')
            </div>


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->

        <script src="{{ asset('panel/assets/js/detect.js') }}"></script>
        <script src="{{ asset('panel/assets/js/fastclick.js') }}"></script>

        <script src="{{ asset('panel/assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('panel/assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('panel/assets/js/waves.js') }}"></script>
        <script src="{{ asset('panel/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('panel/assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('panel/assets/js/jquery.scrollTo.min.js') }}"></script>

        <script src="{{ asset('panel/assets/plugins/peity/jquery.peity.min.js') }}"></script>

        <!-- jQuery  -->
        <script src="{{ asset('panel/assets/plugins/waypoints/lib/jquery.waypoints.js') }}"></script>
        <script src="{{ asset('panel/assets/plugins/counterup/jquery.counterup.min.js') }}"></script>

        <script src="{{ asset('panel/assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('panel/assets/js/jquery.app.js') }}"></script>


        <script src="{{ asset('panel/assets/plugins/notifyjs/js/notify.js') }}"></script>
        <script src="{{ asset('panel/assets/plugins/notifications/notify-metro.js') }}"></script>



  <script type="text/javascript">
   window.onload = function() {

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




    </body>
</html>
