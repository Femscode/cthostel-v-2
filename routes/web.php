<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendCOntroller;
use App\Http\Controllers\roommateController;
use App\Http\Controllers\Auth\RegisteredUserController;

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
require __DIR__ . '/auth.php';

// Route::get('/', function () {
//     return view('frontend.home');
// });
// the real route
Route::any('search_property', [MarketController::class, 'search_property'])->name('search_property');
Route::any('upgrade_account', [FrontendCOntroller::class, 'upgrade_account'])->name('upgrade_account');

//new routes

Route::view('egbami','egbami');
Route::any('egbamisave',[AlbumController::class,'egbamisave'])->name('saveegbami');
Route::any('additionalinfo',[AlbumController::class,'additionalinfo'])->name('additionalinfo');
Route::any('egbamirequest',[AlbumController::class,'egbamirequest'])->name('egbamirequest');
Route::view('googleaddress','googleaddress');
//ctservices route
Route::view('serviceregistration','auth.service')->name('serviceregistration');
Route::any('saveservice',[AlbumController::class,'saveservice'])->name('saveservice');
Route::any('services',[FrontendCOntroller::class,'servicepage'])->name('servicepage');
Route::any('searchtechnician',[FrontendCOntroller::class,'searchtechnician'])->name('searchtechnician');
Route::any('getcontact',[FrontendCOntroller::class,'getContact'])->name('getcontact');

Route::any('messagetechnician/{phone}',[ServiceController::class,'messagetechnician'])->name('messagetechnician');
Route::any('calltechnician/{phone}',[ServiceController::class,'calltechnician'])->name('calltechnician');


Route::view('egbamiregistration','studentportal');
Route::any('/admindashboard',[AlbumController::class,'schooldashboard'])->name('schooldashboard')->middleware('auth');
Route::any('/schoolhostels',[AlbumController::class,'schoolhostels'])->name('schoolhostels')->middleware('auth');
Route::any('/shs',[FrontendCOntroller::class,'shs'])->name('shs');

Route::any('studentregister',[AlbumController::class,'studentregister'])->name('studentregister');
Route::any('saveaddress/{id}',[AlbumController::class,'saveaddress'])->name('save_address');
Route::any('address/{id}',[AlbumController::class,'address'])->name('address');
Route::get('sendsms',[AlbumController::class,'sendsms']);
Route::any('roommate',[roommateController::class,'index'])->name('roommate');
Route::any('myroomie',[roommateController::class,'index'])->name('roomie');
Route::any('special-request',[AlbumController::class,'specialRequest'])->name('special-request');
Route::any('/addComplaint',[AlbumController::class,'addComplaint'])->name('addComplaint');
Route::get('feedback',[AlbumController::class,'feedback'])->name('feedback');
Route::any('counter',[AlbumController::class,'counter'])->name('counter');
// Route::any('counter/{id}',[AlbumController::class,'counter'])->name('counter');
Route::any('callcounter/{id}',[AlbumController::class,'callcounter'])->name('callcounter');
Route::view('launching','counter');
Route::get('send_mail',[AlbumController::class,'send_mail'])->name('send_mail');
Route::get('/logout',[RegisteredUserController::class,'logout'])->name("logout");
Route::view('faq','faq');
Route::any('subscription',[AlbumController::class,'subscription'])->name('subscription');
Route::any('locationdisplay/{id}',[AlbumController::class,'locationdisplay'])->name('locationdisplay');
Route::any('searchInstitution',[AlbumController::class,'searchInstitution'])->name('searchInstitution');
Route::any('search',[AlbumController::class,'search'])->name('search');
Route::get('/admin',[AlbumController::class,'admin'])->name('good')->middleware('auth');
Route::get('/dashboard',[AlbumController::class,'admin'])->name('dashboard')->middleware('auth');

Route::any('/updateprofile',[AlbumController::class,'updateprofile'])->name('updateprofile');
Route::any('/view_identification/{id}',[AlbumController::class,'view_identification'])->name('view_identification');
Route::get('/',[AlbumController::class,'selectinstitution'])->name('selectinstitution');

