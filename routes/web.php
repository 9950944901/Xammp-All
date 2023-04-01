<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    AdminController,SubscriptionController,MasterClassController,UserController as AdminUserController
};
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Profile;


use App\Http\Controllers\SubscriptionController as WebSubscriptionController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('/', 'frontend.index');
Route::view('/Register-form', 'frontend.register_form');

Route::post('register',[UserController::class,'registration_process'])->name('registration.registration_process');
Route::get('/login', [FrontendController::class, 'login']);
Route::post('login',[UserController::class,'login_process'])->name('login.login_process');
Route::get('logout', function () {
    session()->forget('FRONT_USER_LOGIN');
    session()->forget('FRONT_USER_ID');
    session()->forget('FRONT_USER_NAME');Route::get('/register', [FrontendController::class, 'register']);

    session()->forget('FRONT_USER_TYPE');
    return redirect('login');
});


/************************************************************************************************************** */
Route::view('/add_profile', 'admin/add_profile'); 
Route::view('/profileview', 'admin/profileview'); 


Route::prefix('admin')->name('admin.')->group(function(){
   



//subscription part
Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');

Route::get('adminchangepassword',[AdminController::class,'adminchangepassword']);
Route::post('updateadminpassword',[AdminController::class,'updateadminpassword']);



  Route::resource('subscription', SubscriptionController::class);
  Route::match(['GET','HEAD'],'master-class', [MasterClassController::class,'index'])->name('master-class.index');
  Route::post('master-class' , [MasterClassController::class,'store'])->name('master-class.store');
  Route::get('master-class/create' , [MasterClassController::class,'create'])->name('master-class.create');
  Route::match(['GET','HEAD'],'master-class/show', [MasterClassController::class,'show'])->name('master-class.show');
  Route::delete('master-class/{master_class}',  [MasterClassController::class,'destroy'])->name('master-class.destroy');
  Route::match(['PUT','PATCH'],'master-class/{master_class}',  [MasterClassController::class,'update'])->name('master-class.update');
  Route::match(['GET','HEAD'],'master-class_{master_class}',  [MasterClassController::class,'edit'])->name('master-class.edit');

  Route::resource('subscription', SubscriptionController::class);
Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
Route::view('/login','admin.login')->name('login');
Route::post('/check',[AdminController::class,'check'])->name('check');
});


Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
Route::view('/index','admin.index')->name('index');
Route::get('/logout',[AdminController::class,'logout'])->name('logout');

Route::get('/delete-stuset/{id}',[AdminController::class,'delete_stuse']);



Route::view('/websetting','admin/websetting')->name('websetting');
Route::POST('admin/websetting',[AdminController::class,'websetting']);
Route::get('viewwebsetting',[AdminController::class,'viewwebsetting'])->name('viewwebsetting');
Route::get('update{id}',[AdminController::class,'updatedata']);
Route::POST('admin/updatewebsetting',[AdminController::class,'updatewebsetting']);


// Route::get('/viewprofile_edit',[UserController::class,'viewprofile_si']);

});


});


// Route::POST('add_data',[UserController::class,'add_data']);


Route::POST('/submitForm',[UserController::class,'submitForm']);
Route::POST('/submitOtp',[UserController::class,'submitOtp']);
Route::get('/showresult',[UserController::class,'show']);


Route::POST('/addRegister',[UserController::class,'addRegister']);


// Route::get('/viewprofilee',[Profile::class,'viewprofilee']);


Route::get('admin/viewprofile/{id}',[Profile::class,'viewprofile']);

Route::get('admin/viewprofilee',[Profile::class,'viewprofilee']);

// Route::post('/submitForm','InsertController@submitForm');
// Route::post('/submitotp','InsertController@submitOtp');
// Route::get('/showresult','InsertController@show');


 Route::get('/optimize-clear', function() {
     \Artisan::call('optimize:clear');
     return 'View cache cleared';
 });

Route::get('/cache', function () {
Artisan::call('cache:clear');
});


Route::get('/storage', function () {
Artisan::call('storage:link');
});
