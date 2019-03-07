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

/*-----------------------------frontend Start--------------------------------------*/

Route::group(['namespace'=>'frontend'],function() {


    Route::get('/','IndexController@index')->name('index');
    Route::get('/About','IndexController@about')->name('about');
    Route::get('/Shop','IndexController@shop')->name('shop');
    Route::get('/Contact','IndexController@contact')->name('contact');
    Route::post('/Contact_Action','IndexController@contactactions')->name('contact-action');
    Route::get('/Event','IndexController@event')->name('event');
    Route::get('/Event_details/{id}','IndexController@eventdetails')->name('eventdetails');
    Route::get('/Menu/{id}','IndexController@menu')->name('menu');
    Route::get('/Services','IndexController@service')->name('services');
    Route::get('/Rooms/{slug}','IndexController@room')->name('room');
    Route::get('/Booking/{id}','IndexController@booking')->name('booking');
    Route::get('cart_show','IndexController@cartshow')->name('cart-show');
    Route::get('cart_checkout','CartController@checkout')->name('cart-checkout');

/*----------------------- cart operation   ----------------------*/

    Route::post('cart/store','CartController@store')->name('cart-store');
    Route::post('cart_destroy','CartController@destroy')->name('cart-destroy');
    Route::get('cart-delete','CartController@delete')->name('cart.delete');
    Route::get('cart-update','CartController@update')->name('cart.update');



});




/*-----------------------------Backend Start--------------------------------------*/

/*Route::get('/register','backend\admincontroller@register')->name('adminregister');*/

Route::get('/@dashboard@','backend\admincontroller@login');
Route::post('/@dashboard@','backend\admincontroller@loginaction')->name('admin-login');
Route::post('/logout','backend\admincontroller@logout')->name('logout');
Route::post('/register','backend\admincontroller@registeraction')->name('admin-register');



