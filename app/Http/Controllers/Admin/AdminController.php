<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;
use App\Models\websetting;
use App\Models\category;
use App\Models\Order;
use App\Models\OrderMeta;
use App\Models\OrderProduct;
use App\Models\matrimonialshow;
use App\Models\learnsindhi;
use App\Models\subcategory;
use App\Models\blog;
use App\Models\course;
use App\Models\ebook;
use App\Models\CourseVideo;
use App\Models\Foundational_course_videos;
use App\Models\Foundational_course;
use App\Models\ebook_setting;
use App\Models\user;
use App\Models\contact;
use Carbon\Carbon;

use Cviebrock\EloquentSluggable\Services\SlugService;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
    

    //  public function viewprofilee(){
    //       return view(admin.viewprofilee);
    //   }
      
    
function check(Request $request){
//Validate Inputs
$request->validate([
'email'=>'required|email|exists:admins,email',
'password'=>'required|min:5|max:30'
],[
'email.exists'=>'This email is not exists in admins table'
]);

$creds = $request->only('email','password');

if( Auth::guard('admin')->attempt($creds) ){
return redirect()->route('admin.index');
}else{
return redirect()->route('admin.login')->with('error','Invalid E-mail Or Password');
}
}

function logout(){
Auth::guard('admin')->logout();
return redirect('admin/login');
}

    public function adminchangepassword(Request $request){
        $user_id = $request->session()->get('FRONT_USER_ID');
        $d['data'] = user::where('id',$user_id)->first();
        return view('admin/changepassword',$d);
    }
    public function updateadminpassword(Request $request){
        $user_id = $request->session()->get('FRONT_USER_ID');
        request()->validate([
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_pass' => 'required|same:new_password',
        ]); 

        $data =  User::find($user_id);
        
        if($request->old_password == decrypt($data->password)){
            $data->password =  encrypt($request->new_password);
            $data->save(); 
            return redirect()->back()->with('success','Password update succesfully');
        }
        else{
            return redirect()->back()->with('success','Current Password is invalid');
        }
    }

/****************************************************************************************Admin Auth End*************************************************************************************************************/

/****************************************************************************************Web Setting Start*************************************************************************************************************/


function websetting(request $req){

$req->validate([
'companynames'=>'required',
'email'=>'required',
'mobile'=>'required'
]);


$websetting = NEW websetting;
$websetting -> companynames=$req->companynames;
$websetting -> email=$req->email;
$websetting -> mobile=$req->mobile;
$websetting -> tagline=$req->tagline;
$websetting -> address=$req->address;
$websetting -> abouttitle=$req->abouttitle;
$websetting -> description=$req->editor;
$websetting -> facebook=$req->facebook;
$websetting -> instagram=$req->instagram;
$websetting -> twitter=$req->twitter;
$websetting -> linkdin=$req->linkdin;
$websetting -> youtube=$req->youtube;
$websetting -> Pinterest=$req->Pinterest;


if ($req->hasFile('logo')) {
$logo = $req->file('logo');
$Extension = $logo->getClientOriginalExtension();
$logoname =time().'logo.'.$Extension;
$destinationPath = public_path('uploads/system_setting');
$logoPath = $destinationPath. "/".  $logoname;
$logo->move($destinationPath, $logoname);
$websetting->logo = $logoname;
}

if ($req->hasFile('favicon')) {
$favicon = $req->file('favicon');
$Extension = $favicon->getClientOriginalExtension();
$faviconname =time().'favicon.'.$Extension;
$destinationPath = public_path('uploads/system_setting');
$faviconPath = $destinationPath. "/".  $faviconname;
$favicon->move($destinationPath, $faviconname);
$websetting->favicon = $faviconname;
}

if ($req->hasFile('footerlogo')) {
$footerlogo = $req->file('footerlogo');
$Extension = $footerlogo->getClientOriginalExtension();
$footerlogoname =time().'footerlogo.'.$Extension;
$destinationPath = public_path('uploads/system_setting');
$footerlogoPath = $destinationPath. "/".  $footerlogoname;
$footerlogo->move($destinationPath, $footerlogoname);
$websetting->footerlogo = $footerlogoname;
}

if($req->hasfile('Aboutimg'))
{
foreach($req->file('Aboutimg') as $file)
{
$name = uniqid() . '_' . time(). '.' . $file->getClientOriginalExtension();
$path = public_path() . '/uploads/system_setting/';
$file->move($path, $name);
$Imgdata[] = $name;
}
$websetting->Aboutimg = json_encode($Imgdata);
}

$websetting -> save();

return back()->with('success','Successfully Submited');

}


