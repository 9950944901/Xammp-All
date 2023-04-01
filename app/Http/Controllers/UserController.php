<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Crypt;
use Hash;
class UserController extends Controller
{
  
      
    public function registration_process(Request $request)
    {
       $valid=Validator::make($request->all(),[
            "fname"=>'required',
            "lname"=>'required',
            "email"=>'required|email|unique:users,email',
            "password"=>'required',
            "type"=>'required',
            "cpassword"=>'required|same:password',

       ],[
           
          'fname.required'=>'The First name field is required.',
          'lname.required'=>'The Last name field is required.', 
          'email.required'=>'The Email field is required.', 
          'password.required'=>'The Password field is required.', 
          'type.required'=>'The Type field is required.', 
          'cpassword.required'=>'The Confirm password field is required.', 
         'cpassword.same'=>'The Confirm password and password must match.', 


           
           ]);

       if(!$valid->passes()){
            return response()->json(['status'=>'error','error'=>$valid->errors()->toArray()]);
       }else{
            $arr=[
                "fname"=>$request->fname,
               "lname"=>$request->lname,

                "email"=>$request->email,
                "password"=>Crypt::encrypt($request->password),
                "type"=>$request->type,
                "status"=>1,
                "created_at"=>date('Y-m-d h:i:s'),
                "updated_at"=>date('Y-m-d h:i:s')
            ];
            $query=DB::table('users')->insert($arr);
            if($query){
                
                // $request->session('Login')->flash('success', 'Registration successfully');

                return response()->json(['status'=>'success','msg'=>"Registration successfully"]);
            }

       }
    }
    
  
  public function login_process(Request $request)
{

$result=DB::table('users')  
->where(['email'=>$request->str_login_email])
->get(); 

if(isset($result[0])){
$db_pwd=Crypt::decrypt($result[0]->password);
if($db_pwd==$request->str_login_password){
$request->session()->put('FRONT_USER_LOGIN',true);
$request->session()->put('FRONT_USER_ID',$result[0]->id);
$request->session()->put('FRONT_USER_NAME',$result[0]->fname);
$request->session()->put('FRONT_USER_LNAME',$result[0]->lname);
$request->session()->put('FRONT_USER_TYPE',$result[0]->type);

$status="success";
$msg="";
}else{
$status="error";
$msg="Please enter valid password";
}
}else{
$status="error";
$msg="Please enter valid email id";
}
return response()->json(['status'=>$status,'msg'=>$msg]); 
//$request->password
}

  //-----------------------------------------------------------------------pandatji Registrations-------------------------------------//
  
//   function addRegister(request $req){

// $req->validate([
// 'fname'=>'required',
// ]);

// $register = NEW User;
// $register -> title=$req->title;
// $register -> fname=$req->fname;
// $register -> lname=$req->lname;
// $register -> email=$req->email;
// $register -> mobile=$req->mobile;
// $register -> language=$req->language;
// $register -> community=$req->community;
// $register -> puja=$req->puja;
// $register -> experience=$req->experience;
// $register -> dob=$req->dob;
// $register -> place=$req->place;
// $register -> time=$req->time;
// $register -> education=$req->education;
// $register -> country=$req->country;
// $register -> state=$req->state;
// $register -> city=$req->city;
// $register -> village=$req->village;
// $register -> address=$req->address;
// $register -> pincode=$req->pincode;
// $register -> pujalocation=$req->pujalocation;
// $register -> referalcode=$req->referalcode;

// $register -> des=$req->des;
// $register -> userid=$req->userid;
// $register -> password=$req->password;




// if ($req->hasFile('image')) {
// $image = $req->file('image');
// $Extension = $image->getClientOriginalExtension();
// $filename =time().'.'.$Extension;
// $destinationPath = public_path('uploads/category/');
// $imagePath = $destinationPath. "/".  $filename;
// $image->move($destinationPath, $filename);
// $register->image = $filename;
// }



// $register -> save();

// return redirect()->with('success','Register Successfully Submited');

// }
  
  
  public function registarions(Request $request){
$data=User::where('status',1)->get();

return view('admin/index',$data);
}
  
  public function generateOTP(){
        $otp = mt_rand(1000,9999);
        return $otp;
    }

  
  
