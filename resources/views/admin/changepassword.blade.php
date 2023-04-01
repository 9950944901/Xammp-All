@extends('include.master')
@section('page_title','Password')
@section('contant')

			   
			     <div class="container-fluid">
	    <div class="row">
           <div class="col-lg-12">
		     <div class="card">
			   <div class="card-header text-uppercase"> Change Password</div>
			     <div class="card-body">
				    <form method="post" action="{{url('admin/updateadminpassword')}}" enctype= "multipart/form-data">
						        @csrf
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Old Password</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="old_password" class="form-control" value="">
									@error('old_password')
                                      <small class="text-danger">{{ $message ?? '' }}</small>
                                    @enderror
								</div>
							</div>
								<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">New Password</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="new_password"  class="form-control" value="">
									@error('new_password')
                                      <small class="text-danger">{{ $message ?? '' }}</small>
                                    @enderror
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Confirm Password</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" name="confirm_pass" class="form-control" value="">
									@error('confirm_pass')
                                      <small class="text-danger">{{ $message ?? '' }}</small>
                                    @enderror
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" name="submit" class="btn btn-primary px-4" value="Change Password">
								</div>
							</div>
						    </form>
						  </div>
						</div>
						  </div>
						</div>
			   
			    </div>

@endsection