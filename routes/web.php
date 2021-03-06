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

/*-----==========Front End==========-----*/
Route::get('/','FrontController@home');
Route::get('/home','FrontController@home')->name('home');
Route::get('/galeri','FrontController@galeri')->name('galeri');
Route::get('/service','FrontController@service')->name('service');
Route::get('/about','FrontController@about')->name('about');
Route::get('/contact','FrontController@contact')->name('contact');
/*-----==========Front End==========-----*/

Auth::routes();

Route::group(['middleware'=>['auth']],function(){

    /*-----==========Back End==========-----*/
    Route::get('/my-admin','PrDefaultController@index')->name('my-admin');
        // Landing Top
        Route::get('/my-admin/{id}/editTop','PrDefaultController@editTop');
        Route::post('/my-admin/{id}/updateTop','PrDefaultController@updateTop');
        Route::get('/my-admin/{id}/editOther','PrDefaultController@editOther');
        Route::post('/my-admin/{id}/updateOther','PrDefaultController@updateOther');

    // Secondary Layout
    // --Galeri
    Route::get('/my-galeri','ScGaleriController@galeri')->name('sc-galeri');
    Route::get('/my-galeri/listGaleri','ScGaleriController@getGaleriList')->name('listGaleri');
    Route::post('/my-galeri/addGaleri','ScGaleriController@addGaleri');
    Route::get('/my-galeri/{id}/editGaleri','ScGaleriController@editGaleri');
    Route::post('/my-galeri/updateGaleri','ScGaleriController@updateGaleri');
    Route::delete('/deleteGaleri/{id}','ScGaleriController@deleteGaleri');
    // --Galeri -> list
    Route::get('/my-galeri/listGaleriLabel','ScGaleriController@getGaleriLabelList')->name('listGaleriLabel');
    Route::post('/my-galeri/addLabel','ScGaleriController@addLabel');
    Route::get('/my-galeri/{id}/editLabel','ScGaleriController@editLabel');
    Route::post('/my-galeri/updateLabel','ScGaleriController@updateLabel');
    Route::delete('/deleteLabel/{id}','ScGaleriController@deleteLabel');
    // --Service
    Route::get('/my-service','ScServiceController@service')->name('sc-service');
    Route::get('/my-service/listService','ScServiceController@getServiceList')->name('listService');
    Route::post('/my-service/addService','ScServiceController@addService');
    Route::get('/my-service/{id}/editService','ScServiceController@editService');
    Route::post('/my-service/updateService','ScServiceController@updateService');
    Route::delete('/deleteService/{id}','ScServiceController@deleteService');
    // --About
    Route::get('/my-sambutan','ScAboutController@sambutan')->name('sc-sambutan');
    Route::get('/my-sambutan/{id}/editSambutan','ScAboutController@editSambutan');
    Route::post('/my-sambutan/{id}/updateSambutan','ScAboutController@updateSambutan');
    // --About -> best
    Route::get('/my-sambutan/listBest','ScAboutController@getListBest')->name('listBest');
    Route::post('/my-sambutan/addBest','ScAboutController@addBest');
    Route::get('/my-sambutan/{id}/editBest','ScAboutController@editBest');
    Route::post('/my-sambutan/updateBest','ScAboutController@updateBest');
    Route::delete('/deleteBest/{id}','ScAboutController@deleteBest');
    // --About -> team
    Route::get('/my-team','ScAboutController@team')->name('sc-team');
    Route::get('/my-team/listTeam','ScAboutController@getListTeam')->name('listTeam');
    Route::post('/my-team/addTeam','ScAboutController@addTeam');
    Route::get('/my-team/{id}/editTeam','ScAboutController@editTeam');
    Route::post('/my-team/updateTeam','ScAboutController@updateTeam');
    Route::delete('/deleteTeam/{id}','ScAboutController@deleteTeam');
    // --Contact
    Route::get('/my-kontak','ScContactController@kontak')->name('sc-kontak');
    Route::get('/my-kontak/{id}/editKontak','ScContactController@editKontak');
    Route::post('/my-kontak/{id}/updateKontak','ScContactController@updateKontak');
    // --Setting
    Route::get('/my-setting','UserSettingController@setting')->name('user-setting');
    Route::get('/my-setting/{id}/editSetting','UserSettingController@editSetting');
    Route::post('/my-setting/{id}/updateSetting','UserSettingController@updateSetting');

    /*-----==========Back End==========-----*/

});