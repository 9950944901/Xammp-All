@extends('layouts.app')
@section('contant')

<style type="text/css">
  header {
    background-image: url({{ URL::asset('frontend_asset/assets/img/Graphic-tarot.png')}});
    
  }
  
  
</style>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center">
                       @include('layouts.flash-message')
      <h1>ComingSoon</h1>
      <h2>We're working hard to Launch our website and we'll ready to launch after</h2>
      <div class="center_curve_image">
          <img src="{{ URL::asset('frontend_asset/assets/img/astrology.png')}}" style="transform: rotateX(0deg) rotateY(0deg) rotateZ(-36.8211deg);">
      </div>
      
      <div class="countdown d-flex justify-content-center" data-count="2022/10/1">
        <div>
          <h3>%d</h3>
          <h4>Days</h4>
        </div>
        <div>
          <h3>%h</h3>
          <h4>Hours</h4>
        </div>
        <div>
          <h3>%m</h3>
          <h4>Minutes</h4>
        </div>
        <div>
          <h3>%s</h3>
          <h4>Seconds</h4>
        </div>
      </div>

      <div class="subscribe">
        <h4>Register Yourself as Pandit ji</h4>
        <form action="" method="post" role="form" class="php-email-form">
          <!-- <div class="subscribe-form"> -->
            <a href="{{ url('Register-form') }}" class="btn btn-danger">Register</a>
            <!-- <input type="submit" value="Register"> -->
          <!-- </div> -->
          <div class="mt-2">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your notification request was sent. Thank you!</div>
          </div>
        </form>
      </div>

      <div class="social-links text-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End #header -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
@if ($message = Session::get('otpsweet'))
      <script>
            const Toast = Swal.mixin({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 2500,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          })
          Toast.fire({
            icon: 'success',
            title: '<h6>Register SuccessFull</h6>'
          })
</script>
@endif

  
  
  
@endsection