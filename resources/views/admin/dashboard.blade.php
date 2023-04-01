@extends('include.master')
@section('page_title','E-Book')
@section('contant')


<style>

.active{
font-size: 14px;
background-image: linear-gradient(to right, rgb(218, 34, 255) 0%, rgb(151, 51, 238) 51%, rgb(218, 34, 255) 100%);

}


.inactive{
font-size: 14px;
background-image: linear-gradient(to right, rgb(255, 81, 47) 0%, rgb(240, 152, 25) 51%, rgb(255, 81, 47) 100%);
}


</style>




<div class="col-sm-12">
<div class="container-fluid">
@include('layouts.flash-message')
<div class="row">
<div class="col-lg-12">
<div class="card">
<style>
   .color_pending_all .pending-appointment {
    background-color: #ffeea9;
    border-color: #ffd52c;
}

.color_pending_all .checkedin-appointment {
    background-color: #d7c8ff;
    border-color: #ae9be1;
}

.color_pending_all .billed-appointment {
    background-color: #bef1be;
    border-color: #83e783;
}

.color_pending_all .cancelled-appointment {
    background-color: #f97979;
    border-color: #ff4242;
}
</style>


		<!--start page wrapper -->
	
				<div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
                   <div class="col-3">
					 <div class="card radius-10 border-start border-0 border-3 border-info">
						<div class="card-body">
							<div class="d-flex align-items-center">
								<div>
							
									<p class="mb-0 text-secondary">Total Trainers</p>
									<h4 class="my-1 text-info">{{$Trainer}}</h4>
									{{session('admin')}}
									<!--<p class="mb-0 font-13">+2.5% from last week</p>-->
								</div>
								<div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class="fa fa-user" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					 </div>
				   </div>
				   <div class="col-3">
					<div class="card radius-10 border-start border-0 border-3 border-danger">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Total Learners</p>
								   <h4 class="my-1 text-danger">{{$Learner}}</h4>
								   <!--<p class="mb-0 font-13">+5.4% from last week</p>-->
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class="fa fa-users" aria-hidden="true"></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				  <div class="col-3">
					<div class="card radius-10 border-start border-0 border-3 border-success">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Uploaded Ebooks</p>
								   <h4 class="my-1 text-success">{{$Ebook}}</h4>
								   <!--<p class="mb-0 font-13">-4.5% from last week</p>-->
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class="fa fa-book" aria-hidden="true"></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				  <div class="col-3">
					<div class="card radius-10 border-start border-0 border-3 border-warning">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Uploaded Advance Course</p>
								   <h4 class="my-1 text-warning">{{$advance}}</h4>
								   <!--<p class="mb-0 font-13">+8.4% from last week</p>-->
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class="fa fa-smile-o" aria-hidden="true"></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div> <div class="col-3">
					<div class="card radius-10 border-start border-0 border-3 border-warning">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Foundational Course</p>
								   <h4 class="my-1 text-warning">{{$Foundational_course}}</h4>
								   <!--<p class="mb-0 font-13">+8.4% from last week</p>-->
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class="fa fa-book" aria-hidden="true"></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div>
				  <div class="col-3">
					<div class="card radius-10 border-start border-0 border-3 border-warning">
					   <div class="card-body">
						   <div class="d-flex align-items-center">
							   <div>
								   <p class="mb-0 text-secondary">Ordered course</p>
								   <h4 class="my-1 text-warning">{{$Order}}</h4>
								   <!--<p class="mb-0 font-13">+8.4% from last week</p>-->
							   </div>
							   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
							   </div>
						   </div>
					   </div>
					</div>
				  </div> 
				</div><!--end row-->
				
				
				<div class="row">
				    <div class="col-12 col-lg-12">
				        <div class="color-code-indecation">
				    <ul class="pull-right color_pending_all">
				        <li style="display:inline-block;margin-right:10px;"><span class="pending-appointment" style="height:11px;width:11px;display:inline-block;"></span> Pending</li>
				        <li style="display:inline-block;margin-right:10px;"><span class="checkedin-appointment" style="height:11px;width:11px;display:inline-block;"></span> Checked In</li>
				        <li style="display:inline-block;margin-right:10px;"><span class="billed-appointment" style="height:11px;width:11px;display:inline-block;"></span> Billed</li>
				        <li style="display:inline-block;margin-right:10px;"><span class="cancelled-appointment" style="height:11px;width:11px;display:inline-block;"></span> Cancelled</li>
				    </ul>
				</div>
				    </div>
				</div>
				
				
				

				<div class="row">
                   <div class="col-12 col-lg-12">
                      <div class="card radius-10">
						  <div class="card-body">
							<div class="d-flex align-items-center">
								<div>
									<h6 class="mb-0">Sales Overview</h6>
								</div>
								<div class="dropdown ms-auto">
									<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"><i class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
									</a>
									<ul class="dropdown-menu">
										<li><a class="dropdown-item" href="javascript:;">Action</a>
										</li>
										<li><a class="dropdown-item" href="javascript:;">Another action</a>
										</li>
										<li>
											<hr class="dropdown-divider">
										</li>
										<li><a class="dropdown-item" href="javascript:;">Something else here</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="d-flex align-items-center ms-auto font-13 gap-2 my-3">
								<span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #14abef"></i>Sales</span>
								<span class="border px-1 rounded cursor-pointer"><i class="bx bxs-circle me-1" style="color: #ffc107"></i>Visits</span>
							</div>
							<div class="chart-container-1">
								<canvas id="chart1"></canvas>
							  </div>
						  </div>
						  <div class="row row-cols-1 row-cols-md-3 row-cols-xl-3 g-0 row-group text-center border-top">
							<div class="col">
							  <div class="p-3">
								<h5 class="mb-0">{{$Orderamaount_today}}₹</h5>
								<small class="mb-0"> Today Order Amount <span> </small>
							  </div>
							</div>
							<div class="col">
							  <div class="p-3">
								<h5 class="mb-0">{{$Orderamaount_this_month}}₹</h5>
								<small class="mb-0">This Month Order Amount<span></small>
							  </div>
							</div>
							<div class="col">
							  <div class="p-3">
								<h5 class="mb-0">{{$Orderamaount}}₹</h5>
								<small class="mb-0"><span>Total Order Amount </small>
							  </div>
							</div>
						  </div>
					  </div>
				   </div>
		
				</div><!--end row-->

	

			</div>
		</div>
</div>




<script>let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
let switchery = new Switchery(html,  { size: 'small' });
});</script>


<script>


$(document).ready(function(){
$('.js-switch').change(function () {
let status = $(this).prop('checked') === true ? 1 : 0;
let userId = $(this).data('id');
$.ajax({
type: "GET",
dataType: "json",
url: 'ebook.update.status',
data: {'status': status, 'id': userId},
success: function (data) {
alert(data.message);
}
});
});
});

</script>

<script>

success: function (data) {
toastr.options.closeButton = true;
toastr.options.closeMethod = 'fadeOut';
toastr.options.closeDuration = 100;
toastr.success(data.message);
}
</script>




<style>

.w-5 {
display: none;
}

.h-5{
display: none;
}

</style>


@endsection
@stack('footer_script')