function viewwebsetting(){


$data = websetting::All();

return view('admin/viewwebsetting',['viewwebsettings'=>$data]);
}

function updatedata($id){

$catupdate = crypt::decrypt($id);

$data = websetting::find($catupdate);

return view('admin/updatewebsetting',['upadates'=>$data]);

}



function updatewebsetting(Request $req){

$websetting = websetting::find($req->id);


// $websetting -> companynames=$req->companynames;

$websetting -> email=$req->email;
$websetting -> mobile=$req->mobile;
// $websetting -> tagline=$req->tagline;
$websetting -> address=$req->address;
// $websetting -> abouttitle=$req->abouttitle;
// $websetting -> description=$req->editor;
$websetting -> facebook=$req->facebook;
$websetting -> instagram=$req->instagram;
$websetting -> twitter=$req->twitter;
$websetting -> linkdin=$req->linkdin;
$websetting -> youtube=$req->youtube;
$websetting -> Pinterest=$req->Pinterest;
$websetting -> iframe=$req->iframe;


if ($req->hasFile('logo')) {
$logo = $req->file('logo');
$Extension = $logo->getClientOriginalExtension();
$logoname =time().'logo.'.$Extension;
$destinationPath = public_path('uploads/system_setting');
$logoPath = $destinationPath. "/".  $logoname;
$logo->move($destinationPath, $logoname);
$websetting->logo = $logoname;
}else{
$websetting -> logo=$req->logohidden;
}

if ($req->hasFile('favicon')) {
$favicon = $req->file('favicon');
$Extension = $favicon->getClientOriginalExtension();
$faviconname =time().'favicon.'.$Extension;
$destinationPath = public_path('uploads/system_setting');
$faviconPath = $destinationPath. "/".  $faviconname;
$favicon->move($destinationPath, $faviconname);
$websetting->favicon = $faviconname;
}else{
$websetting -> favicon=$req->faviconhidden;
}


if ($req->hasFile('footerlogo')) {
$footerlogo = $req->file('footerlogo');
$Extension = $footerlogo->getClientOriginalExtension();
$footerlogoname =time().'footerlogo.'.$Extension;
$destinationPath = public_path('uploads/system_setting');
$footerlogoPath = $destinationPath. "/".  $footerlogoname;
$footerlogo->move($destinationPath, $footerlogoname);
$websetting->footerlogo = $footerlogoname;
}else{
$websetting -> footerlogo=$req->footerlogohidden;
}

// if($req->hasfile('Aboutimg'))
// {
// foreach($req->file('Aboutimg') as $file)
// {
// $name = uniqid() . '_' . time(). '.' . $file->getClientOriginalExtension();
// $path = public_path() . '/uploads/system_setting/';
// $file->move($path, $name);
// $Imgdata[] = $name;
// }
// $websetting->Aboutimg = json_encode($Imgdata);
// }

$websetting -> save();

return redirect('admin/viewwebsetting')->with('success','Successfully Updated');

}




/**************************************************************************************WEB SETTING END***************************************************************************************************************/


/****************************************************************************************Categroy Start*************************************************************************************************************/


function addcategroy(request $req){

$req->validate([
'categroy'=>'required | unique:categories,categroy',
'image'=>'required',
'status'=>'required'
]);

$categroy = NEW category;
$categroy -> categroy=$req->categroy;
$categroy -> status=$req->status;



if ($req->hasFile('image')) {
$image = $req->file('image');
$Extension = $image->getClientOriginalExtension();
$filename =time().'.'.$Extension;
$destinationPath = public_path('uploads/category/');
$imagePath = $destinationPath. "/".  $filename;
$image->move($destinationPath, $filename);
$categroy->image = $filename;
}



$categroy -> save();

return redirect('admin/viewcategroy')->with('success','Category Successfully Submited');

}

function viewcategroy(){


$data = category::paginate(5);

return view('admin/viewcategory',['viewcategroy'=>$data]);
}


function updatecatagroydata($id){

$catupdate = Crypt::decrypt($id);
$datas = category::find($catupdate);


return view('admin/updatecategroy',['upadatecate'=>$datas]);

}

