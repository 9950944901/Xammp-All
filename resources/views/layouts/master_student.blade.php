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
	
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ URL::asset('frontend/img_skill/logo_skill.png')}}" data-retina="true" alt="" width="163" height="36"></a>
     <h4 class="text-center text-white" style="text-align:center;">Learner Dashboard</h4>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        {{--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{ url('student-dashboard') }}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>--}}
		<!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Messages">-->
  <!--        <a class="nav-link" href="messages.html">-->
  <!--          <i class="fa fa-fw fa-envelope-open"></i>-->
  <!--          <span class="nav-link-text">Messages</span>-->
  <!--        </a>-->
  <!--      </li>-->
		<!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookings">-->
  <!--        <a class="nav-link" href="courses.html">-->
  <!--          <i class="fa fa-fw fa-archive"></i>-->
  <!--          <span class="nav-link-text">Courses <span class="badge badge-pill badge-primary">6 New</span></span>-->
  <!--        </a>-->
  <!--      </li>-->
		<!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Reviews">-->
  <!--        <a class="nav-link" href="reviews.html">-->
  <!--          <i class="fa fa-fw fa-star"></i>-->
  <!--          <span class="nav-link-text">Reviews</span>-->
  <!--        </a>-->
  <!--      </li>-->
		<!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Bookmarks">-->
  <!--        <a class="nav-link" href="bookmarks.html">-->
  <!--          <i class="fa fa-fw fa-heart"></i>-->
  <!--          <span class="nav-link-text">Bookmarks</span>-->
  <!--        </a>-->
  <!--      </li>-->
		<!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add listing">-->
  <!--        <a class="nav-link" href="add-listing.html">-->
  <!--          <i class="fa fa-fw fa-plus-circle"></i>-->
  <!--          <span class="nav-link-text">Add listing</span>-->
  <!--        </a>-->
  <!--      </li>-->
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link "  href="" >
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Membership</span>
          </a>

        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link "  href="leainerfoundationalcourse" >
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Foundntional</span>
          </a>

        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link "  href="" >
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Blog</span>
          </a>

        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link "  href="leainerebookcourse" >
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Ebook</span>
          </a>

        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link "  href="leanermasterclasslist" >
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Master Class</span>
          </a>

        </li>
        
        
        {{--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <p class="text-center"><i class="fa fa-sticky-note" aria-hidden="true"></i></p>
            Membership
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <li><a class="dropdown-item" href="">Foundntional</a></li>
            <li><a class="dropdown-item" href="">Blog</a></li>
            <li><a class="dropdown-item" href="">Ebook</a></li>
            <li><a class="dropdown-item" href="">Master Class</a></li>
          </ul>
        </li>--}}
        
        <!--<div id="accordion" class="accordion_main_category">-->
        <!--    <div class="card">-->
        <!--        <div class="card-header has-arrow">-->
        <!--            <a class="btn btn_category_show" data-bs-toggle="collapse" href="#collapseOne">-->
        <!--                Membership-->
        <!--            </a>-->
        <!--        </div>-->
        <!--        <div id="collapseOne" class="collapse" data-bs-parent="#accordion">-->
        <!--            <div class="card-body">-->
        <!--                <ul>-->
        <!--                    <li><a href="" ><i class="bx bx-right-arrow-alt"></i>Foundational</a>-->
        <!--                    </li>-->
        <!--                    <li><a href="" ><i class="bx bx-right-arrow-alt"></i>Blog</a>-->
        <!--                    </li>-->
        <!--                    <li><a href="" ><i class="bx bx-right-arrow-alt"></i>Ebook</a>-->
        <!--                    </li>-->
        <!--                    <li><a href="" ><i class="bx bx-right-arrow-alt"></i>Master Class</a>-->
        <!--                    </li>-->
            
        <!--                </ul>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link "  href="my-purches-agrgregate" >
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Aggregate Course</span>
          </a>
        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link "  href="" >
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Events</span>
          </a>

        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link "  href="" >
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Pending Action</span>
          </a>
        </li>
        
          
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link "  href="" >
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Certificate</span>
          </a>
        </li>
        
          
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link "  href="student-profile" >
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">My Account</span>
          </a>

        </li>
        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link "  href="student-orderlist" >
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">My Orders</span>
          </a>
        </li>
        
        
        {{--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="My profile">
          <a class="nav-link "  href="" >
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Foundational</span>
          </a>
        </li>--}}
        
        
         
        
         
        
        
        
		<!--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">-->
  <!--        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">-->
  <!--          <i class="fa fa-fw fa-gear"></i>-->
  <!--          <span class="nav-link-text">Components</span>-->
  <!--        </a>-->
  <!--        <ul class="sidenav-second-level collapse" id="collapseComponents">-->
  <!--          <li>-->
  <!--            <a href="charts.html">Charts</a>-->
  <!--          </li>-->
		<!--	<li>-->
  <!--            <a href="tables.html">Tables</a>-->
  <!--          </li>-->
  <!--        </ul>-->
  <!--      </li>-->
      </ul>
      <!--<ul class="navbar-nav sidenav-toggler">-->
      <!--  <li class="nav-item">-->
      <!--    <a class="nav-link text-center" id="sidenavToggler">-->
      <!--      <i class="fa fa-fw fa-angle-left"></i>-->
      <!--    </a>-->
      <!--  </li>-->
      <!--</ul>-->
      <!--<ul class="navbar-nav ml-auto">-->
      <!--  <li class="nav-item dropdown">-->
      <!--    <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
      <!--      <i class="fa fa-fw fa-envelope"></i>-->
      <!--      <span class="d-lg-none">Messages-->
      <!--        <span class="badge badge-pill badge-primary">12 New</span>-->
      <!--      </span>-->
      <!--      <span class="indicator text-primary d-none d-lg-block">-->
      <!--        <i class="fa fa-fw fa-circle"></i>-->
      <!--      </span>-->
      <!--    </a>-->
      <!--    <div class="dropdown-menu" aria-labelledby="messagesDropdown">-->
      <!--      <h6 class="dropdown-header">New Messages:</h6>-->
      <!--      <div class="dropdown-divider"></div>-->
      <!--      <a class="dropdown-item" href="#">-->
      <!--        <strong>David Miller</strong>-->
      <!--        <span class="small float-right text-muted">11:21 AM</span>-->
      <!--        <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>-->
      <!--      </a>-->
      <!--      <div class="dropdown-divider"></div>-->
      <!--      <a class="dropdown-item" href="#">-->
      <!--        <strong>Jane Smith</strong>-->
      <!--        <span class="small float-right text-muted">11:21 AM</span>-->
      <!--        <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>-->
      <!--      </a>-->
      <!--      <div class="dropdown-divider"></div>-->
      <!--      <a class="dropdown-item" href="#">-->
      <!--        <strong>John Doe</strong>-->
      <!--        <span class="small float-right text-muted">11:21 AM</span>-->
      <!--        <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>-->
      <!--      </a>-->
      <!--      <div class="dropdown-divider"></div>-->
      <!--      <a class="dropdown-item small" href="#">View all messages</a>-->
      <!--    </div>-->
      <!--  </li>-->
      <!--  <li class="nav-item dropdown">-->
      <!--    <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
      <!--      <i class="fa fa-fw fa-bell"></i>-->
      <!--      <span class="d-lg-none">Alerts-->
      <!--        <span class="badge badge-pill badge-warning">6 New</span>-->
      <!--      </span>-->
      <!--      <span class="indicator text-warning d-none d-lg-block">-->
      <!--        <i class="fa fa-fw fa-circle"></i>-->
      <!--      </span>-->
      <!--    </a>-->
      <!--    <div class="dropdown-menu" aria-labelledby="alertsDropdown">-->
      <!--      <h6 class="dropdown-header">New Alerts:</h6>-->
      <!--      <div class="dropdown-divider"></div>-->
      <!--      <a class="dropdown-item" href="#">-->
      <!--        <span class="text-success">-->
      <!--          <strong>-->
      <!--            <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>-->
      <!--        </span>-->
      <!--        <span class="small float-right text-muted">11:21 AM</span>-->
      <!--        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>-->
      <!--      </a>-->
      <!--      <div class="dropdown-divider"></div>-->
      <!--      <a class="dropdown-item" href="#">-->
      <!--        <span class="text-danger">-->
      <!--          <strong>-->
      <!--            <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>-->
      <!--        </span>-->
      <!--        <span class="small float-right text-muted">11:21 AM</span>-->
      <!--        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>-->
      <!--      </a>-->
      <!--      <div class="dropdown-divider"></div>-->
      <!--      <a class="dropdown-item" href="#">-->
      <!--        <span class="text-success">-->
      <!--          <strong>-->
      <!--            <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>-->
      <!--        </span>-->
      <!--        <span class="small float-right text-muted">11:21 AM</span>-->
      <!--        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>-->
      <!--      </a>-->
      <!--      <div class="dropdown-divider"></div>-->
      <!--      <a class="dropdown-item small" href="#">View all alerts</a>-->
      <!--    </div>-->
      <!--  </li>-->
      <!--  <li class="nav-item">-->
      <!--    <form class="form-inline my-2 my-lg-0 mr-lg-2">-->
      <!--      <div class="input-group">-->
      <!--        <input class="form-control search-top" type="text" placeholder="Search for...">-->
      <!--        <span class="input-group-btn">-->
      <!--          <button class="btn btn-primary" type="button">-->
      <!--            <i class="fa fa-search"></i>-->
      <!--          </button>-->
      <!--        </span>-->
      <!--      </div>-->
      <!--    </form>-->
      <!--  </li>-->
      <!--  <li class="nav-item">-->
      <!--    <a class="nav-link" href="{{url('/logout')}}">-->
      <!--      <i class="fa fa-fw fa-sign-out"></i>Logout</a>-->
      <!--  </li>-->
      <!--</ul>-->
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
	
</body>
</html>