Route::any('/cthome',[FrontendCOntroller::class,'cthome'])->name('cthome');
Route::any('/latest/{school_id}',[FrontendCOntroller::class,'latest'])->name('latest');
Route::any('/cheapest/{school_id}',[FrontendCOntroller::class,'cheapest'])->name('cheapest');
Route::any('/bestrated/{school_id}',[FrontendCOntroller::class,'bestrated'])->name('bestrated');
Route::any('cthostel/{slug}/{id}',[FrontendCOntroller::class,'cthostel'])->name('cthostel');
Route::any('agentpage/{id}',[FrontendCOntroller::class,'agentpage'])->name('agentpage');
// Route::any('{slug}/{id}',[FrontendCOntroller::class,'agentpage'])->name('agentpage');
Route::get('pagination/fetch_data/{id}', [FrontendCOntroller::class,'fetch_data']);
Route::get('filter_pagination/fetch_data/{id}', [FrontendCOntroller::class,'filter_fetch_data']);
Route::get('statusenable',[AlbumController::class,'statusenable'])->name('statusenable');
Route::get('statusdisable',[AlbumController::class,'statusdisable'])->name('statusdisable');
Route::get('/{id}/category',[FrontendCOntroller::class,'albumCategory'])->name('album.category');
Route::get('/getallalbums',[FrontendCOntroller::class,'getallalbum'])->name('getallalbums');
Route::get('/loaduploadedimages',[AlbumController::class,'loaduploadedimages'])->name('loaduploadedimages');
Route::get('/loadprojectimages',[AlbumController::class,'loadprojectimages'])->name('loadprojectimages');

Route::get('/deleteuploadedimages',[AlbumController::class,'deleteuploadedimages'])->name('deleteuploadedimages');

Route::get('/profile',[FollowController::class,'profile'])->name('profile')->middleware('auth');
Route::post('contact',[FrontendCOntroller::class,'contact'])->name('contact');
Route::get('/user/{id}',[FollowController::class,'userProfilePic'])->middleware('auth');
Route::post('profile-pic',[FollowController::class,'updateProfilePic'])->middleware('auth');
Route::post('bg-pic',[FollowController::class,'updatebgPic'])->middleware('auth');
Route::get('/user/bg/{id}',[FollowController::class,'userbgPic'])->middleware('auth');
// Route::view('dashboard','funnab');

//Route::get('/',[FrontendCOntroller::class,'index']);
Route::get('/welcomepage',[FrontendCOntroller::class,'welcomepage'])->name('welcomepage');


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::post('/follow',[FollowController::class,'followUnfollow'])->middleware('auth');

Route::get('/user/profile/{id}',[FrontendCOntroller::class,'userAlbum'])->name('user.album');
Route::any('filter',[FrontendCOntroller::class,'filter'])->name('filter');

Route::middleware(['auth','isAdmin'])->group(function () {
Route::any('/sugagentmail',[AlbumController::class,'sugagentmail'])->name('sugagentmail')->middleware('auth');
Route::any('/sugstudentmail',[AlbumController::class,'sugstudentmail'])->name('sugstudentmail')->middleware('auth');
Route::get('/agents',[AlbumController::class,'agents'])->name('agents')->middleware('auth');
Route::get('/students',[AlbumController::class,'students'])->name('students')->middleware('auth');
Route::get('/hostels',[AlbumController::class,'hostels'])->name('hostels')->middleware('auth');
});

Route::get('/albums/{slug}/{id}',[GalleryController::class,'viewAlbum'])->name('view.album');

// Route::resource('roommate',[roommateController::class]);
Route::get('hostelrequest/{id}',[roommateController::class,'hostelrequest'])->name("hostelrequest");
Route::post('roommate/roommate/storeroommate',[roommateController::class,'storeroommate'])->name("storeroommate");
Route::get('/getalbums',[AlbumController::class,'getAlbums'])->middleware('auth');

Route::get('getimages',[GalleryController::class,'images'])->middleware('auth');;
Route::get('all/allhostel/{id}', [FrontendCOntroller::class,'allhostel'])->name("allhostel");
Route::get('image/image/{id}',[GalleryController::class,'destroy'])->name('destroy.image');
Route::get('/getlocation',[AlbumController::class,'getlocation'])->name('getlocation');

Route::get('album/albums/create',[AlbumController::class,'create'])->name('album.create')->middleware('auth');
Route::get('/albums',[AlbumController::class,'index'])->name('albums.index')->middleware('auth');
// Route::get('/good',[AlbumController::class,'bad'])->name('good')->middleware('auth');