function updatecategroy(request $req){



$categroy = category::find($req->id);

$categroy -> categroy=$req->categroy;
// $categroy -> description=$req->editor;




if ($req->hasFile('image')) {
$image = $req->file('image');
$Extension = $image->getClientOriginalExtension();
$filename =time().'.'.$Extension;
$destinationPath = public_path('uploads/category/');
$imagePath = $destinationPath. "/".  $filename;
$image->move($destinationPath, $filename);
$categroy->image = $filename;
}

$categroy -> save();

return redirect('admin/viewcategroy')->with('warning','Category Successfully Updated');

}




public function deletecategroy($id) {
$catupdate = Crypt::decrypt($id);
$image = category::find($catupdate);
$destinationPath = public_path("uploads/category/{$image->image	}");
if (File::exists($destinationPath)) {
File::delete($destinationPath);
}else{

echo  'no File exists';
}
$image->delete();

return back()->with('error','Category Successfully Deleted');



}

public function updateStatus(Request $request)
{
$user = category::findorfail($request->id);


$user->status = $request->status;
$user->save();

return response()->json(['message' => 'category status updated successfully.']);
}


/**************************************************************************************Categroy END***************************************************************************************************************/


/****************************************************************************************Sub Categroy Start*************************************************************************************************************/

function add_subcategroy(request $req){

$req->validate([
'subcategroy'=>'required | unique:subcategories,sub_categroy',
'catagory_id'=>'required',
'status'=>'required'
]);

$subcategroy = NEW subcategory;
$subcategroy -> sub_categroy=$req->subcategroy;
$subcategroy -> catagory_id=$req->catagory_id;
$subcategroy -> status=$req->status;

$subcategroy -> save();

return redirect('admin/view-subcategory')->with('success','Sub-Category Successfully Submited');

}


function view_subcategroy(){


// $data = subcategory::paginate(5);

$data = DB::table('categories')->join('subcategories','categories.id','=','subcategories.catagory_id')
->where('categories.status',"1")
->paginate(5);


return view('admin/view-subcategory',['viewsubcategroys'=>$data]);

}


function selectcategory(){
$users = DB::select('select * from categories where status = :status', ['status' => 1]);

return view('admin/add-subcategory',['selectcategorys'=>$users]);
}


function update_subcatagroydata($id){
$prodID = Crypt::decrypt($id);
$datas = subcategory::find($prodID);

return view('admin/update-subcategory',['upadatesubcate'=>$datas]);

}


function update_subcategroy(request $req){

$subcategroy = subcategory::find($req->id);
$subcategroy -> sub_categroy=$req->subcategroy;
// $subcategroy -> description=$req->editor;




// if ($req->hasFile('image')) {
// $image = $req->file('image');
// $Extension = $image->getClientOriginalExtension();
// $filename =time().'.'.$Extension;
// $destinationPath = public_path('uploads/subcategory/');
// $imagePath = $destinationPath. "/".  $filename;
// $image->move($destinationPath, $filename);
// $subcategroy->image = $filename;
// }

$subcategroy -> save();

return redirect('admin/view-subcategory')->with('success','Sub-Category Successfully Updated');

}




function deletesubcategroy($id){
$prodID = crypt::decrypt($id);
$data= subcategory::find($prodID);
$destinationPath = public_path("uploads/subcategory/{$data->image}");
if (File::exists($destinationPath)) {
File::delete($destinationPath);
}else{

echo  'no File exists';
}
$data->delete();

return back()->with('error','Sub Category Successfully Deleted');;



}



public function updatecatStatus(Request $request)
{
$user = subcategory::findorfail($request->id);


$user->status = $request->status;
$user->save();

return response()->json(['message' => 'subcategory status updated successfully.']);
}



/***********************************************************************************************************************************************************************/

public function course()
{
return view('admin/course/add_course');
}

public function categoryslist(Request $request){
$data['categoryslist']=DB::table('categories')->where('status',1)->get();
$data['subcategoryslist']=DB::table('subcategories')->where('status',1)->get();

return view('admin/course/add_course',$data);
}

