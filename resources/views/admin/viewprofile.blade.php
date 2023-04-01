  <html>
    <head>
        <title></title>
    </head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<style>
    
    body{margin-top:20px;
background:#eee;
}
.img_teb_term{
        height: 213px;
    padding: 7px 19px;
    border-radius: 27px 21px 50px 5px !important;
}
.single_advisor_profile {
    position: relative;
    margin-bottom: 50px;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    z-index: 1;
    border-radius: 15px;
    -webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
    box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
}
.single_advisor_profile .advisor_thumb {
    position: relative;
    z-index: 1;
    border-radius: 15px 15px 0 0;
    margin: 0 auto;
    padding: 30px 30px 0 30px;
    background-color: #3f43fd;
    overflow: hidden;
}
.single_advisor_profile .advisor_thumb::after {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    position: absolute;
    width: 150%;
    height: 80px;
    bottom: -45px;
    left: -25%;
    content: "";
    background-color: #ffffff;
    -webkit-transform: rotate(-15deg);
    transform: rotate(-15deg);
}
@media only screen and (max-width: 575px) {
    .single_advisor_profile .advisor_thumb::after {
        height: 160px;
        bottom: -90px;
    }
}
.single_advisor_profile .advisor_thumb .social-info {
    position: absolute;
    z-index: 1;
    width: 100%;
    bottom: 0;
    right: 30px;
    text-align: right;
}
.single_advisor_profile .advisor_thumb .social-info a {
    font-size: 14px;
    color: #020710;
    padding: 0 5px;
}
.single_advisor_profile .advisor_thumb .social-info a:hover,
.single_advisor_profile .advisor_thumb .social-info a:focus {
    color: #3f43fd;
}
.single_advisor_profile .advisor_thumb .social-info a:last-child {
    padding-right: 0;
}
.single_advisor_profile .single_advisor_details_info {
    position: relative;
    z-index: 1;
    padding: 30px;
    text-align: right;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    border-radius: 0 0 15px 15px;
    background-color: #ffffff;
}
.single_advisor_profile .single_advisor_details_info::after {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    position: absolute;
    z-index: 1;
    width: 50px;
    height: 3px;
    background-color: #3f43fd;
    content: "";
    top: 12px;
    right: 30px;
}
.single_advisor_profile .single_advisor_details_info h6 {
    margin-bottom: 0.25rem;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single_advisor_profile .single_advisor_details_info h6 {
        font-size: 14px;
    }
}
.single_advisor_profile .single_advisor_details_info p {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    margin-bottom: 0;
    font-size: 14px;
}
@media only screen and (min-width: 768px) and (max-width: 991px) {
    .single_advisor_profile .single_advisor_details_info p {
        font-size: 12px;
    }
}
.single_advisor_profile:hover .advisor_thumb::after,
.single_advisor_profile:focus .advisor_thumb::after {
    background-color: #070a57;
}
.single_advisor_profile:hover .advisor_thumb .social-info a,
.single_advisor_profile:focus .advisor_thumb .social-info a {
    color: #ffffff;
}
.single_advisor_profile:hover .advisor_thumb .social-info a:hover,
.single_advisor_profile:hover .advisor_thumb .social-info a:focus,
.single_advisor_profile:focus .advisor_thumb .social-info a:hover,
.single_advisor_profile:focus .advisor_thumb .social-info a:focus {
    color: #ffffff;
}
.single_advisor_profile:hover .single_advisor_details_info,
.single_advisor_profile:focus .single_advisor_details_info {
    background-color: #070a57;
}
.single_advisor_profile:hover .single_advisor_details_info::after,
.single_advisor_profile:focus .single_advisor_details_info::after {
    background-color: #ffffff;
}
.single_advisor_profile:hover .single_advisor_details_info h6,
.single_advisor_profile:focus .single_advisor_details_info h6 {
    color: #ffffff;
}
.single_advisor_profile:hover .single_advisor_details_info p,
.single_advisor_profile:focus .single_advisor_details_info p {
    color: #ffffff;
}
</style>
    <body>
  
  <div class="container-fluid">
 


   
 <div class="row">
	<div class="col-lg-12">
          <div class="card">

          <div class="row">
          <div class="col-md-12"> <h5 class="card-header text-uppercase"> Learns Details </h5></div>

          </div>
		 
         
            <div class="card-body">
              
			<div class="table-responsive">
	          <table class="table table-bordered">
            <thead>
                       
               <tr>
                <th>TITLE </th>
                <td>{{$views->title}}</td>
              </tr>

                <tr>
                <th>FIRST NAME </th>
                <td>{{$views->fname}}</td>
              </tr>

                <tr>
                <th>LAST NAME </th>
                <td>{{$views->lname}}</td>
              </tr>
              