Route::any('album/albums/store',[AlbumController::class,'store'])->name('album.store')->middleware('auth');
Route::any('storeservice',[AlbumController::class,'storeservice'])->name('service.store')->middleware('auth');
Route::any('upload/uploadserviceimage/{id}',[AlbumController::class,'uploadserviceimage'])->name('uploadserviceimage')->middleware('auth');

Route::post('album/albums/storewithroute',[AlbumController::class,'storewithroute'])->name('album.storewithroute')->middleware('auth');
Route::post('storeSchool',[CategoryController::class,'storeschool'])->name('storeSchool')->middleware('auth');
Route::post('storeLocation',[CategoryController::class,'storeLocation'])->name('storeLocation')->middleware('auth');

Route::any('album/albums/update',[AlbumController::class,'update'])->name('update.album')->middleware('auth');

Route::any('albumed/albums/updateproject',[AlbumController::class,'updateproject'])->name('update.project')->middleware('auth');

Route::get('albumed',[AlbumController::class,'edit'])->name('edit.album')->middleware('auth');
Route::get('album',[AlbumController::class,'editproject'])->name('edit.project')->middleware('auth');

// Route::delete('/albums/{id}/delete',[AlbumController::class,'destroy'])->name('destroy.album')->middleware('auth');
Route::get('album/album/delete',[AlbumController::class,'destroy'])->name('destroy.album')->middleware('auth');
Route::get('albumed/album/delete',[AlbumController::class,'destroyproject'])->name('destroy.project')->middleware('auth');

Route::get('upload/images/{id}',[GalleryController::class,'create'])->name('upload.album')->middleware('auth');
Route::any('school',[FrontendCOntroller::class,'school'])->name('school');
Route::any('uploadImage',[AlbumController::class,'uploadImage'])->name('uploadImage')->middleware('auth');
Route::any('uploadImagewithroute',[AlbumController::class,'uploadImagewithroute'])->name('uploadImagewithroute')->middleware('auth');
Route::post('uploadImage2/{id}',[GalleryController::class,'myupload'])->name('image.upload')->middleware('auth');
//Route::get('welcomepage',[FrontendCOntroller::class,'welcomepage'])->name('welcomepage');
Route::view('/selectschool','selectschool');
Route::get('createschool',function() {
    if(Auth::user()->email == env("ADMIN_EMAIL")) {
        return view('createSchool');
    }
})->name('createschool')->middleware('auth');
Route::get('createlocation',function() {
    if(Auth::user()->email == env("ADMIN_EMAIL")) {
        return view('createlocation');
    }
})->name('createlocation')->middleware('auth');

// Route::get('agentcontact',function() {
//     return(User::pluck('phone'));
// })->name('createschool')->middleware('auth');
// Route::view('createlocation','createlocation')->name('createschool')->middleware('auth');
Route::any('superadmin',[AlbumController::class,'super_admin'])->middleware('auth');
Route::any('/upgrade_user/{id}',[AlbumController::class,'upgrade_user'])->middleware('auth')->name('upgrade_user');
Route::any('/degrade_user/{id}',[AlbumController::class,'degrade_user'])->middleware('auth')->name('degrade_user');
Route::any('set_rank/{id}',[AlbumController::class,'set_rank'])->middleware('auth')->name('set_rank');
Route::any('cthadmin',[AlbumController::class,'manager'])->middleware('auth');
Route::any('sug',[AlbumController::class,'sug'])->middleware('auth');
Route::any('daily_post',[AlbumController::class,'daily_post'])->name('daily_post');
Route::any('editlocation',[AlbumController::class,'editlocation'])->name('editlocation');
Route::any('deletelocation',[AlbumController::class,'deletelocation'])->name('deletelocation');
Route::any('editschool',[AlbumController::class,'editschool'])->name('editschool');
Route::any('deleteschool',[AlbumController::class,'deleteschool'])->name('deleteschool');
Route::any('deleteuser/{id}',[AlbumController::class,'deleteuser'])->name('deleteuser');

Route::any('{slug}',[AlbumController::class,'agentpage'])->name('agentpage');

//end of new route
// require __DIR__ . '/auth.php';