  function submitForm(request $req){

// $req->validate([
// 'name'=>'required',
// 'email'=>'required',
// 'mobile'=>'required'
// ]);
        $otp = mt_rand(1000,9999);

// $data = new user;
$title = request('title');
$fname = request('fname');
$lname = request('lname');
$email = request('email');
$mobile = request('mobile');
$language = request('language');
$community = request('community');
$expertise = request('expertise');
$experience = request('experience');
$dob = request('dob');
$place = request('place');
$time = request('time');
$education = request('education');
$country = request('country');
$state = request('state');
$city = request('city');
$village = request('village');
$address = request('address');
$pincode = request('pincode');
$pujalocation = request('pujalocation');
$referalcode = request('referalcode');
$des = request('des');
$userid = request('userid');
$chka = request('chka');
$chkb = request('chkb');
$chkc = request('chkc');
$chkd = request('chkd');
$chke = request('chke');
$chkf = request('chkf');
$chkj = request('chkj');
$chkk = request('chkk');
$chkl = request('chkl');
$chkm = request('chkm');
$chkn = request('chkn');

$password = request('password');



// if ($req->hasFile('img')) {
//   $logo = $req->file('img');
//     $Extension = $logo->getClientOriginalExtension();
//     $logoname =time().'img.'.$Extension;
//     $destinationPath = public_path('uploads/register');
//     $logoPath = $destinationPath. "/".  $logoname;
//     $logo->move($destinationPath, $logoname);
//     $logo->img = $logoname;
//   }


if ($req->hasFile('img')) {
$logo = $req->file('img');
$Extension = $logo->getClientOriginalExtension();
$logoname =time().'img.'.$Extension;
$destinationPath = public_path('uploads/register');
$logoPath = $destinationPath. "/".  $logoname;
$logo->move($destinationPath, $logoname);
$logo->img = $logoname;
}	 


 if($mobile==''){
                        return back()->with('error','Enter valid mobile number ....');

        }
      
        else{
         
           
              $apiKey = urlencode('NjI0ZjYxNTMzODY5MzA0YjcyNDczNzU4N2E3MzQ5Nzg=');

            // Message details
            $numbers = array($mobile);
            $sender = urlencode('techtt');
            $message = rawurlencode('Your otp is ' . $otp . ' %nTechsell India');

            $numbers = implode(',', $numbers);

            // Prepare data for POST request
            $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

            // Send the POST request with cURL
            $ch = curl_init('https://api.textlocal.in/send/');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);

       
           
             session(['title'=> $title]);
            session(['mobile'=> $mobile]);
              session(['fname'=> $fname]);
              session(['lname'=> $lname]);
              session(['state'=> $state]);
              session(['city'=> $city]);
              session(['pincode'=> $pincode]);
              session(['email'=> $email]);
          session(['country'=> $country]);

              session(['community'=> $community]);
              session(['language'=> $language]);
              session(['expertise'=> $expertise]);
              session(['experience'=> $experience]);
              session(['dob'=> $dob]);
              session(['place'=> $place]);
              session(['time'=> $time]);
              session(['village'=> $village]);
              session(['education'=> $education]);
              session(['address'=> $address]);
              session(['des'=> $des]);
              session(['referalcode'=> $referalcode]);
              session(['userid'=> $userid]);
              session(['password'=> $password]);
              session(['pujalocation'=> $pujalocation]);
             session(['otp' => $otp]);
          session(['img' =>  $logoname]);
          session(['chka' =>  $chka]);
          session(['chkb' =>  $chkb]);
          session(['chkc' =>  $chkc]);
          session(['chkd' =>  $chkd]);
          session(['chke' =>  $chke]);
          session(['chkf' =>  $chkf]);
          session(['chkj' =>  $chkj]);
          session(['chkk' =>  $chkk]);
          session(['chkl' =>  $chkl]);
          session(['chkm' =>  $chkm]);
          session(['chkn' =>  $chkn]);

            return back()->with('otpsweet','Otp sent successfully ....');
            
           
        }



}



 public function submitOtp(request $req){
        $otp = trim(request('otp'));
        if($otp==''){
            return back()->with('error','Enter vaild OTP ....');
        }
        else{
  $data = new user;
            if($otp == session('otp') ){

 $data -> title=$req->session()->get('title');
  $data -> otp=$req->session()->get('otp');

 $data -> fname=$req->session()->get('fname');
 $data -> lname=$req->session()->get('lname');
$data -> country=$req->session()->get('country');
 $data -> state=$req->session()->get('state');
  $data -> mobile=$req->session()->get('mobile');

 $data -> city=$req->session()->get('city');
 $data -> pincode=$req->session()->get('pincode');
 $data -> email=$req->session()->get('email');
 $data -> community=$req->session()->get('community');
 $data -> language=$req->session()->get('language');
  $data -> expertise=$req->session()->get('expertise');
 $data -> experience=$req->session()->get('experience');
 $data -> address=$req->session()->get('address');
 $data -> education=$req->session()->get('education');
$data -> dob=$req->session()->get('dob');
$data -> place=$req->session()->get('place');
$data -> time=$req->session()->get('time');
$data -> village=$req->session()->get('village');
$data -> des=$req->session()->get('des');
 $data -> referalcode=$req->session()->get('referalcode');
 $data -> pujalocation=$req->session()->get('pujalocation');
 $data -> password=$req->session()->get('password');

 $data -> userid=$req->session()->get('userid');
 $data -> chka=$req->session()->get('chka');
 $data -> chkb=$req->session()->get('chkb');
 $data -> chkc=$req->session()->get('chkc');
 $data -> chkd=$req->session()->get('chkd');
 $data -> chke=$req->session()->get('chke');
 $data -> chkf=$req->session()->get('chkf');
 $data -> chkj=$req->session()->get('chkj');
 $data -> chkk=$req->session()->get('chkk');
 $data -> chkl=$req->session()->get('chkl');
 $data -> chkm=$req->session()->get('chkm');
 $data -> chkn=$req->session()->get('chkn');
 
    $data->img = $req->session()->get('img');

 
         


 
            $data->save();
            session()->flush();
return redirect('/')->with('otpsweet','Registration Successfully ....');



            }
            else{
              return back()->with('error','Enter vaild OTP ....');
            }
        }
    }
    public function show(){
        return view('/');
    }
  
  
  
}