public function getSubcat(Request $request){
$cid=$request->post('cid');
$getSubcat=DB::table('subcategories')->where('catagory_id',$cid)->where('status',"1")->get();

$html='<option value="">--Select Course Subcategroy type--</option>';
foreach($getSubcat as $list){
$html.='<option value="'.$list->id.'">'.$list->sub_categroy.'</option>';
}
echo $html;
}



function add_course(request $req){


// $req->validate([

// 'catagory'=>'required',

// 'ctitle'=>'required|unique:courses,ctitle',
// 'cvideo'=>'required',
// 'editor'=>'required' ,
// 'cprice'=>'required',
// 'cmrp'=>'required' 
// ],[

// 'ctitle.required'   =>'The course title field is required.',
// 'ctitle.unique'   =>'The course title has already been taken.',
// 'cvideo.required'   =>'The course video field is required.',
// 'editor.required'   =>'The course Description field is required.',
// 'cprice.required'   =>'The course Price field is required.',
// 'cmrp.required'   =>'The course MRP field is required.',


// ]);


$cou= NEW Foundational_course;
$cou->catagory=$req->catagory;
$cou->subcategory=$req->subcategory;
$cou->title=$req->ctitle;
$cou->description=$req->editor;
$cou->mrp=$req->mrp;
$cou->price=$req->price;
$cou->user_id=Auth::user()->id;
$cou->course_type='Foundational course';
$cou->status='1';



if($req->hasfile('image'))
{
$file = $req->file('image');
$name = uniqid() . '_' . time(). '.' . $file->getClientOriginalExtension();
$destinationPath = public_path('uploads/Foundational_course/image');
$file->move($destinationPath, $name);
$Imgdata[] = $name;
$cou->image=$name;


if($req->hasfile('video'))
{
foreach($req->file('video') as $file)
{
$name = uniqid() . '_' . time(). '.' . $file->getClientOriginalExtension();
$path = public_path() . '/uploads/Foundational_course/video';
$file->move($path, $name);
$Imgdata[] = $name;
}
$cou->video = json_encode($Imgdata);
}



}
$cou->save();







return redirect('admin/view_course')->with('success','Course successfully added');


}




public function get_course()
{

$data['cview'] = Foundational_course::join('subcategories', 'foundational_course.subcategory', '=', 'subcategories.id')
                                ->join('categories', 'categories.id', '=', 'subcategories.catagory_id')
                                ->select('categories.categroy as catcategroy', 'subcategories.sub_categroy', 'subcategories.id', 'foundational_course.title', 'foundational_course.image','foundational_course.status','foundational_course.id as courseid')
                                ->paginate(5);   
return view('admin/course/index',$data);
}


public function update_course_status(Request $request)
{
$user = Foundational_course::findorfail($request->id);


$user->status = $request->status;
$user->save();

return response()->json(['message' => 'Course status updated successfully.']);
}



public function course_view($id)
{

$data['cview'] = Foundational_course::find($id);

return view('admin/course/course_view',$data);
}



function delete_course($id){

$data= Foundational_course::find($id);
    if (File::exists(public_path("uploads/Foundational_course/image/{$data->image}"),public_path("uploads/Foundational_course/video/{$data->video}"))) {
        File::delete([public_path("uploads/Foundational_course/image/{$data->image}"),public_path("uploads/Foundational_course/video/{$data->video}")]);
    }else{
        
      echo  'no File exists';
    }

$data->delete();

return back()->with('error','Course Successfully Deleted');;



}

public function edit_course($id)
{
$data['cview'] = foundational_course::find($id);
$data['categoryslist']=DB::table('categories')->where('status',1)->get();
$data['subcategoryslist'] = subcategory::where('catagory_id', $data['cview']->catagory)->get();

return view('admin/course/edit',$data);
}







function update_course(request $req){


$cou= foundational_course::find($req->id);
$cou->catagory=$req->catagory;
$cou->subcategory=$req->subcategory;
$cou->title=$req->title;
$cou->description=$req->editor;
$cou->mrp=$req->mrp;
$cou->price=$req->price;
$cou->user_id=Auth::user()->id;
$cou->course_type='Foundational course';
$cou->status='1';



if($req->hasfile('image'))
{
$file = $req->file('image');
$name = uniqid() . '_' . time(). '.' . $file->getClientOriginalExtension();
$destinationPath = public_path('uploads/Foundational_course/image');
$file->move($destinationPath, $name);
$Imgdata[] = $name;
$cou->image=$name;


if($req->hasfile('video'))
{
foreach($req->file('video') as $file)
{
$name = uniqid() . '_' . time(). '.' . $file->getClientOriginalExtension();
$path = public_path() . '/uploads/Foundational_course/video';
$file->move($path, $name);
$Imgdata[] = $name;
}
$cou->video = json_encode($Imgdata);
}



}
$cou->save();



return redirect('admin/view_course')->with('success','course successfully added');


}






