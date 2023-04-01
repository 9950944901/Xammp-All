@extends('layouts.app')
@section('contant')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style> 
   select.form-control.select_main_langugage {
    height: 70px !important;
}

.select_main_puja option{
  color: #fff !important;
}

.select_main_langugage{
  color: #fff !important;
}

#main {
    background-image: url(../frontend_asset/assets/img/bg-ewd-pattern.png);
    background-size: 100% 100%;
    background-attachment: fixed;
}

.contact .php-email-form {
    width: 100%;
    padding: 30px;
    padding-top: 0;
    background: none !important;
}

.contact .container {
    background: rgb(231 128 23) !important;
}

.pitarkriya_main .form-check {
    display: flex;
    align-items: center;
}

.pitarkriya_main .form-check input {
    margin-right: 10px;
    height: 29px;
}
.contact .php-email-form input {
    padding: 10px 15px;
    height: 44px;
}


.contact .php-email-form .form-group {
    padding-bottom: 1px;
}

.text-center {
    padding: 8px;
    text-align: center!important;
}

.contact form p {
    margin-bottom: 0px;
}

.contact .row {
    margin-top: 9px;
}

.form_input_main {
    padding-bottom: 0px !important;
}
.form_group_titlename .row {
    margin-top: 0px !important;
}


.form_otp_main label {
    color: #000 !important;
}

.form_otp_main input.form-control {
    border: solid 1px #898282 !important;
}


.form_otp_main input#otp::-webkit-input-placeholder{
    color:#000 !important;
}

           .Allcheckbox {
    height: 82px !important;
    overflow: auto;
   
}


.Allcheckbox {
    color: #000 !important;
}


.Allcheckbox input[type="checkbox"] {
    margin-right: 8px;
}

.Allcheckbox {
    height: 82px !important;
    overflow: auto;
    width: 100%;
    background: #fff !important;
    padding: 9px 13px;
}

.Allcheckbox {
    height: 109px !important;
    overflow: auto;
    width: 100%;
    background: #fff !important;
    padding: 9px 13px;
    border-radius: 8px;
}


button#submit {
    width: 183px;
    background-color: #de862e;
}

span.star_span {
    font-size: 13px;
    font-weight: 700;
}