Route::group(['namespace'=>'backend','middleware'=>'auth','prefix'=>'dashboard'],function() {

    Route::get('/', 'admincontroller@index')->name('dashboard');
    Route::get('/profile', 'admincontroller@profile')->name('admin-profile');
    Route::post('/profile', 'admincontroller@profileaction')->name('adminprofile');
    Route::post('/profile/password', 'admincontroller@passwordaction')->name('adminpassword');
    Route::post('/profile/delete', 'admincontroller@adminprofiledelete')->name('admin-profile-delete');
    Route::post('/register','admincontroller@registeraction')->name('admin-register');

    /*-----------------------------Backend contact--------------------------------------*/


    Route::post('contact-message', 'admincontroller@contactMessages')->name('contactaction');
    Route::get('contact-message', 'admincontroller@viewContactMessages')->name('contact-message');
    Route::get('message-view', 'admincontroller@messageview')->name('message-view');
    Route::post('message-delete', 'admincontroller@msgdelete')->name('message-delete');
    Route::get('Confirm-delete/{id}', 'admincontroller@confirm')->name('confirm-delete');
    Route::get('Approve', 'admincontroller@approve')->name('approve');
    Route::get('Approve-list', 'admincontroller@approvelist')->name('approve-list');
    Route::post('Approve-list-delete', 'admincontroller@approvelistdelete')->name('approve-list-delete');



    /*-----------------------------Backend logo--------------------------------------*/

    Route::get('/site-configuration', 'SiteController@index')->name('admin-site');
    Route::post('/Logo-Update', 'SiteController@add')->name('admin-logo');
    Route::post('/hotel-Update', 'SiteController@hoteladd')->name('admin-hotel-update');

    /*-----------------------------Backend slider--------------------------------------*/

    Route::get('/Slider', 'SliderController@index')->name('admin-slider');
    Route::post('/Slider-Action', 'SliderController@add')->name('admin-slider-action');
    Route::post('/Slider-Delete', 'SliderController@delete')->name('admin-slider-delete');
    /*-----------------------------Backend our story--------------------------------------*/

    Route::get('/Our_Story', 'StoryController@index')->name('admin-our-story');
    Route::post('/Our_Story-Update', 'StoryController@update')->name('admin-our-story-update');

    /*-----------------------------Backend Team--------------------------------------*/

    Route::get('/Our_Team', 'TeamController@index')->name('admin-team');
    Route::post('/Our_Team/Add', 'TeamController@add')->name('admin-team-action');
    Route::post('/Our_Team/Delete', 'TeamController@delete')->name('admin-team-delete');
    Route::get('/Our_Team/Edit', 'TeamController@edit')->name('admin-team-edit');
    Route::post('/Our_Team/Edit/Update', 'TeamController@update')->name('admin-team-edit-update');

    /*-----------------------------Backend Menu--------------------------------------*/

    Route::get('/Our_Menu', 'MenuController@index')->name('admin-menu');
    Route::post('/Our_Menu_Add', 'MenuController@add')->name('admin-menu-add');
    Route::post('/Our_Menu_Delete', 'MenuController@delete')->name('admin-menu-delete');
    Route::get('/Our_Menu_Edit', 'MenuController@edit')->name('admin-menu-edit');
    Route::post('/Our_Menu_Update', 'MenuController@update')->name('admin-menu-update');

    /*-----------------------------Backend SubMenu--------------------------------------*/

    Route::get('/Our_Submenu', 'SubmenuController@index')->name('admin-submenu');
    Route::post('/Our_Submenu_Action', 'SubmenuController@add')->name('admin-submenu-add');
    Route::get('/submenu_category', 'SubmenuController@search')->name('admin-submenu-search');
    Route::get('/Our_Submenu_Edit', 'SubmenuController@edit')->name('admin-submenu-edit');
    Route::post('/Our_Submenu_Delete', 'SubmenuController@delete')->name('admin-submenu-delete');
    Route::post('/Our_Submenu_Update', 'SubmenuController@update')->name('admin-submenu-update');

    /*-----------------------------Backend gallery--------------------------------------*/

    Route::get('/Gallery', 'GalleryController@index')->name('admin-gallery');
    Route::post('/Gallery-Action', 'GalleryController@add')->name('admin-gallery-add');
    Route::post('/Gallery-Delete', 'GalleryController@delete')->name('admin-gallery-delete');

    /*-----------------------------Backend opening--------------------------------------*/
    Route::get('/Opening_Hour', 'OpeningController@index')->name('admin-opening');
    Route::post('/Opening_Hour/Update', 'OpeningController@update')->name('admin-opening-update');

    /*-----------------------------Backend event--------------------------------------*/

    Route::get('/Event', 'EventController@index')->name('admin-event');
    Route::post('/Event-Action', 'EventController@add')->name('admin-event-add');
    Route::post('/Event-Delete', 'EventController@delete')->name('admin-event-delete');
    Route::get('/Event-Edit', 'EventController@edit')->name('admin-event-edit');
    Route::post('/Event-Update', 'EventController@update')->name('admin-event-update');

    /*-----------------------------Backend testimonial--------------------------------------*/

    Route::get('/Testimonial', 'TestimonialController@index')->name('admin-testimonial');
    Route::post('/Testimonial_action', 'TestimonialController@add')->name('admin-testimonial-add');
    Route::post('/Testimonial_delete', 'TestimonialController@delete')->name('admin-testimonial-delete');
    Route::get('/Testimonial_edit/{id}', 'TestimonialController@edit')->name('admin-testimonial-edit');
    Route::post('/Testimonial_update/{id}', 'TestimonialController@update')->name('admin-testimonial-update');

    /*-----------------------------Backend testimonial--------------------------------------*/

    Route::get('/Count', 'CountController@index')->name('admin-count');
    Route::post('/Count_update/{id}', 'CountController@update')->name('admin-count-update');

    /*-----------------------------Backend services--------------------------------------*/

    Route::get('/Services', 'ServiceController@index')->name('admin-services');
    Route::post('/Services_action', 'ServiceController@add')->name('admin-services-add');
    Route::post('/Services_delete/{id}', 'ServiceController@delete')->name('admin-services-delete');

    /*-----------------------------Backend room--------------------------------------*/
    Route::get('/Room', 'RoomController@index')->name('admin-room');
    Route::post('/Room_action', 'RoomController@add')->name('admin-room-add');
    Route::post('/Room_delete/{id}', 'RoomController@delete')->name('admin-room-delete');
    Route::get('/Room_edit/{id}', 'RoomController@edit')->name('admin-room-edit');
    Route::post('/Room_image_add', 'RoomController@imageadd')->name('admin-room-image-add');
    Route::post('/Room_image_delete/{id}', 'RoomController@imagedelete')->name('admin-room-image-delete');
    Route::post('/Room_update/{id}', 'RoomController@update')->name('admin-room-update');

    /*-----------------------------Backend booking_status--------------------------------------*/

    Route::post('/Booking_status_update/{id}', 'RoomController@booking_status')->name('admin-booking_status_update');


});