<tr>
                <th>E-MAIL </th>
                <td>{{$views->email}}</td>
              </tr>

<tr>
                <th>MOBILE NO. </th>
                <td>{{$views->mobile}}</td>
              </tr>
              <tr>
                <th>LANGUAGE</th>
                <td>{{$views->language}}</td>
              </tr>

<tr>
                <th>COMMUNITY</th>
                <td>{{$views->community}}</td>
              </tr>
  
               <tr>
                <th>PUJA LOCATION</th>
                <td>{{$views->pujalocation}}</td>
              </tr>
<tr>
                <th>EXPERIENCE</th>
                <td>{{$views->experience}}</td>
              </tr>

<!--<tr>-->
<!--                <th>PUJAA</th>-->
<!--                <td>{{$views->puja}}</td>-->
<!--              </tr>-->

  <tr>
                <th>DATE OF BIRTH</th>
                <td>{{$views->dob}}</td>
              </tr>

<tr>
                <th>PLACE</th>
                <td>{{$views->place}}</td>
              </tr>

  <tr>
                <th>TIME</th>
                <td>{{$views->time}}</td>
              </tr>


              <tr>
                <th>EDUCATION </th>
                <td>{{$views->education}}</td>
              </tr>




<tr>
                <th>COUNTRY </th>
                <td>{{$views->country}}</td>
              </tr>

<tr>
                <th>STATE </th>
                <td>{{$views->state}}</td>
              </tr>
<tr>
                <th>CITY </th>
                <td>{{$views->city}}</td>
              </tr>
               <tr>
                <th>VILLAGE</th>
                <td>{{$views->village}}</td>
              </tr>
              
               <tr>
                <th>ADDRESS</th>
                <td>{{$views->address}}</td>
              </tr>
            
            <tr>
                
              
               
              
                <th>PINCODE </th>
                <td>{{$views->pincode}}</td>
              </tr>

            