span.text-danger.star_span {
    color: #f00 !important;
}
 </style>
 
 
  
          <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
          <!-- Default theme -->
          <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
        
            <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
            
            
     
        
    
  <main id="main">
                 <section id="contact" class="contact">
                <div class="container">
                    <h2 class="text-white text-center">Register Form</h2>
                  
                <form  method="POST" id="formdiv"  enctype="multipart/form-data" role="form" action="{{url('submitForm')}}" >
                @csrf
               <div class="row">
                <div class="col-md-6 form-group form_group_titlename">
                   <div class="row">
                 <div class="col-sm-3"> 
                        <label for="comment">Title:  <span class="text-danger star_span">*</span></label>
                        <select class="form-control form-select" name="title" id="title" >
                        <option value="">---Select Title---</option>
                        <option>Pandit</option>
                        <option value="Acharya">Acharya</option>
                        <option value="Shashtri">Shashtri </option>
                        <option value="Others">Others</option>
                        </select>
                        </div>
                        <div class="col-sm-9">
                        <label for="comment">First Name:  <span class="text-danger star_span">*</span></label>
                <input type="text" class="form-control"  id="fname" placeholder="Your First Name" name="fname" >
                </div>
                         </div>
                  </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label for="comment">Last Name:  <span class="text-danger star_span">*</span></label>
                        <input type="text" class="form-control"  id="lname" placeholder="Your Last Name"  name="lname" >
                        </div>
                        </div>
                            <div class="row">
                        
                        
                        
                           <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label for="comment">Email: <span class="text-danger star_span">*</span></label>
                        <input type="email" class="form-control" id="email" placeholder="Email" name="email"/ >
              </div>
                       
               
                 <div class="col-md-6 form-group mt-3 mt-md-0">
                   <label for="comment">Mobile: <span class="text-danger star_span">*</span></label>
                 <input type="number" class="form-control" placeholder="Mobile" name="mobile" id="mobile" />
                </div>
                </div>
                             <div class="row">
                  <div class="col-md-6 form-group">
                        <label for="comment">Language: <span class="text-danger star_span">*</span></label>
                        <select class="form-select form-control" name="language" id="language" >
                                <option value="">--Select Language type--</option>
                                  <option value="Hindi">Hindi</option>
                                <option value="English">English</option>
                                  <option value="Gujarati">Gujarati</option>
                                  <option value="BN">Bengali</option>
                                  <option value="Mrathi">Mrathi</option>
                                  <option value="Hryanvi">Hryanvi</option>
                                  <option value="Assamese">Assamese</option>
                                  <option value="Bodo">Bodo</option>
                                  <option value="Dogri">Dogri</option>
                                  <option value="Kannada">Kannada</option>
                                  <option value="Kashmiri">Kashmiri</option>
                                  <option value="Konkani">Konkani</option>
                                  <option value="Maithili">Maithili</option>
                                  <option value="Malayalam">Malayalam</option>
                                  <option value="Meitei">Meitei</option>
                                  <option value="Nepali">Nepali</option>
                                  <option value="Odia">Odia</option>
                                  <option value="punjabi">Punjabi </option>
                                  <option value="Sanskrit">Sanskrit</option>
                                  <option value="Sindhi">Sindhi</option>
                                  <option value="Santali">Santali</option>
                                  <option value="Tamil">Tamil</option>
                                  <option value="Telugu">Telugu</option>
                             </select>
                            </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label for="comment">Community: <span class="text-danger star_span">*</span></label>
                             <select class="form-select form-control" name="community" id="community">
                            <option value="">---Select Community---</option>
                             <option value="North Indian">North Indian</option>
                              <option value="Bengali">Bengali</option>
                             <option value="Assamese">Assamese</option>
                            <option value="Telugu">Telugu</option>
                        <option value="Tamil">Tamil</option>
                    <option value="Oriya"> Oriya</option>
                  <option value="Others">Others</option>
                </select>
                </div>
                         </div>
                     <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="comment">Preferred Location For Puja: <span class="text-danger star_span">*</span></label>
                        <select class="form-select form-control" name="pujalocation" id="pujalocation" >
                        <option value="">---Select Location Puja---</option>
                        <option> Within 10km</option>
                        <option> Within City</option>
                        <option> Out of City</option>
                        <option> Both</option>
                </select>
                       
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label for="comment">Experience (Years): <span class="text-danger star_span">*</span></label>
                        <select class="form-select form-control" name="experience" id="experience" >
                <option value="">---Select Experience---</option>
                <option value="0 - 2 Years"> 0 - 2 Years</option>
              <option value="2 - 5 Years"> 2 - 5 Years</option>
              <option value="5 - 10 Years"> 5 - 10 Years</option>
                <option value="10 Years and above"> 10 Years and above </option>
                   </select>
                  </div>
                        </div>
                            <div class="row">
                        <div class="col-md-6 form-group">
                        <div class="row">
                        <div class="col-md-4">
                        <label for="comment">DOB: <span class="text-danger star_span">*</span></label>
                        <input type="date" class="form-control"  id="dob" placeholder="Date/time" name="dob" >
                        </div>
                        <div class="col-md-4">
                        <label for="comment">Place: <span class="text-danger star_span">*</span></label>
                        <input type="text" class="form-control"  id="place" placeholder="Place" name="place" >
                        </div>
                        <div class="col-md-4">
                        <label for="comment">Time: <span class="text-danger star_span">*</span></label>
                        <input type="time" class="form-control"  id="time" name="time" >
                        </div>
                        </div>
                        
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label for="comment">Educational Qualification: <span class="text-danger star_span">*</span></label>
                        <select class="form-select form-control" name="education" id="education">
                        <option value="">-- select one --</option>
                        <option value="High School">High School</option>
                        <option value="Graduation">Graduation</option>
                        <option value="Post Graduation">Post Graduation</option>
                        <option value="Doctorate">Doctorate</option>
                        <option value="Others">Others</option>
                        </select>
                        </div>
                        </div>
                            <div class="row">
                        <div class="col-md-6 form-group">
                        <label for="comment">Country: <span class="text-danger star_span">*</span></label>
                        <select class="form-control form-select" id="country" name="country" >
                        <option value="">---Select Contry---</option>
                        <option>India</option>
                        <option>Aland Islands</option>
                        <option>Albania</option>
                        <option>Algeria</option>
                        <option>American Samoa</option>
                        <option>Andorra</option>
                        <option>Angola</option>
                        <option>Anguilla</option>
                        <option>Antarctica</option>
                        <option>Antigua and Barbuda</option>
                        <option>Argentina</option>
                        <option>Armenia</option>
                        <option>Aruba</option>
                        <option>Australia</option>
                        <option>Austria</option>
                        <option>Azerbaijan</option>
                        <option>Bahamas</option>
                        <option>Bahrain</option>
                        <option>Bangladesh</option>
                        <option>Barbados</option>
                        <option>Belarus</option>
                        <option>Belgium</option>
                        <option>Belize</option>
                        <option>Benin</option>
                        <option>Bermuda</option>
                        <option>Bhutan</option>
                        <option>Bolivia</option>
                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                        <option>Bosnia and Herzegovina</option>
                        <option>Botswana</option>
                        <option>Bouvet Island</option>
                        <option>Brazil</option>
                        <option>British Indian Ocean Territory</option>
                        <option>Brunei Darussalam</option>
                        <option>Bulgaria</option>
                        <option>Burkina Faso</option>
                        <option>Burundi</option>
                        <option>Cambodia</option>
                        <option>Cameroon</option>
                        <option>Canada</option>
                        <option>Cape Verde</option>
                        <option>Cayman Islands</option>
                        <option>Central African Republic</option>
                        <option>Chad</option>
                        <option>Chile</option>
                        <option>China</option>
                        <option>Christmas Island</option>
                        <option>Cocos (Keeling) Islands</option>
                        <option>Colombia</option>
                        <option>Comoros</option>
                        <option>Congo</option>
                        <option>Congo, Democratic Republic of the Congo</option>
                        <option>Cook Islands</option>
                        <option>Costa Rica</option>
                        <option>Cote D'Ivoire</option>
                        <option>Croatia</option>
                        <option>Cuba</option>
                        <option>Curacao</option>
                        <option>Cyprus</option>
                        <option>Czech Republic</option>
                        <option>Denmark</option>
                        <option>Djibouti</option>
                        <option>Dominica</option>
                        <option>Dominican Republic</option>
                        <option>Ecuador</option>
                        <option>Egypt</option>
                        <option>El Salvador</option>
                        <option>Equatorial Guinea</option>
                        <option>Eritrea</option>
                        <option>Estonia</option>
                        <option>Ethiopia</option>
                        <option>Falkland Islands (Malvinas)</option>
                        <option>Faroe Islands</option>
                        <option>Fiji</option>
                        <option>Finland</option>
                        <option>France</option>
                        <option>French Guiana</option>
                        <option>French Polynesia</option>
                        <option>French Southern Territories</option>
                        <option>Gabon</option>
                        <option>Gambia</option>
                        <option>Georgia</option>
                        <option>Germany</option>
                        <option>Ghana</option>
                        <option>Gibraltar</option>
                        <option>Greece</option>
                        <option>Greenland</option>
                        <option>Grenada</option>
                        <option>Guadeloupe</option>
                        <option>Guam</option>
                        <option>Guatemala</option>
                        <option>Guernsey</option>
                        <option>Guinea</option>
                        <option>Guinea-Bissau</option>
                        <option>Guyana</option>
                        <option>Haiti</option>
                        <option>Heard Island and Mcdonald Islands</option>
                        <option>Holy See (Vatican City State)</option>
                        <option>Honduras</option>
                        <option>Hong Kong</option>
                        <option>Hungary</option>
                        <option>Iceland</option>
                        <option>India</option>
                        <option>Indonesia</option>
                        <option>Iran, Islamic Republic of</option>
                        <option>Iraq</option>
                        <option>Ireland</option>
                        <option>Isle of Man</option>
                        <option>Israel</option>
                        <option>Italy</option>
                        <option>Jamaica</option>
                        <option>Japan</option>
                        <option>Jersey</option>
                        <option>Jordan</option>
                        <option>Kazakhstan</option>
                        <option>Kenya</option>
                        <option>Kiribati</option>
                        <option>Korea, Democratic People's Republic of</option>
                        <option>Korea, Republic of</option>
                        <option>Kosovo</option>
                        <option>Kuwait</option>
                        <option>Kyrgyzstan</option>
                        <option>Lao People's Democratic Republic</option>
                        <option>Latvia</option>
                        <option>Lebanon</option>
                        <option>Lesotho</option>
                        <option>Liberia</option>
                        <option>Libyan Arab Jamahiriya</option>
                        <option>Liechtenstein</option>
                        <option>Lithuania</option>
                        <option>Luxembourg</option>
                        <option>Macao</option>
                        <option>Macedonia, the Former Yugoslav Republic of</option>
                        <option>Madagascar</option>
                        <option>Malawi</option>
                        <option>Malaysia</option>
                        <option>Maldives</option>
                        <option>Mali</option>
                        <option>Malta</option>
                        <option>Marshall Islands</option>
                        <option>Martinique</option>
                        <option>Mauritania</option>
                        <option>Mauritius</option>
                        <option>Mayotte</option>
                        <option>Mexico</option>
                        <option>Micronesia, Federated States of</option>
                        <option>Moldova, Republic of</option>
                        <option>Monaco</option>
                        <option>Mongolia</option>
                        <option>Montenegro</option>
                        <option>Montserrat</option>
                        <option>Morocco</option>
                        <option>Mozambique</option>
                        <option>Myanmar</option>
                        <option>Namibia</option>
                        <option>Nauru</option>
                        <option>Nepal</option>
                        <option>Netherlands</option>
                        <option>Netherlands Antilles</option>
                        <option>New Caledonia</option>
                        <option>New Zealand</option>
                        <option>Nicaragua</option>
                        <option>Niger</option>
                        <option>Nigeria</option>
                        <option>Niue</option>
                        <option>Norfolk Island</option>
                        <option>Northern Mariana Islands</option>
                        <option>Norway</option>
                        <option>Oman</option>
                        <option>Pakistan</option>
                        <option>Palau</option>
                        <option>Palestinian Territory, Occupied</option>
                        <option>Panama</option>
                        <option>Papua New Guinea</option>
                        <option>Paraguay</option>
                        <option>Peru</option>
                        <option>Philippines</option>
                        <option>Pitcairn</option>
                        <option>Poland</option>
                        <option>Portugal</option>
                        <option>Puerto Rico</option>
                        <option>Qatar</option>
                        <option>Reunion</option>
                        <option>Romania</option>
                        <option>Russian Federation</option>
                        <option>Rwanda</option>
                        <option>Saint Barthelemy</option>
                        <option>Saint Helena</option>
                        <option>Saint Kitts and Nevis</option>
                        <option>Saint Lucia</option>
                        <option>Saint Martin</option>
                        <option>Saint Pierre and Miquelon</option>
                        <option>Saint Vincent and the Grenadines</option>
                        <option>Samoa</option>
                        <option>San Marino</option>
                        <option>Sao Tome and Principe</option>
                        <option>Saudi Arabia</option>
                        <option>Senegal</option>
                        <option>Serbia</option>
                        <option>Serbia and Montenegro</option>
                        <option>Seychelles</option>
                        <option>Sierra Leone</option>
                        <option>Singapore</option>
                        <option>Sint Maarten</option>
                        <option>Slovakia</option>
                        <option>Slovenia</option>
                        <option>Solomon Islands</option>
                        <option>Somalia</option>
                        <option>South Africa</option>
                        <option>South Georgia and the South Sandwich Islands</option>
                        <option>South Sudan</option>
                        <option>Spain</option>
                        <option>Sri Lanka</option>
                        <option>Sudan</option>
                        <option>Suriname</option>
                        <option>Svalbard and Jan Mayen</option>
                        <option>Swaziland</option>
                    <option>Sweden</option>
                <option>Switzerland</option>
                <option>Syrian Arab Republic</option>
                         <option>Taiwan, Province of China</option>
                 <option>Tajikistan</option>
                        <option>Tanzania, United Republic of</option>
                        <option>Thailand</option>
                        <option>Timor-Leste</option>
                        <option>Togo</option>
                        <option>Tokelau</option>
                        <option>Tonga</option>
                        <option>Trinidad and Tobago</option>
                        <option>Tunisia</option>
                        <option>Turkey</option>
                        <option>Turkmenistan</option>
                        <option>Turks and Caicos Islands</option>
                        <option>Tuvalu</option>
                        <option>Uganda</option>
                        <option>Ukraine</option>
                        <option>United Arab Emirates</option>
                        <option>United Kingdom</option>
                        <option>United States</option>
                        <option>United States Minor Outlying Islands</option>
                        <option>Uruguay</option>
                        <option>Uzbekistan</option>
                        <option>Vanuatu</option>
                        <option>Venezuela</option>
                        <option>Viet Nam</option>
                        <option>Virgin Islands, British</option>
                        <option>Virgin Islands, U.s.</option>
                        <option>Wallis and Futuna</option>
                        <option>Western Sahara</option>
                        <option>Yemen</option>
                        <option>Zambia</option>
                        <option>Zimbabwe</option>
                        </select>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label for="comment">State: <span class="text-danger star_span">*</span></label>
                        <select class="form-control form-select" id="state" name="state">
                        <option value="">---Select State---</option>
                        <option value="Rajasthan">Rajasthan</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
              <optio
              
 
                <option value="Bihar">Bihar</option>
                   <option value="Chandigarh">Chandigarh</option>
                  <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                         <option value="Delhi">Delhi</option>
 <option value="Lakshadweep">Lakshadweep</option>
                 <option value="Puducherry">Puducherry</option>
                <option value="Goa">Goa</option>
              <optio
              n value="Gujarat">Gujarat</option>
               ion value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                   <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                 <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                         <option value="Madhya Pradesh">Madhya Pradesh</option>
                  <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
              <optio
              n value="Meghalaya">Meghalaya</option>
              ion value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                   <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                      <option value="Sikkim">Sikkim</option>
                       <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                 <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
                </select>
                        </div>
                  </div>
                    <div class="row">
              <div class="col-md-6 form-group">
              <label for="comment">City: <span class="text-danger star_span">*</span></label>
                <input type="text" class="form-control" id="city" name="city" placeholder="City" >
                   </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="comment">Village/Tehsil/Town: <span class="text-danger star_span">*</span></label>
                
                <input type="text" class="form-control" name="village" id="village" placeholder="Village/Tehsil/Town" >
                 </div>
                   </div>
                        <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="comment">Home Address: <span class="text-danger star_span">*</span></label>
                             <textarea class="form-control" name="address" id="address" rows="1" placeholder="Home Address" ></textarea>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label for="comment">Pincode: <span class="text-danger star_span">*</span></label>
                        <input type="number" class="form-control" name="pincode" id="pincode" placeholder="Your Pincode" >
                        </div>
                        </div>
                <div class="row">
                          <div class="col-md-6 form-group mt-3 mt-md-0">
                        <label for="comment">Upload Image: <span class="text-danger star_span">*</span></label>
                <input type="file" name="img" row="4" id="img" class="form-control" required>
              </div>
             
              
                <div class="col-md-6 form-group mt-3 mt-md-0">
                <label for="comment">Referral Code (Optional):</label>
                   <input type="text" class="form-control" name="referalcode" id="referalcode" placeholder="Referral Code" >
                </div>
                </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                  <label for="comment">Brief About Yourself: <span class="text-danger star_span">*</span></label>
                <textarea class="form-control" rows="4" id="des"  name="des" placeholder="(150 Words)" ></textarea>
              </div>
              
              
              
             <div class="col-md-6 form-group">
             <label for="comment">Expertise: <span class="text-danger star_span">*</span></label>
            <!-- <select class="form-select form-control" name="" id="" multiple >-->
            <!--     <option value="">Astrology</option>-->
            <!--     <option value="">Vedic</option>-->
            <!--     <option value="">Vastu</option>-->
            <!--     <option value="">Tarot Card</option>-->
            <!--     <option value="">Palmistry</option>-->
            <!--    <option value="">Lal Kitab</option>-->
            <!--    <option value="">Signature Expert</option>-->
            <!--    <option value="">Fengsui</option>-->
            <!--    <option value="">Dev Puja</option>-->
            <!--    <option value="">Pitra Kriya</option>-->
            <!--    <option value="">Katha Vachak</option>-->
            <!--</select>-->
           
             <div class="Allcheckbox">
                    <!--<input type="button" onclick='selects()' value="Select All"/>  -->
                    <!--<input type="button" onclick='deSelect()' value="Deselect All"/>  -->
                <input type="checkbox" name="chka" value="1">Astrology<br>  
                <input type="checkbox" name="chkb" value="2">Vedic<br>  
                <input type="checkbox" name="chkc" value="3">Vastu<br>  
                <input type="checkbox" name="chkd" value="4">Tarot Card<br>
                <input type="checkbox" name="chke" value="5">Palmistry<br>  
                <input type="checkbox" name="chkf" value="6">Lal Kitab<br>  
                <input type="checkbox" name="chkj" value="7">Signature Expert<br>  
                <input type="checkbox" name="chkk" value="8">Fengsui<br>  
                <input type="checkbox" name="chkl" value="9">Dev Puja<br>  
                <input type="checkbox" name="chkm" value="10">Pitra Kriya<br>  
                <input type="checkbox" name="chkn" value="11">Katha Vachak<br> 
                
                 <br>
                 
                </div>
            </div>
            
            </div>
             
                <div class="text-center">
                    
                    <input type="submit" class="btn btn-primary" name="submit"   value="Submit"> 
                
                    <!--<input type="submit" class="btn btn-primary" name="submit"   value="Submit"> -->
                
                </div>
                
               </form>
               
                </div>
            </section>
       </main>
       
                   <form method="post" class="form_otp_main mt-0 pt-0" id="loginForm" action="submitOtp">
            @csrf
            
                <div class="form-group px-3">
                    <div class=" d-flex justify-content-center">
                  <label class="mb-2" for="emotpail text-dark">Enter OTP</label>
                  </div>
                  <input type="otp" class="form-control" id="otp" placeholder="Enter OTP" name="otp">
                </div>
                
                <div class="form-group">
                     <div class=" d-flex justify-content-center">
                  <button  class="btn btn-primary mt-3" id="submit" name="submit" type="submit">Submit</button>
                </div>
                </div>
                        <!--<button class="btn btn-success" type="submit">Resend OTP</button>-->
          </form>  











  <script type="text/javascript">
            function selects(){
                var ele=document.getElementsByName('chk');
                for(var i=0; i<ele.length; i++){
                    if(ele[i].type=='checkbox')
                        ele[i].checked=true;
                }
            }
            function deSelect(){
                var ele=document.getElementsByName('chk');
                for(var i=0; i<ele.length; i++){
                    if(ele[i].type=='checkbox')
                        ele[i].checked=false;
                }
            }
        </script>
    
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

         <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script type="text/javascript">
  @if(session('otpsweet'))
      // alertify.set('notifier','position', 'top-center');
      // alertify.success("{{session('status_successasa')}}");
      alertify.genericDialog || alertify.dialog('genericDialog',function(){
    return {
        main:function(content){
            this.setContent(content);
        },
        setup:function(){
            return {
                focus:{
                    element:function(){
                        return this.elements.body.querySelector(this.get('selector'));
                    },
                    select:true
                },
                options:{
                    basic:true,
                    maximizable:false,
                    resizable:false,
                    padding:false
                }
            };
        },
        settings:{
            selector:undefined
        }
    };
});
//force focusing password box
alertify.genericDialog ($('#loginForm')[0]).set('selector', 'input[type="otp"]');
  @endif
    </script>






<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
@if ($message = Session::get('otpsweetasas'))
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
            title: '<h6>Login SuccessFull</h6>'
          })
</script>
@endif

        
 @endsection