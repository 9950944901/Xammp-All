<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title>SkillUVA</title>
	
  <!-- Favicons-->
  <link rel="shortcut icon" href="{{ URL::asset('frontend/img_skill/skill_icon.png')}}" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="{{ URL::asset('frontend/img_skill/skill_icon.png')}}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{ URL::asset('frontend/img_skill/skill_icon.png')}}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{ URL::asset('frontend/img_skill/skill_icon.png')}}">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{ URL::asset('frontend/img_skill/skill_icon.png')}}">

  <!-- GOOGLE WEB FONT -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	
  <!-- Bootstrap core CSS-->
  <link href="{{ URL::asset('frontend/user_dashboard/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Main styles -->
  <link href="{{ URL::asset('frontend/user_dashboard/css/admin.css')}}" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="{{ URL::asset('frontend/user_dashboard/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href="{{ URL::asset('frontend/user_dashboard/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="{{ URL::asset('frontend/user_dashboard/css/custom.css')}}" rel="stylesheet">
 <link href="{{URL::asset('assets/Promo_panel/assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet">
<script src="{{URL::asset('assets/Promo_panel/assets/plugins/switchery/js/switchery.min.js')}}"></script>

</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-white fixed-top" id="mainNav">
      <div>
    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ URL::asset('frontend/img_skill/logo_skill.png')}}" data-retina="true" alt="" width="163" height="36"></a>
    </div>
    <div>
    <h4 class="text-center">Trainer Dashboard</h4>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
       {{-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{ url('teacher-dashboard') }}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>--}}
	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookings">
          <a class="nav-link" href="teacher-profile">
            <i class="fa fa-fw fa-archive"></i>
            <span class="nav-link-text">My Profile </span>
          </a>
        </li>
        
		
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookings">
          <a class="nav-link" href="view_trainer_course">
            <i class="fa fa-fw fa-archive"></i>
            <span class="nav-link-text">My Uploads </span>
          </a>
        </li>
        
        	<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookings">
          <a class="nav-link" href="mystudentslist">
            <i class="fa fa-fw fa-archive"></i>
            <span class="nav-link-text">My Students </span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookings">
          <a class="nav-link" href="{{ url('Student-Progress') }}">
            <i class="fa fa-fw fa-archive"></i>
            <span class="nav-link-text">My Students Progress</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookings">
          <a class="nav-link" href="teacherebooklist">
            <i class="fa fa-fw fa-archive"></i>
            <span class="nav-link-text">Ebook</span>
          </a>
        </li>
        
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookings">
          <a class="nav-link" href="">
            <i class="fa fa-fw fa-archive"></i>
            <span class="nav-link-text">Pending Action </span>
          </a>
        </li>
        
        
        
        <!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookings">-->
        <!--  <a class="nav-link" href="">-->
        <!--    <i class="fa fa-fw fa-archive"></i>-->
        <!--    <span class="nav-link-text">Certificate </span>-->
        <!--  </a>-->
        <!--</li>-->
      </ul>
     
    </div>
    </div>
  </nav>
  <!-- /Navigation-->
  <div class="content-wrapper">
      
      
      
      	@yield('content')
      
	  <!-- /.container-fluid-->
   	</div>
    <!-- /.container-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © SkillUVA 2022</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::asset('frontend/user_dashboard/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ URL::asset('frontend/user_dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ URL::asset('frontend/user_dashboard/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <!-- Page level plugin JavaScript-->
    <script src="{{ URL::asset('frontend/user_dashboard/vendor/chart.js/Chart.js')}}"></script>
    <script src="{{ URL::asset('frontend/user_dashboard/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{ URL::asset('frontend/user_dashboard/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
	<script src="{{ URL::asset('frontend/user_dashboard/vendor/jquery.selectbox-0.2.js')}}"></script>
	<script src="{{ URL::asset('frontend/user_dashboard/vendor/retina-replace.min.js')}}"></script>
	<script src="{{ URL::asset('frontend/user_dashboard/vendor/jquery.magnific-popup.min.js')}}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ URL::asset('frontend/user_dashboard/js/admin.js')}}"></script>
	<!-- Custom scripts for this page-->
    <script src="{{ URL::asset('frontend/user_dashboard/js/admin-charts.js')}}"></script>
	
  <script>
   if($(".maxFileLimit").length > 0){
        $(document).on("change",".maxFileLimit",function(){
            $(".maxFileLimitError").text("");
            let $this = $(this);
            let limit = $this.data('filelimit');
            if (parseInt($this.get(0).files.length) > limit) {
                  $(".maxFileLimitError").text("You are only allowed to upload a maximum of 25 files");
                  $this.val('');
                  return ;
            }
            let ErrorImage = "";
             for (var i = 0; i < $(this).get(0).files.length; ++i)
            {
            var img =  $this.get(0).files[i].name;
            var img_file_size= $this.get(0).files[i].size;
            if(img_file_size > 500000)
            {
                var img_ext = img.split('.').pop().toLowerCase();
                if($.inArray(img_ext,['m4v','avi','mp4','mov','mpg','mpeg'])===-1){
                      ErrorImage +="File ("+img+") type not allowed. <br>";
                }
            }else{
               ErrorImage +="File("+img+") size is too big. <br>";
             
            }    
          } 
           
            if(ErrorImage != ""){
               $(".maxFileLimitError").html(ErrorImage);
                $this.val('');
                  return ;
            }
        })
       
   }
  
  </script>
</body>
</html>
