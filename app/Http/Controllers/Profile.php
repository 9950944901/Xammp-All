<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Crypt;
use Hash;
class Profile extends Controller
{
  

     
  
     public function viewprofile($id){
         $views = User::find($id);
        //  dd($views);
         return view('admin.viewprofile',compact('views'));
     }
     
  
  
  
  
  
  
  
  
  
  
  
  
  
  
}
