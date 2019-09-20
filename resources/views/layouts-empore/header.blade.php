<?php 
 // include 'helper.php';
?>
<!DOCTYPE html>
<html lang="en-US">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta name="language" content="English" />
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1" />
      <meta name="google-site-verification" content="" />
      <link rel="profile" href="" />
      <link rel="shortcut icon" href="" type="image/x-icon" />
      <link rel="icon" href="" sizes="16x16" />
      <link rel="icon" href="" sizes="32x32" />
      <link rel="icon" href="" sizes="48x48" />
      <link rel="icon" href="" sizes="96x96" />
      <link rel="icon" href="{{ asset('images-empore/empore_fave2.png') }}" sizes="144x144" />
      <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />


      <!-- style em-hr -->

      <link href="{{ asset('admin-css/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
      <!-- Menu CSS -->
      <link href="{{ asset('admin-css/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') }}" rel="stylesheet">
      <!-- toast CSS -->
      <link href="{{ asset('admin-css/plugins/bower_components/toast-master/css/jquery.toast.css') }}" rel="stylesheet">
      <!-- morris CSS -->
      <link href="{{ asset('admin-css/plugins/bower_components/morrisjs/morris.css') }}" rel="stylesheet">
      <!-- chartist CSS -->
      <link href="{{ asset('admin-css/plugins/bower_components/chartist-js/dist/chartist.min.css') }}" rel="stylesheet">
      <link href="{{ asset('admin-css/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css') }}" rel="stylesheet">
      <!-- Calendar CSS -->
      <link href="{{ asset('admin-css/plugins/bower_components/calendar/dist/fullcalendar.css') }}" rel="stylesheet" />
      <!-- animation CSS -->
      <link href="{{ asset('admin-css/css/animate.css') }}" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="{{ asset('admin-css/css/style.css') }}?time=<?=date('His')?>" rel="stylesheet">
      <!-- color CSS -->
      <link href="{{ asset('admin-css/css/colors/green.css?v=2') }}" id="theme" rel="stylesheet">

      <!-- end style em-hr -->



      <script>
         var viewportWidth=function(){
           var a=window,b="inner";"innerWidth"in window||(b="client",a=document.documentElement||document.body);
           return a[b+"Width"]
         },
         loadBgHeader=function(a,b,e){
           var c=document.getElementById("scrolling"),d=new Image;
           d.onload=function(){
             c.className=c.className+" "+e;
             var a=document.getElementById("header-mini-bg");
             setTimeout(function(){a.className="header-bg-before-load hidden"},250)};1024>=viewportWidth()&&(a=b);d.src=a};
      </script> 
      <script>
         function loadFont(a,b,c,d){
           function e(){
             if(!window.FontFace)
               return!1;
             var a=new FontFace("t",'url("data:application/font-woff2,") format("woff2")',{}),b=a.load();
             try{
               b.then(null,function(){})
             }catch(c){
         
             }
             return"loading"===a.status}var f=navigator.userAgent,g=!window.addEventListener||f.match(/(Android (2|3|4.0|4.1|4.2|4.3))|(Opera (Mini|Mobi))/)&&!f.match(/Chrome/);if(!g){var h={};try{h=localStorage||{}}catch(i){}var j="x-font-"+a,k=j+"url",l=j+"css",m=h[k],n=h[l],o=document.createElement("style");if(o.rel="stylesheet",document.head.appendChild(o),!n||m!==b&&m!==c){var p=c&&e()?c:b,q=new XMLHttpRequest;q.open("GET.html",p),q.onload=function(){q.status>=200&&q.status<400&&(h[k]=p,h[l]=q.responseText,d||(o.textContent=q.responseText))},q.send()}else o.textContent=n}}
           
      </script> 
      <script>
         loadFont('font-roboto-all', "{{ asset('themes-empore/twentyfifteen/fonts/fonts-woff-upd.css') }}", "{{ asset('themes-empore/twentyfifteen/fonts/fonts-woff2-upd.css') }}")
      </script> 

      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-134847825-1"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-134847825-1');
      </script>


      <title>PT Empore Hezer Tama</title>
      <meta name="description" content="Empore committed to empower your business and become parts of your success journey"/>
      <link rel='stylesheet' id='home-redesign-style-css'  href="{{ asset('themes-empore/twentyfifteen/css/pages/home/home.min8e5e.css?v=<?=date('YmdHis')?>') }}" type='text/css' media='all' />
      <link rel='stylesheet' id='style-css'  href="{{ asset('themes-empore/twentyfifteen/css/style8572.css?v=225&amp;ver=4.9.8') }}" type='text/css' media='all' />
      <script type='text/javascript' src="{{ asset('js-empore/jquery.min.js?ver=1.11.3') }}"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>



    <!--  JS EM-HR  -->

    <script src="{{ asset('admin-css/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('admin-css/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('admin-css/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('admin-css/js/jquery.slimscroll.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('admin-css/js/waves.js') }}"></script>
    <!--Counter js -->
    <script src="{{ asset('admin-css/plugins/bower_components/waypoints/lib/jquery.waypoints.js') }}"></script>
    <script src="{{ asset('admin-css/plugins/bower_components/counterup/jquery.counterup.min.js') }}"></script>
    <!--Morris JavaScript -->
    <script src="{{ asset('admin-css/plugins/bower_components/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('admin-css/plugins/bower_components/morrisjs/morris.js') }}"></script>
    <!-- chartist chart -->
    <script src="{{ asset('admin-css/plugins/bower_components/chartist-js/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('admin-css/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <!-- Calendar JavaScript -->
    <script src="{{ asset('admin-css/plugins/bower_components/moment/moment.js') }}"></script>
    <script src="{{ asset('admin-css/plugins/bower_components/calendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('admin-css/plugins/bower_components/calendar/dist/cal-init.js') }}"></script>
    <script src="{{ asset('admin-css/plugins/bower_components/toast-master/js/jquery.toast.js') }}"></script>
    <script src="{{ asset('js/jquery.priceformat.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('admin-css/js/custom.min.js') }}"></script>
    <script src="{{ asset('admin-css/js/dashboard1.js') }}?time=<?=date('His')?>"></script>
    <!-- Custom tab JavaScript -->
    <script src="{{ asset('admin-css/js/cbpFWTabs.js') }}"></script>
    <script src="{{ asset('js/general.js?v='. date('His')) }}"></script>
    <script src="{{ asset('js/bootbox.min.js') }}"></script>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    <!--  END JS EM-HR -->
  </head>
