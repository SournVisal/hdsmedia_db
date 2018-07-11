<?php

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

Route::get('/', function () {
    return view('frontend/viewfront/slider');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

//backend Dashboard
//route cache image for show in frontend
Route::get('/photo/{filename}','PhotoController@photo');
//view dashboard
Route::get('/Boss/dashboard','BossBackend\DashboardController@Index');

//view slider
Route::get('/Boss/dashboard/slider','BossBackend\SlideController@slider');
//insert slide
Route::post('/saveSlide','BossBackend\SlideController@saveSlide');
//edit slide
Route::get('/editSlide/{id}','BossBackend\SlideController@editSlide');
//updateSlider
Route::post('/updateSlider','BossBackend\SlideController@updateSlide');
//delete slide
Route::get('deleteSlide/{id}','BossBackend\SlideController@destroySlide');

//view Team Mojo
Route::get('/Boss/dashboard/Mojo','BossBackend\MojoController@Mojo');
//save image Mojo to database
Route::post('/saveMojo','BossBackend\MojoController@saveMojo');
//edit image Team Mojo
Route::get('/editeMojo/{id}','BossBackend\MojoController@editMojo');
//update image Team mojo
Route::post('/updateMojo','BossBackend\MojoController@updateMojo');
//for delete image team mojo
Route::get('/deletMojo/{id}','BossBackend\MojoController@destroyMojo');



//view Meet our team
Route::get('Boss/dashboard/ourTeam','BossBackend\OurTeamController@index');
//insert to db
Route::post('/saveTeam','BossBackend\OurTeamController@store');
//edit ourTeam
Route::get('editeTeam/{id}','BossBackend\OurTeamController@edit');
//update ourTeam
Route::post('UpdateTeam','BossBackend\OurTeamController@update');
//delete ourteam
Route::get('deletOurTeam/{id}','BossBackend\OurTeamController@destroy');
//**************************/////
//image our team
Route::get('Boss/dashboard/imgOurTeam','BossBackend\OurTeamController@indexImg');
//insert into db
Route::post('/saveImg','BossBackend\OurTeamController@storeImg');
//edit image
Route::get('editImageTeam/{id}','BossBackend\OurTeamController@editImg');
//update image
Route::post('updateImgTeam','BossBackend\OurTeamController@updateImg');
//delete image
Route::get('/deleteImg/{id}','BossBackend\OurTeamController@destroyImg');



//view photo gallery
//view catGallery
Route::get('Boss/dashboard/catGallery','BossBackend\photoGalleryController@indexCat');
//insert to db
Route::post('/saveCat','BossBackend\photoGalleryController@storeCat');
//edit category
Route::get('/editCatGallery/{id}','BossBackend\photoGalleryController@editCatGallery');
//update category
Route::post('/updateCatGallery','BossBackend\photoGalleryController@updateCat');
//delete category
Route::get('/deleteCat/{id}','BossBackend\photoGalleryController@destroyCat');
///view gallery
Route::get('Boss/dashboard/Gallery','BossBackend\photoGalleryController@gallery');
//insert ot db
Route::post('/saveGallery','BossBackend\photoGalleryController@storeGallery');
//for edit gallery
Route::get('/editGallery/{id}','BossBackend\photoGalleryController@editGallery');
//update gallery
Route::post('/updateGallery','BossBackend\photoGalleryController@updateGallery');
//for delete gallery
Route::get('/deleteGallery/{id}','BossBackend\photoGalleryController@destroyGallery');






////view career controller
Route::get('Boss/dashboard/Careers','BossBackend\CareerController@index');
//insert to db
Route::post('/saveCar','BossBackend\CareerController@storeCar');
//for edit career
Route::get('/editCareer/{id}','BossBackend\CareerController@editCareer');
//update career
Route::post('/updateCareer','BossBackend\CareerController@updateCareer');
//for delete career
Route::get('/deleteCareer/{id}','BossBackend\CareerController@destroyCareer');









//***************************&&****************************
//frontend controller
//view about
Route::get('about','Frontend\FrontendController@index');
//view team
Route::get('teamMojo','Frontend\FrontendController@teammojo');
//show slider
Route::get('/','Frontend\FrontendController@showSlider');
//service
Route::get('/service','Frontend\FrontendController@service');
//ourTeam
Route::get('/ourTeam','Frontend\FrontendController@ourTeam');
//ourTeam member
Route::get('/teamMember','Frontend\FrontendController@memberTeam');
//for career
Route::get('/career','Frontend\FrontendController@career');
//for career detail
Route::get('/careerDetail/{id}','Frontend\FrontendController@careerDetail');
//for photo album
Route::get('/photoAlbum','Frontend\FrontendController@photoAlbum');
//for photo Detail
Route::get('/photoDetail/{id}','Frontend\FrontendController@photoDetail');
