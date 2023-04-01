<!doctype html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">

<!--favicon-->
<link rel="icon" href="{{URL::asset('assets/images/logo-icon.png')}}" type="image/png" />
<!--plugins-->

<link href="{{URL::asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
<link href="{{URL::asset('assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet" />
<!-- loader-->
<link href="{{URL::asset('assets/css/pace.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" />
<script src="{{URL::asset('assets/js/pace.min.js')}}"></script>
<!-- Bootstrap CSS -->
<!--<link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">-->
    	<link href="https://sindhisanskriti.com/p1/skilluva/assest/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/da3af72861.js" crossorigin="anonymous"></script>
<link href="{{URL::asset('assets/css/app.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet">
<!-- Theme Style CSS -->
<link rel="stylesheet" href="{{URL::asset('assets/css/dark-theme.css')}}" />
<link rel="stylesheet" href="{{URL::asset('assets/css/semi-dark.css')}}" />
<link rel="stylesheet" href="{{URL::asset('assets/css/header-colors.css')}}" />
<link href="{{URL::asset('assets/fancybox/css/jquery.fancybox.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet" />
<script src="{{URL::asset('assets/ajax/jquery.min.js')}}"></script>
<link href="{{URL::asset('assets/css/bootstrap-toggle.min.css')}}" rel="stylesheet"/>
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css">

<link href="{{URL::asset('assets/Promo_panel/assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datetimepicker/css/classic.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('assets/plugins/datetimepicker/css/classic.time.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('assets/plugins/datetimepicker/css/classic.date.css')}}" rel="stylesheet" />
	<link rel="stylesheet" href="{{URL::asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="{{URL::asset('assets/Promo_panel/assets/plugins/switchery/js/switchery.min.js')}}"></script>



<link rel="stylesheet" href="{{URL::asset('assets/bootstrapnew/bootstrap.min.css')}}" >

<script src="{{URL::asset('assets/bootstrapnew/bootstrap.bundle.min.js')}}" ></script>

<script src="{{URL::asset('assets/bootstrapnew/jquery.slim.min.js')}}"></script>
<script src="{{URL::asset('assets/bootstrapnew/popper.min.js')}}"></script>
<script src="{{URL::asset('assets/bootstrapnew/bootstrap.min.js')}}"></script>

<title>@yield('page_title')</title>


<style>
    .fontpaddingmargin button.btn {
    font-size: 14px !important;
    padding: 4px 10px !important;
}
    .fontpaddingmargin a.btn {
   font-size: 9px !important;
    padding: 4px 3px !important;
}

.fontpaddingmargin a.btn i {
    font-size: 14px !important;
}

.fontpaddingmargin table tr th {
    font-size: 13px;
}

.fontpaddingmargin table tr td {
    font-size: 13px;
}

.fontpaddingmargin input {
    height: 30px;
     font-size: 13px !important;
}

.fontpaddingmargin select {
    height: 30px !important;
     font-size: 13px !important;
}

.fontpaddingmargin label {
    font-size: 13px !important;
}

.fontpaddingmargin .select2-container--bootstrap4 .select2-selection--single {
    height: calc(1.2em + 0.75rem + 2px) !important;
}

    
    .topbar {
    position: fixed;
    top: 0;
    left: 250px;
    right: 0;
    height: 60px;
    /*background: #662d91 !important;*/
    background-image: linear-gradient(to right, #662d91 ,#85060694) !important;
    border-bottom: 1px solid rgb(228 228 228 / 0%);
    z-index: 10;
    -webkit-box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 0px 6px 0 rgb(206 206 238 / 54%);
    box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 0px 6px 0 rgb(206 206 238 / 54%);
}

.topbar .user-info .user-name {
    font-size: 15px;
    font-weight: 500;
    color: #f5f1f1;
}

.topbar .user-info .designattion {
    font-size: 13px;
    color: #f1eeee;
}

.sidebar-header {
    width: 250px;
    height: 60px;
    display: flex;
    align-items: center;
    position: fixed;
    top: 0;
    bottom: 0;
    padding: 0 15px;
    z-index: 5;
    background: #662d91 !important;
    background-clip: padding-box;
    border-bottom: 1px solid #e4e4e4;
}

.logo-text {
    font-size: 22px;
    margin-left: 10px;
    margin-bottom: 0;
    letter-spacing: 1px;
    color: #ffffff;
}

.sidebar-wrapper .metismenu {
     background-image: linear-gradient(#662d91 ,#85060694) !important;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding: 10px;
    margin-top: 60px;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
}
ul#menu li a {
    color: #fff !important;
}
ul#menu li ul {
    background: #662d91 !important;
}

