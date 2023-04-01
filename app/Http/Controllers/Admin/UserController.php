<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash,Crypt;
class UserController extends Controller
{
    public function __construct(User $model){
        $this->model     =   $model;
     }
 
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function trainerAddEndEdit(Request $request)
     {
        return view('admin.add_user',['role'=>'Trainer','title'=>'Trainer']);    
     }


     public function saveUser(Request $request)
     {
        $data = $this->validate($request,[
            'fname'      => 'required|string',
            "lname"      => "required|string",
            'email'      => 'required|email|unique:users,email'.(!empty($request->userId) ? ",".$request->userId : ''),
            'mobile'     => 'required|unique:users,mobile'.(!empty($request->userId) ? ",".$request->userId : ''),
            "password"   => "required|min:8",
            "type"       => "required",
        ]);
        
        if($request->type == "Learner"){
           $route  = "admin/all-learner";
        }else{
         $route  = "admin/all-trainer";
        }
        $data['password'] = Crypt::encrypt($request->password);
        if(!empty($request->userId)){
        
         $userData = User::whereId($request->userId)->update($data);
         return redirect( $route)->with('success', __("User Update Successfully"));  
        }else{
         $userData = User::create($data);
        return redirect( $route)->with('success', __("User Added Successfully"));  
        }
        
     }


     public function learnerAddEndEdit(Request $request)
     {
        return view('admin.add_user',['role'=>'Learner','title'=>'Learner']);    
     }

     public function trainer_edit(Request $request,$id)
     {
        $userData = User::whereId($id)->whereType('Trainer')->firstOrFail();
        return view('admin.add_user',['role'=>'Trainer','data'=>$userData,'title'=>'Trainer']);    
     }

     public function learner_edit(Request $request,$id)
     {
        $userData = User::whereId($id)->whereType('Learner')->firstOrFail();
        return view('admin.add_user',['role'=>'Learner','data'=>$userData,'title'=>'Learner']);    
     }

     public function admin_user_delete(Request $request,$id)
     {
         if($request->type == "Learner"){
            $route  = "admin/all-learner";
         }else{
         $route  = "admin/all-trainer";
         }
      $userData = User::whereId($id)->delete();
       return redirect( $route)->with('success', __("User Delete Successfully"));  
        
     }
     
     
     
     
   
   
     
     
     
     
     
     
     
     
     
     
     
     
     
     
}
