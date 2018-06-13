<script>

window.preloader2 = 0;

window.cache = [];
window.cache_time = [];

function DropBox(id) { 

  var d = document.getElementById("ListLoader");
  var d_nested = document.getElementById("Loader"+id);
  var throwawayNode = d.removeChild(d_nested);

}

function time(){
return parseInt(new Date().getTime()/1000)
}

function scrollToElement(theElement) {
if (typeof theElement === "string") theElement = document.getElementById(theElement);

    var selectedPosX = 0;
    var selectedPosY = 0;

    while (theElement != null) {
        selectedPosX += theElement.offsetLeft;
        selectedPosY += theElement.offsetTop;
        theElement = theElement.offsetParent;
    }

    window.scrollTo(selectedPosX, selectedPosY);
}

function AJBody(URL) {

   var preloader = document.getElementById('preloader2');

   var exTime = time() - cache_time[URL];

   if(cache[URL] != null && exTime < 90)
   {
      document.getElementById('AJBody').innerHTML = Base64.decode(window.cache[URL]);
      ScriptLoader('AJBody'); 

      if($(window).width() <= 767)
      {
        var d = document.getElementById("wrapper");
            d.className += " enlarged";

        var tableElem = document.getElementById('sidebar-menu');
        var elements = tableElem.getElementsByTagName('a');
        for (var i = 0; i < elements.length; i++) {
             var a = elements[i];
                 a.className = "waves-effect";
        }

        document.getElementById(URL).className += " subdrop";

      }

      if(URL == "home") QRun();
      preloader.style.display="none";
      scrollToElement('top');
   }

   if(cache[URL] == null || exTime >= 90)
   {

     $.ajax(
     {
       type: 'get',
       url: '{{ asset('a') }}/'+URL,
       beforeSend: function()
       {
      /*   if(window.preloader2 == 1)
         {
           preloader.style.display="block";
         } */
       },
       success: function(data)
       {
         if(window.preloader2 == 1)
         {
           DropBox('AJBody');
         }

         if(window.preloader2 == 0)
         {
           window.preloader2 = 1;
         }

         var correct = 0;

         if(URL == "faq")
         {
           correct = 6000;
         }

         window.cache[URL] = data;
         window.cache_time[URL] = time() + correct;

         document.getElementById('AJBody').innerHTML = Base64.decode(data);
      
         ScriptLoader('AJBody');
 

         if($(window).width() <= 767)
         {
           var d = document.getElementById("wrapper");
               d.className += " enlarged";

           var tableElem = document.getElementById('sidebar-menu');
           var elements = tableElem.getElementsByTagName('a');
           for (var i = 0; i < elements.length; i++) {
                var a = elements[i];
                    a.className = "waves-effect";
           }

           document.getElementById(URL).className += " subdrop";

         }


         if(URL == "home") QRun();
         preloader.style.display="none";
         scrollToElement('top');

       },
       error: function()
       {
         preloader.style.display="none";
         $.Notification.notify('error','bottom right', 'Oops...', 'Something went wrong! Please reload the page and try again.');
       }
    });
   }
}

AJBody('home'); 


</script>  









   <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu" style="position: fixed;">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul style="display: fixed;">





	<li class="text-muted menu-title">Navigation</li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" id="home" onclick="AJBody('home');" id="home" style="text-transform: uppercase" class="waves-effect">
                                  <i class="ti-briefcase"></i> <span> Token Sale </span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" id="bounty" onclick="AJBody('bounty')" style="text-transform: uppercase" class="waves-effect">
                                  <i class="ti-announcement"></i> <span> Bounty </span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" id="account" onclick="AJBody('account')" style="text-transform: uppercase" class="waves-effect">
                                  <i class="ti-settings"></i> <span> Account </span>
                                </a>
                            </li>


                            <li class="has_sub">
                                <a href="javascript:void(0);" id="faq" onclick="AJBody('faq')" style="text-transform: uppercase" class="waves-effect">
                                  <i class="ti-bookmark-alt"></i> <span> FAQ </span>
                                </a>
                            </li>



                            <li class="has_sub">
                                <a href="{{ asset('logout') }}" style="text-transform: uppercase" class="waves-effect">
                                  <i class="ti-lock"></i> <span> Log Out </span>
                                </a>
                            </li>






                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->