.page-footer {
    background-image: linear-gradient(to right, #662d91 ,#85060694) !important;
    left: 250px;
    right: 0;
    bottom: 0;
    position: fixed;
    text-align: center;
    padding: 7px;
    font-size: 14px;
    border-top: 1px solid #e4e4e4;
    z-index: 3;
    color :#fff !important;
}

.accordion_main_category .card-header {
    background: #662d91 !important;
    color: #fff !important;
}

.accordion_main_category .card-header a {
    color: #fff !important;
}

.accordion_main_category div#collapseOne {
    background: #662d91 !important;
}

.accordion_main_category .card-body ul {
    background: #662d91 !important;
}

.accordion_main_category .card {
    border: none !important;
}

.btn_category_show.focus, .btn_category_show:focus {
    outline: 0 !important;
    box-shadow: none !important;
}

.accordion_main_category .card-body ul {
    background: #662d91 !important;
    border: none !important;
}

.accordion_main_category .card-header {
    background: #864784 !important;
    color: #fff !important;
}
</style>


</head>



<body>
<!--wrapper-->
<div class="wrapper">
<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
<div class="sidebar-header">
<div>
<img src="{{URL::asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
</div>
<div>
<h4 class="logo-text">Pandit ji</h4>
</div>
<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
</div>
</div>
<!--navigation-->
<ul class="metismenu" id="menu">
<li>
<a href="dashboard" >
<div class="parent-icon"><i class="fa fa-home" aria-hidden="true"></i>
</div>
<div class="menu-title">Dashboard</div>
</a>
</li>

<li>
<a href="{{ url('add_profile') }}" >
<div class="parent-icon"><i class="fa fa-home" aria-hidden="true"></i>
</div>
<div class="menu-title">Add Profile</div>
</a>
</li>

<li>
<a href="{{ url('profileview') }}" >
<div class="parent-icon"><i class="fa fa-home" aria-hidden="true"></i>
</div>
<div class="menu-title">Profile View</div>
</a>
</li>

</ul>


<!--end navigation-->
</div>
<!--end sidebar wrapper -->
<!--start header -->
<header>
<div class="topbar d-flex align-items-center">
<nav class="navbar navbar-expand">
<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
</div>
<div class="top-menu ms-auto">
<ul class="navbar-nav align-items-center">

<li class="nav-item dropdown dropdown-large">

</li>
<li class="nav-item dropdown dropdown-large">

</li>
</ul>
</div>

<div class="user-box dropdown">
<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret has-arrow" href="javascript" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<img src="{{URL::asset('assets/images/logo-icon.png')}}" class="user-img" alt="user avatar">
<div class="user-info ps-3">
<p class="user-name mb-0">Pandit ji</p>
<!-- <p class="designattion mb-0">Web Designer</p> -->
</div>
</a>
<ul class="dropdown-menu dropdown-menu-end">


<li><a class="dropdown-item" href="adminchangepassword" ><i class="bx bx-log-out-circle"></i><span>Change Password</span></a>
</li>
<li><a class="dropdown-item" href="logout" ><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
</li>
</ul>
</div>
</nav>
</div>
</header>
<!--end header -->



<div class="page-wrapper fontpaddingmargin">
	<div class="page-content">


@yield('contant')

</div>
</div>


