<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('public/front/assets/dist/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('public/front/assets/css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('public/front/assets/css/responsive.css') }}" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{asset('public/front/assets/images/logo.png')}}" />
        @yield('title')
    </head>
    <body class="bg-white">
        <!-- header section start here -->

        

        <!-- Baner Search Filter -->
        @include('includes.front-header')
        @yield('content')

        @include('includes.front-footer')
        <!-- footer section end here -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="{{ asset('public/front/assets/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('public/front/assets/dist/js/bootstrap.min.js') }}"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
  AOS.init();
  jQuery(document).ready(function($){
  $(document).on('input', '#radius-vol', function() {

    $('.radius-value').text( $(this).val()+ "km" );
    console.log("jkd");


});
$(".fa-angle-up.open1").click(function(){
    // $(this).parents().toggleClass('active');
    $(".filters-collapse-open1").slideToggle();
    $(this).toggleClass("active");
    console.log("alll");
  });
  $(".fa-angle-up.open2").click(function(){
    $(".filters-collapse-open2").slideToggle();
    $(this).toggleClass("active");
    console.log("alll");
  });
  $(".fa-angle-down.close1").click(function(){
    $(".filters-collapse-close1").slideToggle();
    $(this).toggleClass("active");
    console.log("alll");
  });
  $(".fa-angle-down.close2").click(function(){
    $(".filters-collapse-close2").slideToggle();
    $(this).toggleClass("active");
    console.log("alll");
  });
  $(".fa-angle-down.close3").click(function(){
    $(".desried-price").slideToggle();
    $(this).toggleClass("active");
    console.log("alll");
  });
  $(".report-btn").click(function(){
   $(".refer-friend-popup").show();
  });
$(".fa-times").click(function(){
   $(".refer-friend-popup").hide();
  });



   $(".share-btn").click(function(){
   $(".shere-section").show();
  });
$(".fa-times").click(function(){
   $(".shere-section").hide();
  });
});

</script>

    </body>
</html>
<script type="text/javascript"></script>