/*********************************************************************************************************************************************************************************************************/


function add_ebook(request $req){



$req->validate([

'etitle'=>'required|unique:ebooks,etitle',
'emrp'=>'required' ,
'eprice'=>'required',
'eimage'=>'required',
'ebook'=>'required' ,
'wname'=>'required'

],[

'etitle.required'   =>'The ebook title field is required.',
'etitle.unique'   =>'The ebook title has already been taken.',
'eprice.required'   =>'The ebook Price field is required.',
'eimage.required'   =>'The ebook image field is required.',
'descriptions.required'   =>'The descriptions field is required.',
'emrp.required'   =>'The ebook MRP field is required.',
'wname.required'   =>'The Website name field is required.',


]);


// $cou= new course;
// $cou->ctitle=$req->etitle;
// $cou->cmrp=$req->emrp;
// $cou->cprice=$req->eprice;
// $cou->description=$req->wname;
// $cou->user_id=Auth::user()->id;
// $cou->course_type='Ebook';


// if ($req->hasFile('eimage')) {
// $logo = $req->file('eimage');
// $Extension = $logo->getClientOriginalExtension();
// $logoname =time().'eimage.'.$Extension;
// $destinationPath = public_path('uploads/advancecourse/image');
// $logoPath = $destinationPath. "/".  $logoname;
// $logo->move($destinationPath, $logoname);
// $cou->image = $logoname;
// }


// if($req->hasfile('ebook'))
// {
// foreach($req->file('ebook') as $file)
// {
// $name = uniqid() . '_' . time(). '.' . $file->getClientOriginalExtension();
// $path = public_path() . '/uploads/advancecourse/image';
// $file->move($path, $name);
// $Imgdata[] = $name;
// }
// $cou->pdf = json_encode($Imgdata);
// }


$cou= new ebook;
$cou->user_id=Auth::user()->id;
$cou->etitle=$req->etitle;
$cou->emrp=$req->emrp;
$cou->eprice=$req->eprice;
$cou->wname=$req->wname;

//$cou->course_type='Ebook';


if ($req->hasFile('eimage')) {
$logo = $req->file('eimage');
$Extension = $logo->getClientOriginalExtension();
$logoname =time().'eimage.'.$Extension;
$destinationPath = public_path('uploads/Ebook/ebook');
$logoPath = $destinationPath. "/".  $logoname;
$logo->move($destinationPath, $logoname);
$cou->eimage = $logoname;
}


if($req->hasfile('ebook'))
{
foreach($req->file('ebook') as $file)
{
$name = uniqid() . '_' . time(). '.' . $file->getClientOriginalExtension();
$path = public_path() . '/uploads/Ebook/ebook';
$file->move($path, $name);
$Imgdata[] = $name;
}
$cou->ebook = json_encode($Imgdata);
}
$cou->save();

return redirect('admin/view_ebook')->with('success','E-Book successfully added');


}


function get_ebook(){
    
    
    $ebook['ebook']= ebook::paginate(5);
    
    return view('admin/ebook/index' ,$ebook);
    
    
}

function delete_ebook($id){

$data= ebook::find($id);
 ;
if (File::exists(public_path("uploads/Ebook/image/{$data->cimage}"))) {
File::delete(public_path("uploads/Ebook/image/{$data->cvideo}"));
}else{

echo  'no File exists';
}
$data->delete();

return back()->with('error','E-Book Successfully Deleted');;



}



function edit_ebook($id){
    
    
    $ebook['ebook']= ebook::find($id);
    
    return view('admin/ebook/edit' ,$ebook);
    
    
}


