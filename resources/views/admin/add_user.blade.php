@extends('include.master')
@section('page_title','Categroy')
@section('contant')

			   
	<div class="container-fluid">
	    <div class="row">
           <div class="col-lg-12">
		     <div class="card">
			   <div class="card-header text-uppercase"> {{ empty($data->id) ? ' Add New' : 'Update' }} {{ $title ?? '' }}</div>
			     <div class="card-body">
				    <form method="post" action="{{ asset("admin/save-user") }}" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
 
                        <input type="hidden" name="type" value="{{ $role ?? '' }}">
                        <input type="hidden" name="userId" value="{{ !empty($data->id) ? $data->id : '' }}">
					    <div class="form-group ">
						  <label for="basic-input" class=" col-form-label">First Name</label>
						  <div class="">
							<div class="input-group mb-3">
                            
								<input type="text" class="form-control" value="{{ !empty($data->fname)  ? $data->fname : old('fname') }}" name="fname" placeholder="First Name " >
							  </div>
                              <p style="color:red;">@error('fname'){{$message}}@enderror</p>
						  </div>
                        </div>
                        <div class="form-group ">
						  <label for="basic-input" class=" col-form-label">Last Name</label>
						  <div class="">
							<div class="input-group mb-3">
                            
								<input type="text" class="form-control" value="{{ !empty($data->lname)  ? $data->lname : old('lname') }}" name="lname" placeholder="Last Name " >
							  </div>
                              <p style="color:red;">@error('lname'){{$message}}@enderror</p>
						  </div>
                        </div>
                        <div class="form-group ">
						  <label for="basic-input" class=" col-form-label">Email</label>
						  <div class="">
							<div class="input-group mb-3">
                            
								<input type="text" class="form-control" value="{{ !empty($data->email)  ? $data->email : old('email') }}" name="email" placeholder="Email" >
							  </div>
                              <p style="color:red;">@error('email'){{$message}}@enderror</p>
						  </div>
                        </div>
                         <div class="form-group ">
						  <label for="basic-input" class=" col-form-label">Mobile</label>
						  <div class="">
							<div class="input-group mb-3">
                            
								<input type="number" maxlenght="10" class="form-control" value="{{ !empty($data->mobile)  ? $data->mobile : old('mobile') }}" name="mobile" placeholder="Mobile" >
							  </div>
                              <p style="color:red;">@error('mobile'){{$message}}@enderror</p>
						  </div>
                        </div>
                        <div class="form-group ">
						  <label for="basic-input" class=" col-form-label">Password</label>
						  <div class="">
							<div class="input-group mb-3">
                            
								<input type="password" class="form-control" value="{{ !empty($data->password)  ? decrypt($data->password) : old('password') }}" name="password" placeholder="Password" >
							  </div>
                              <p style="color:red;">@error('password'){{$message}}@enderror</p>
						  </div>
                        </div>
						 
					
						  
						  
						 
                    <div class="form-group ">
						  <label for="basic-input" class="col-form-label">Status</label>
						
							<div class="input-group mb-3">
<select name="status" class="form-control single-select">
<option value="">Select Status</option>
<option value="1" {{ (!empty($data->status) && $data->status == 1)  ? 'selected' : '' }}>Active</option>
<option value="0" {{ (!empty($data->status) && $data->status == 0)  ? 'selected' : '' }}>Inactive</option>
</select> 

<p style="color:red;">@error('status'){{$message}}@enderror</p>
</div>
</div>
						 
						  
						  
						 <p class="text-center"><input type="submit" value="submit"  class="btn btn-success" name="submit"></p>
						</div>
						</form>
						  </div>
						</div>
						  </div>
						</div>
			   
			    </div>

@endsection