<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
<footer class="page-footer">
<p class="mb-0">Copyright &copy; <?php echo date('Y') ?> All right reserved.</p>
</footer>
</div>
<!--end wrapper-->
<!--start switcher-->
<div class="switcher-wrapper">
<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
</div>
<div class="switcher-body">
<div class="d-flex align-items-center">
<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
</div>
<hr/>
<h6 class="mb-0">Theme Styles</h6>
<hr/>
<div class="d-flex align-items-center justify-content-between">
<div class="form-check">
<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
<label class="form-check-label" for="lightmode">Light</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
<label class="form-check-label" for="darkmode">Dark</label>
</div>
<div class="form-check">
<input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
<label class="form-check-label" for="semidark">Semi Dark</label>
</div>
</div>
<hr/>
<div class="form-check">
<input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
<label class="form-check-label" for="minimaltheme">Minimal Theme</label>
</div>
<hr/>
<h6 class="mb-0">Header Colors</h6>
<hr/>
<div class="header-colors-indigators">
<div class="row row-cols-auto g-3">
<div class="col">
<div class="indigator headercolor1" id="headercolor1"></div>
</div>
<div class="col">
<div class="indigator headercolor2" id="headercolor2"></div>
</div>
<div class="col">
<div class="indigator headercolor3" id="headercolor3"></div>
</div>
<div class="col">
<div class="indigator headercolor4" id="headercolor4"></div>
</div>
<div class="col">
<div class="indigator headercolor5" id="headercolor5"></div>
</div>
<div class="col">
<div class="indigator headercolor6" id="headercolor6"></div>
</div>
<div class="col">
<div class="indigator headercolor7" id="headercolor7"></div>
</div>
<div class="col">
<div class="indigator headercolor8" id="headercolor8"></div>
</div>
</div>
</div>
<hr/>
<h6 class="mb-0">Sidebar Colors</h6>
<hr/>
<div class="header-colors-indigators">
<div class="row row-cols-auto g-3">
<div class="col">
<div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
</div>
<div class="col">
<div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
</div>
<div class="col">
<div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
</div>
<div class="col">
<div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
</div>
<div class="col">
<div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
</div>
<div class="col">
<div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
</div>
<div class="col">
<div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
</div>
<div class="col">
<div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
</div>
</div>
</div>
</div>
</div>




<!--end switcher-->
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<!--//<script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>-->

<script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<!--plugins-->

<script src="{{URL::asset('assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{URL::asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{URL::asset('assets/plugins/chartjs/js/Chart.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/chartjs/js/Chart.extension.js')}}"></script>
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<!--app JS-->
<script src="{{URL::asset('assets/js/app.js')}}"></script>


<script src="{{URL::asset('assets/fancybox/js/jquery.fancybox.min.js')}}"></script>


<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap-toggle.min.js')}}"></script>
<script type="text/javascript">
/* For CKeditor */

CKEDITOR.replace( 'editor');
</script>
<script src="https:////cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
	<script src="{{URL::asset('assets/plugins/datetimepicker/js/legacy.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datetimepicker/js/picker.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datetimepicker/js/picker.time.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/datetimepicker/js/picker.date.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js')}}"></script>
	<script src="{{URL::asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js')}}"></script>
<script src="https:////cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<script type="text/javascript">
/* For CKeditor */

CKEDITOR.replace( 'editor');
</script>


<script>
$(document).ready(function() {
$('#example').DataTable();
$('#example3').DataTable({
    dom:'lBfrtip',
    lengthMenu: [
        [ 10, 25, 50, -1 ],
        [ '10 rows', '25 rows', '50 rows', 'Show all' ]
    ],
   buttons: [ 'copy', 'excel', 'pdf', 'print']
});
} );
</script>
<script>
$(document).ready(function() {
var table = $('#example2').DataTable( {
lengthChange: true,
buttons: [ 'copy', 'excel', 'pdf', 'print'],

} );

table.buttons().container()
.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
} );
</script>


<script>
function goBack() {
window.history.back();
}
</script>

<script>
$('.single-select').select2({
theme: 'bootstrap4',
width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
placeholder: $(this).data('placeholder'),
allowClear: Boolean($(this).data('allow-clear')),
});
$('.multiple-select').select2({
theme: 'bootstrap4',
width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
placeholder: $(this).data('placeholder'),
allowClear: Boolean($(this).data('allow-clear')),
});
</script>




@stack('footer_script')



</body>



</html>