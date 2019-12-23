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

Route::get('/', 'WelcomeController@index')->name('index');

// Sign In routing
Route::get('/signIn', 'SignInController@index')->name('signIn.index');
Route::post('/signIn', 'SignInController@verify')->name('signIn.verify');

// Sign Up routing
Route::get('/signUp', 'SignUpController@index')->name('signUp.index');
Route::post('/signUp', 'SignUpController@store')->name('signUp.store');

// Sign Out routing
Route::get('/signOut', 'SignOutController@index')->name('signOut.index');

// Check session
Route::group(['middleware'=>['session']], function(){
    //*..STAFF..*..
    Route::get('/staff', 'StaffController@index')->name('staff.index');
    
    // Staff Profile......+ Update profile...
    Route::get('/staff/profile', 'StaffController@show')->name('staff.profile');
    Route::post('/staff/profile', 'StaffController@update')->name('staff.updateProfile');

    // Staff...Show staff's Own Schedule...
    Route::get('/staff/own_schedule/{fname}/{lname}', 'StaffController@own_schedule')->name('staff.own_schedule');

    // Staff Change Password...
    Route::get('/staff/changePassword', 'StaffController@changePassword')->name('staff.changePassword');
    Route::post('/staff/changePassword', 'StaffController@updatePassword')->name('staff.updatePassword');

    // Staff Change Profile Picture...
    Route::get('/staff/changeProfilePicture', 'StaffController@changeProfilePicture')->name('staff.changeProfilePicture');
    Route::post('/staff/changeProfilePicture', 'StaffController@updateProfilePicture')->name('staff.updateProfilePicture');

    // Staff...Show Doctor List...
    Route::get('/staff/staff_doctorList', 'StaffController@staff_doctorList')->name('staff.staff_doctorList');

    // Staff...Show Doctor Schedule...
    Route::get('/staff/doctorSchedule/{name}', 'StaffController@doctorSchedule')->name('staff.doctorSchedule');
    
    // Staff...Show User List...
    Route::get('/staff/staff_userList', 'StaffController@staff_userList')->name('staff.staff_userList');
    
    //Staff...Add Appointment...
    Route::get('/staff/appointment', 'AppointmentController@index')->name('staff.appointment');
    Route::post('/staff/appointment', 'AppointmentController@store')->name('staff.appointment');
    
    //Staff...Show Appointment List...
    Route::get('/staff/appointmentList', 'AppointmentController@show')->name('staff.appointmentShow');
    
    //Staff...Delete Appointment...
    //Route::get('/staff/destroy/{id}', 'AppointmentController@destroy')->name('staff.destroyAppointment');
    
    //Staff...Add Allotment...
    Route::get('/staff/allotment', 'AllotmentController@index')->name('staff.allotment');
    Route::post('/staff/allotment', 'AllotmentController@store')->name('staff.storeAllotment');
    
    //Staff...Show Allotment List...
    Route::get('/staff/allotmentList', 'AllotmentController@show')->name('staff.allotmentShow');

    // Staff...Add Services...
    Route::get('/staff/addServices', 'ServicesController@create')->name('staff.createServices');
    Route::post('/staff/addServices', 'ServicesController@store')->name('staff.storeServices');
    
    //Staff...Delete Services...
    Route::get('/staff/destroy/{id}', 'ServicesController@destroy')->name('staff.destroyServices');
    
    //Staff...Show Services List...
    Route::get('/stasff/servicesList', 'ServicesController@servicesList')->name('staff.servicesList');
    
    //Staff...Messages to Admin,Doctor,User...
    Route::get('/staff/messages', 'MessageController@index')->name('staff.messages');
    Route::post('/staff/messages', 'MessageController@store')->name('staff.storeMessages');
    
});