function update_ebook(request $req){


$cou= ebook::find($req->id);
$cou->user_id=Auth::user()->id;
$cou->etitle=$req->etitle;
$cou->emrp=$req->emrp;
$cou->eprice=$req->eprice;
$cou->wname=$req->wname;

//$cou->course_type='Ebook';


if ($req->hasFile('eimage')) {
$logo = $req->file('eimage');
$Extension = $logo->getClientOriginalExtension();
$logoname =time().'eimage.'.$Extension;
$destinationPath = public_path('uploads/Ebook/ebook');
$logoPath = $destinationPath. "/".  $logoname;
$logo->move($destinationPath, $logoname);
$cou->eimage = $logoname;
}


if($req->hasfile('ebook'))
{
foreach($req->file('ebook') as $file)
{
$name = uniqid() . '_' . time(). '.' . $file->getClientOriginalExtension();
$path = public_path() . '/uploads/Ebook/ebook';
$file->move($path, $name);
$Imgdata[] = $name;
}
$cou->ebook = json_encode($Imgdata);
}

$cou->save();

return redirect('admin/view_ebook')->with('success','E-Book successfully updated');


}



public function update_ebook_status(Request $request)
{
$user = ebook::findorfail($request->id);


$user->status = $request->status;
$user->save();

return response()->json(['message' => 'E-Book status updated successfully.']);
}




function full_view_ebook($id){
    
    
    $ebook['ebook']= ebook::find($id);
    
    return view('admin/ebook/view_full' ,$ebook);
    
    
}



/*******************************************************************************************************************************************************************************************************/


function add_ebook_setting(request $req){



$req->validate([

'etitle'=>'required',
'ebanner'=>'required' ,
'eheading'=>'required',
'epara'=>'required',
'cbanner'=>'required',
'cheading'=>'required',

],[

'etitle.required'   =>'The ebook setting title field is required.',
'etitle.unique'   =>'The ebook setting title has already been taken.',
'ebanner.required'   =>'The ebook banner field is required.',
'eheading.required'   =>'The ebook heading field is required.',
'epara.required'   =>'The ebook paragraph field is required.',
'cbanner.required'   =>'The cart banner field is required.',
'cheading.required'   =>'The cart heding field is required.',


]);


$cou= new ebook_setting;
$cou->etitle=$req->etitle;
$cou->eheading=$req->eheading;
$cou->epara=$req->epara;
$cou->cheading=$req->cheading;

if ($req->hasFile('ebanner')) {
$logo = $req->file('ebanner');
$Extension = $logo->getClientOriginalExtension();
$logoname =time().'ebanner.'.$Extension;
$destinationPath = public_path('uploads/Ebook/Ebook Banner');
$logoPath = $destinationPath. "/".  $logoname;
$logo->move($destinationPath, $logoname);
$cou->ebanner = $logoname;
}




if ($req->hasFile('cbanner')) {
$logo = $req->file('cbanner');
$Extension = $logo->getClientOriginalExtension();
$logoname =time().'cbanner.'.$Extension;
$destinationPath = public_path('uploads/Ebook/cart banner');
$logoPath = $destinationPath. "/".  $logoname;
$logo->move($destinationPath, $logoname);
$cou->cbanner = $logoname;
}

$cou->save();

return redirect('admin/view_ebook_setting')->with('success','E-Book Settings successfully added');
// return back();

}


function get_ebook_setting(){
    
    
    $ebook['ebook']= ebook_setting::paginate(5);
    
    return view('admin/ebook_setting/index' ,$ebook);
    
    
}

function delete_ebook_setting($id){

$data= ebook_setting::find($id);
  if (File::exists(public_path("uploads/Ebook/Ebook Banner/{$data->ebanner}"),public_path("uploads/Ebook/cart banner/{$data->cbanner}"))) {
        File::delete([public_path("uploads/Ebook/Ebook Banner/{$data->ebanner}"),public_path("uploads/Ebook/cart banner/{$data->cbanner}")]);
    }else{
        
      echo  'no File exists';
    }
    $data->delete();
$data->delete();

return back()->with('error','E-Book Settings Successfully Deleted');;



}




public function edit_ebook_setting($id){
    
    
    $ebook['ebook']= ebook_setting::find($id);
    
    return view('admin/ebook_setting/edit' ,$ebook);
    
    
}