<!--<tr>-->
<!--                <th>FIND US </th>-->
<!--                <td>{{$views->findus}}</td>-->
<!--              </tr>-->


            
              
              <!--<tr>-->
              <!--  <th>EXPERTISE</th>-->
              <!--  <td>{{$views->expertise}}</td>-->
              <!--</tr>-->
              
              
             
              
  <!--<tr>-->
  <!--              <th>REFERCODE</th>-->
  <!--              <td>{{$views->referalcode}}</td>-->
  <!--            </tr>-->
              
              
                <tr>
                <th>REFERRAL CODE</th>
                <td>{{$views->referalcode}}</td>
              </tr>
                <tr>
                <th>DESCRIPTION</th>
                <td>{{$views->des}}</td>
              </tr>
              <!--  <tr>-->
                <th>EXPERTISE</th>
                
                <!--<td>{{$views->chk}}</td>-->
                <td>
                    
          <!--&nbsp;&nbsp; <input type="checkbox" name="chka" {{ $views->chka == "Astrology" ? 'checked' : '0'; }} value="Astrology"/> Astrology-->
    
          <!--&nbsp;&nbsp; <input type="checkbox" name="chkb" {{ $views->chkb == "Vedic" ? 'checked' : '0'; }} value="Vedic"/> Vedic-->
          <!--&nbsp;&nbsp; <input type="checkbox" name="chkc" {{ $views->chkc == "Vastu" ? 'checked' : '0'; }} value="Vastu"/> Vastu-->
          <!--&nbsp;&nbsp; <input type="checkbox" name="chkd" {{ $views->chkd == "TarotCard" ? 'checked' : '0'; }} value="TarotCard"/> Tarot Card-->
          <!--   <br><br>-->
          <!--&nbsp;&nbsp; <input type="checkbox" name="chke" {{ $views->chke == "Palmistry" ? 'checked' : '0'; }} value="Palmistry"/> Palmistry-->
          <!--&nbsp;&nbsp; <input type="checkbox" name="chkf" {{ $views->chkf == "LalKitab" ? 'checked' : '0'; }} value="LalKitab"/> Lal Kitab-->

          <!--&nbsp;&nbsp; <input type="checkbox" name="chkj" {{ $views->chkj == "Signature" ? 'checked' : '0'; }} value="Signature"/> Signature-->
          <!--&nbsp;&nbsp; <input type="checkbox" name="chkk" {{ $views->chkk == "Fengsui" ? 'checked' : '0'; }} value="Fengsui"/> Fengsui-->
          <!--     <br><br>-->
          <!--&nbsp;&nbsp; <input type="checkbox" name="chkl" {{ $views->chkl == "DevPuja" ? 'checked' : '0'; }} value="DevPuja"/> DevPuja-->
          <!--&nbsp;&nbsp; <input type="checkbox" name="chkm" {{ $views->chkm == "PitraKriya" ? 'checked' : '0'; }} value="PitraKriya"/> Pitra Kriya-->
          <!--&nbsp;&nbsp; <input type="checkbox" name="chkn" {{ $views->chkn == "KathaVachak" ? 'checked' : '0'; }} value="KathaVachak"/> Katha Vachak-->
          
                    @if($views->chka == 1)
                    Astrology ,
                    @else
                    
                    @endif
                                     
                    @if($views->chkb == 2)
                    Vedic ,
                    @else
                    
                    @endif
                                        
                                      
                    @if($views->chkc == 3)
                   Vastu ,
                    @else
                    
                    @endif
                                        
                                      
                    @if($views->chkd == 4)
                   Tarot Card ,
                    @else
                    
                    @endif
                                        
                                     
                    @if($views->chke == 5)
                  Palmistry ,
                    @else
                    
                    @endif
                                        
                                     
                    @if($views->chkf == 6)
                   Lal Kitab ,
                    @else
                    
                    @endif
                                        
                                
                    @if($views->chkj == 7)
                     Signature ,
                    @else
                    
                    @endif
                                        
                               
                    @if($views->chkk == 8)
                    Fengsui ,
                    @else
                    
                    @endif
                                        
                                   
                    @if($views->chkl == 9)
                  DevPuja ,
                    @else
                    
                    @endif
                                        
                                      
                    @if($views->chkm == 9)
                     Pitra Kriya ,
                    @else
                    
                    @endif
                                        
                               
                    @if($views->chkn == 9)
                    Katha Vachak
                    @else
                    
                    @endif
                                        
                    
                    
                    
                </td>
              </tr>
              <tr>
                <th>PROFILE IMAGE </th>
                <td>            
<!--<a href="{{ url('uploads/register'.$views->img) }}" data-fancybox="images" data-caption="This image has a caption">-->
<!--<img src="{{ url('uploads/register/'.$views->img) }}" alt="lightbox" class="lightbox-thumb img-thumbnail" style="width: 140px; height: 70px;">-->
<!--</a>-->
<img src="{{ url('uploads/register/'.$views->img) }}" alt="lightbox" class="lightbox-thumb img-thumbnail" style="width: 140px; height: 120px;">
</td>
              </tr>



             

    
			  
          </thead>
          </table>
        </div>


			</div>
            </div>
          </div>     
          </div>
          	</div>  
           </body>
</html> 