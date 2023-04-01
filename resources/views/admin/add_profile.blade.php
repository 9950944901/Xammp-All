@extends('include.master')
@section('contant')
<style>
.select_main_puja {
    height: 70px !important;
}

select.form-control.select_main_langugage {
    height: 70px !important;
}

.select_main_puja {
    height: 70px !important;
}

.row.mb-3.mt-3.Language_main {
    margin-top: 31px !important;
}
</style>




<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					
				</div>
				<!--end breadcrumb-->
				<div class="container">
					<div class="main-body">
						<div class="row">
							
							<div class="col-lg-12">
								<form method="post" action="">
								<div class="card">
									<div class="card-body">
										<div class="row mb-3">
											<div class="col-sm-2">
												<h6 class="mb-0">Title </h6>
											</div>
											<div class="col-sm-4 text-secondary">
												<input type="text" class="form-control" placeholder="Title" />
											</div>
										
											<div class="col-sm-2">
												<h6 class="mb-0">Frist Name</h6>
											</div>
											<div class="col-sm-4 text-secondary">
												<input type="text" class="form-control" placeholder="First Name" />
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-2">
												<h6 class="mb-0">Last Name</h6>
											</div>
											<div class="col-sm-4 text-secondary">
												<input type="text" class="form-control" placeholder="Last Name" />
											</div>
										
											<div class="col-sm-2">
												<h6 class="mb-0">Pincode</h6>
											</div>
											<div class="col-sm-4 text-secondary">
												<input type="text" class="form-control" placeholder="Pincode"  />
											</div>
										</div>
										<div class="row mb-3">
											<div class="col-sm-2">
												<h6 class="mb-0">State</h6>
											</div>
											<div class="col-sm-4 text-secondary">
												<div class="form-group">
											  <select class="form-control" id="sel1">
											  <option value="">Please choose a state...</option>
											  <option value="AN">Andaman and Nicobar</option>
											  <option value="AP">Andhra Pradesh</option>
											  <option value="AR">Arunachal Pradesh</option>
											  <option value="AS">Assam</option>
											  <option value="BH">Bihar</option>
											  <option value="CH">Chandigarh</option>
											  <option value="CT">Chhattisgarh</option>
											  <option value="DN">Dadra and Nagar Haveli</option>
											  <option value="DD">Daman and Diu</option>
											  <option value="DL">Delhi</option>
											  <option value="GA">Goa</option>
											  <option value="GJ">Gujarat</option>
											  <option value="HR">Haryana</option>
											  <option value="HP">Himachal Pradesh</option>
											  <option value="JK">Jammu Kashmir</option>
											  <option value="JH">Jharkhand</option>
											  <option value="KA">Karnataka</option>
											  <option value="KL">Kerala</option>
											  <option value="LD">Lakshadweep</option>
											  <option value="MP">Madhya Pradesh</option>
											  <option value="MH">Maharashtra</option>
											  <option value="MN">Manipur</option>
											  <option value="ML">Meghalaya</option>
											  <option value="MZ">Mizoram</option>
											  <option value="NL">Nagaland</option>
											  <option value="OR">Odisha</option>
											  <option value="PY">Pondicherry</option>
											  <option value="PB">Punjab</option>
											  <option value="RJ">Rajasthan</option>
											  <option value="SK">Sikkim</option>
											  <option value="TN">Tamil Nadu</option>
											  <option value="TS">Telangana</option>
											  <option value="TR">Tripura</option>
											  <option value="UP">Uttar Pradesh</option>
											  <option value="UT">Uttarakhand</option>
											  <option value="WB">West Bengal</option>

											  </select>
											</div>
											</div>
										
											<div class="col-sm-2"><h6 class="mb-0">City</h6></div>
											<div class="col-sm-4 text-secondary">
											<select class="form-control" id="sel1">
												<option value="">Please choose a Town/City...</option>
												  <option value="Alwar">Alwar</option>
												  <option value="Ajmer">Ajmer</option>
												  <option value="Bharatpur">Bharatpur</option>
												  <option value="Bikaner">Bikaner</option>
												  <option value="Bundi">Bundi</option>
												  <option value="Chittaurgarh">Chittaurgarh</option>
												  <option value="Jaipur">Jaipur</option>
												  <option value="Jaisalmer">Jaisalmer</option>
												  <option value="Jodhpur">Jodhpur</option>
												  <option value="Mt.Abu">Mt.Abu</option>
												  <option value="Pushkar">Pushkar</option>
												  <option value="Ranakpur">Ranakpur</option>
												  <option value="Shekhawati">Shekhawati</option>
												  <option value="Sariska">Sariska</option>
												  <option value="Udaipur">Udaipur</option>
												  <option value="Ranthambore">Ranthambore</option>
											</select>
											</div>
										</div>

										<div class="row mb-3">
											<div class="col-sm-2">
												<h6 class="mb-0">Email</h6>
											</div>
											<div class="col-sm-4 text-secondary">
												<input type="email" class="form-control" placeholder="Email" />
											</div>
										
											<div class="col-sm-2">
												<h6 class="mb-0">Mobile</h6>
											</div>
											<div class="col-sm-4 text-secondary">
												<input type="number" class="form-control" placeholder="Mobile"  />
											</div>
										</div>

										<div class="row mb-3">
											<div class="col-sm-2">
												<h6 class="mb-0">How did you find us</h6>
											</div>
											<div class="col-sm-4 text-secondary">
												<select class="form-control">
												<option value="">--Select--</option>
												<option value="From Website">From Website</option>
												<option value="From Google">From Google</option>
												<option value="From Friends">From Friends</option>
												<option value="From Facebook">From Facebook</option>
												</select>

											</div>
										
											<div class="col-sm-2">
												<h6 class="mb-0">Community</h6>
											</div>
											<div class="col-sm-4 text-secondary">
												<select class="form-control">
												<option value="">Choose Option..</option>
												<option value="Oriya"> Oriya</option>
												<option value="Bengali">Bengali</option>
												<option value="Assamese">Assamese</option>
												<option value="Telugu">Telugu</option>
												<option value="Tamil">Tamil</option>
												<option value="Malyali">Malyali</option>
												<option value="Marathi">Marathi</option>
												<option value="Kannada">Kannada</option>
												<option value="Gujarati">Gujarati</option>
												<option value="Marwari">Marwari</option>
												<option value="Punjabi">Punjabi</option>
												<option value="North Indian">North Indian</option>
												<option value="Others">Others</option>
												</select>
											</div>
										</div>


										<div class="row mb-3 select_main_puja">
											<div class="col-sm-2">
												<h6 class="mb-0">Address</h6>
											</div>
											<div class="col-sm-10 text-secondary">
												<textarea class="form-control" rows="3" id="comment" name="text" placeholder="Address"></textarea>
											</div>
										</div>


										<div class="row mb-3 mt-3 Language_main">
											<div class="col-sm-2">
												<h6 class="mb-0">Language</h6>
											</div>
											<div class="col-sm-4  text-secondary">
												<select multiple class="form-control select_main_langugage" data-placeholder="Choose a Language...">
												<option value="AF">-- Option Language--</option>
												  <option value="AF">Afrikaans</option>
												  <option value="SQ">Albanian</option>
												  <option value="AR">Arabic</option>
												  <option value="HY">Armenian</option>
												  <option value="EU">Basque</option>
												  <option value="BN">Bengali</option>
												  <option value="BG">Bulgarian</option>
												  <option value="CA">Catalan</option>
												  <option value="KM">Cambodian</option>
												  <option value="ZH">Chinese (Mandarin)</option>
												  <option value="HR">Croatian</option>
												  <option value="CS">Czech</option>
												  <option value="DA">Danish</option>
												  <option value="NL">Dutch</option>
												  <option value="EN">English</option>
												  <option value="ET">Estonian</option>
												  <option value="FJ">Fiji</option>
												  <option value="FI">Finnish</option>
												  <option value="FR">French</option>
												  <option value="KA">Georgian</option>
												  <option value="DE">German</option>
												  <option value="EL">Greek</option>
												  <option value="GU">Gujarati</option>
												  <option value="HE">Hebrew</option>
												  <option value="HI">Hindi</option>
												  <option value="HU">Hungarian</option>
												  <option value="IS">Icelandic</option>
												  <option value="ID">Indonesian</option>
												  <option value="GA">Irish</option>
												  <option value="IT">Italian</option>
												  <option value="JA">Japanese</option>
												  <option value="JW">Javanese</option>
												  <option value="KO">Korean</option>
												  <option value="LA">Latin</option>
												  <option value="LV">Latvian</option>
												  <option value="LT">Lithuanian</option>
												  <option value="MK">Macedonian</option>
												  <option value="MS">Malay</option>
												  <option value="ML">Malayalam</option>
												  <option value="MT">Maltese</option>
												  <option value="MI">Maori</option>
												  <option value="MR">Marathi</option>
												  <option value="MN">Mongolian</option>
												  <option value="NE">Nepali</option>
												  <option value="NO">Norwegian</option>
												  <option value="FA">Persian</option>
												  <option value="PL">Polish</option>
												  <option value="PT">Portuguese</option>
												  <option value="PA">Punjabi</option>
												  <option value="QU">Quechua</option>
												  <option value="RO">Romanian</option>
												  <option value="RU">Russian</option>
												  <option value="SM">Samoan</option>
												  <option value="SR">Serbian</option>
												  <option value="SK">Slovak</option>
												  <option value="SL">Slovenian</option>
												  <option value="ES">Spanish</option>
												  <option value="SW">Swahili</option>
												  <option value="SV">Swedish </option>
												  <option value="TA">Tamil</option>
												  <option value="TT">Tatar</option>
												  <option value="TE">Telugu</option>
												  <option value="TH">Thai</option>
												  <option value="BO">Tibetan</option>
												  <option value="TO">Tonga</option>
												  <option value="TR">Turkish</option>
												  <option value="UK">Ukrainian</option>
												  <option value="UR">Urdu</option>
												  <option value="UZ">Uzbek</option>
												  <option value="VI">Vietnamese</option>
												  <option value="CY">Welsh</option>
												  <option value="XH">Xhosa</option>
												</select>

											</div>
										
											<div class="col-sm-2">
												<h6 class="mb-0">Preferred working hours</h6>
											</div>
											<div class="col-sm-4 text-secondary">
												<select class="form-control">
												<option value="">-- select one --</option>
												<option value="9 a.m. - 1 p.m">9 a.m. -1 p.m </option>
												<option value="1 p.m. - 5 p.m">1 p.m. - 5 p.m </option>
												<option value="5 p.m. - 9 p.m">5 p.m. - 9 p.m </option>
												<option value="9 p.m. - 1 a.m">9 p.m. - 1 a.m </option>
												<option value="Anytime">Anytime </option>
												</select>
											</div>
										</div>


										<div class="row mb-3">
											<div class="col-sm-2">
												<h6 class="mb-0">Educational Qualification</h6>
											</div>
											<div class="col-sm-4 text-secondary">
												<select class="form-control">
												<option value="">-- select one --</option>
												<option value="High School">High School</option>
												<option value="Graduation">Graduation</option>
												<option value="Post Graduation">Post Graduation</option>
												<option value="Doctorate">Doctorate</option>
												<option value="Others">Others</option>
												</select>
											</div>
										
											<div class="col-sm-2">
												<h6 class="mb-0">Experience </h6>
											</div>
											<div class="col-sm-4 text-secondary">
												<select class="form-control">
												<option value="0 - 2 Years"> 0 - 2 Years</option>
												<option value="2 - 5 Years"> 2 - 5 Years</option>
												<option value="5 - 10 Years"> 5 - 10 Years</option>
												<option value="10 Years and above"> 10 Years and above </option>
												</select>
											</div>
										</div>

										<div class="row mb-3">
											<div class="col-sm-2">
												<h6 class="mb-0">Notice of Advance booking</h6>
											</div>
											<div class="col-sm-4 text-secondary">
												<select class="form-control">
												<option value="4 - 12 hrs">4 - 12 hrs</option>
												<option value="12 - 24 hrs">12 - 24 hrs </option>
												<option value="1 Days">1 Days </option>
												<option value="2 Days">2 Days </option>
												<option value="3 Days">3 Days </option>
												<option value="4 Days">4 Days </option>
												<option value="5 Days">5 Days </option>
												</select>
											</div>
										
											<div class="col-sm-2">
												<h6 class="mb-0">Are you working in temple? </h6>
											</div>
											<div class="col-sm-4 text-secondary">
												<select class="form-control">
												<option value="">--Select One--</option>
												<option value="Yes">Yes</option>
												<option value="No">No</option>
												</select>
											</div>
										</div>


										<div class="row mb-3 ">
											<div class="col-sm-2">
												<h6 class="mb-0">Puja's you can perform?</h6>
											</div>
											<div class="col-sm-10 text-secondary">
												<div class="form-group">
												  <select multiple class="form-select form-control select_main_puja" id="sel1" style="height:70px !important;">
												    <option>1</option>
												    <option>2</option>
												    <option>3</option>
												    <option>4</option>
												  </select>
												</div>
											</div>
										</div>

										<div class="row mb-3">
											<div class="col-sm-2">
												<h6 class="mb-0">Any other details</h6>
											</div>
											<div class="col-sm-10 text-secondary">
												<textarea class="form-control" rows="5" id="comment" name="text" placeholder="Any other details"></textarea>
											</div>
										</div>

									</div>
								</div>
								</form>
								
							</div>
						</div>
					</div>
				</div>

@endsection