function update_ebook_setting(request $req){


$cou= ebook_setting::find($req->id);
$cou->etitle=$req->etitle;
$cou->eheading=$req->eheading;
$cou->epara=$req->epara;
$cou->cheading=$req->cheading;

if ($req->hasFile('ebanner')) {
$logo = $req->file('ebanner');
$Extension = $logo->getClientOriginalExtension();
$logoname =time().'ebanner.'.$Extension;
$destinationPath = public_path('uploads/Ebook/Ebook Banner');
$logoPath = $destinationPath. "/".  $logoname;
$logo->move($destinationPath, $logoname);
$cou->ebanner = $logoname;
}




if ($req->hasFile('cbanner')) {
$logo = $req->file('cbanner');
$Extension = $logo->getClientOriginalExtension();
$logoname =time().'cbanner.'.$Extension;
$destinationPath = public_path('uploads/Ebook/cart banner');
$logoPath = $destinationPath. "/".  $logoname;
$logo->move($destinationPath, $logoname);
$cou->cbanner = $logoname;
}

$cou->save();

return redirect('admin/view_ebook_setting')->with('success','E-Book Settings successfully updated');
// return back();

}




public function update_ebook_setting_status(Request $request)
{
$user = ebook_setting::findorfail($request->id);


$user->status = $request->status;
$user->save();

return response()->json(['message' => 'E-Book Settings status updated successfully.']);
}




function full_view_ebook_setting($id){
    
    
    $ebook['ebook']= ebook_setting::find($id);
    
    return view('admin/ebook_setting/view_full' ,$ebook);
    
    
}

public function allteacher(Request $request){
	$d['teachers'] = user::where('type','Trainer')->orderBy("id",'desc')->get();
	return view('admin/teacherlist',$d);
}


public function fullteacherview(Request $request,$id){
	$d['teachers'] = user::where('type','Trainer')->find($id);
	return view('admin/fullteacherview',$d);
}



public function teacher_update_status(Request $request)
{
$user = user::where('type','Trainer')->find($request->id);


$user->status = $request->status;
$user->save();

return response()->json(['message' => 'Trainer status updated successfully.']);
}






public function allstudent(){
	$d['students'] = user::where('type','Learner')->orderBy("id",'desc')->paginate(10);
	return view('admin/studentlist',$d);
}



public function student_update_status(Request $request)
{
$user = user::where('type','Learner')->find($request->id);


$user->status = $request->status;
$user->save();

return response()->json(['message' => 'Learner status updated successfully.']);
}


public function learner_view(Request $request,$id){
	$d['learner'] = user::where('type','Learner')->find($id);
	return view('admin/learner_view',$d);
}













public function viewteachercourse(Request $request,$id){
	$d['courses'] = course::where('user_id',$id)->paginate(5);
	$d['videos'] = CourseVideo::where('course_id', $id)->get();

	return view('admin/viewteachercourse',$d);
}

public function orderedcoursedetail(Request $request,$id){
    $user_id = $request->session()->get('FRONT_USER_ID');
    $d['data'] = Order::join('order_products','order_products.order_id','=','orders.id')->join('courses','courses.id','=','order_products.order_id')->where('order_products.course_id',$id)->paginate(5);
       

    return view('admin/orderedcoursedetail',$d);
}


public function subscriptionlist(){
    
    $d['subscriptions'] = Subscription::all();
    return view('admin/subscription/index',$d);
    
}


public function conatct(){
    
    $d['conatct'] = contact::paginate(5);
    return view('admin/support',$d);
    
}

public function con_delete($id){
    
    $d= contact::find($id);
    $d->delete();
    
    return back()->with('error','Successfully Deleted');
    
}


public function getsupport(){
    
    $d['web'] = websetting::first();
    return view('frontend/contact',$d);
    
}

public function dashboard(){
    $d['Trainer']=User::where('type','Trainer')->count();
    $d['Learner']=User::where('type','Learner')->count();
    $d['Ebook']=course::where('course_type','Ebook')->count();
    $d['advance']=course::where('course_type','advance')->count();
    $d['Order']=Order::count();
    $d['Orderamaount']=Order::sum('total_amount');
    $d['Orderamaount_today']=Order::where('created_at', '>=', Carbon::now())->sum('total_amount');
    $d['Orderamaount_this_month']=Order::whereMonth('created_at', Carbon::now()->month)->sum('total_amount');
 
    $d['Foundational_course']=Foundational_course::count();
 
    return view('admin/dashboard',$d);
    
}

public function delete_stuse($id){
    
      $student = user::find($id);
        $student->delete();
        return redirect()->back()->with('status','Student Deleted Successfully');
}















}





