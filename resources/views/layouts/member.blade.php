<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>UMKM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
  <link href=" {{asset('assets/frontend/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href=" {{asset('assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href=" {{asset('assets/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href=" {{asset('assets/frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href=" {{asset('assets/frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href=" {{asset('assets/frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
  <!-- Template Main CSS File -->

  <link href=" {{asset('assets/frontend/assets/css/style.css')}}" rel="stylesheet">
  
   
  <!-- =======================================================
  * Template Name: Green - v4.10.0
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



    @include('layouts.partials.member.navbar')

    @yield('konten')



    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    @include('layouts.partials.member.footer')
    <!-- Vendor JS Files -->
    <script src="{{asset('assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  
    <!-- Template Main JS File -->
    <script src="{{asset('assets/frontend/assets/js/main.js')}}"></script>
    
    <script>
      
      $(document).ready(function(){
          $('.customer-logos').slick({
              slidesToShow: 6,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 1500,
              arrows: false,
              dots: false,
              pauseOnHover:false,
              responsive: [{
                  breakpoint: 768,
                  setting: {
                      slidesToShow:4
                  }
              }, {
                  breakpoint: 520,
                  setting: {
                      slidesToShow: 3
                  }
              }]
          });
      });
  
      </script>
  
  </body>
  
  </html>