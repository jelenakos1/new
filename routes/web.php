<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

//AttendanceGroup

Route::prefix('AttendanceGroups')->group(function() {
     //create
  Route::get('create','App\HTTp\Controllers\AttendanceGroupController@create')->name('attendancegroup.create');
  Route::post('store','App\HTTp\Controllers\AttendanceGroupController@store')->name('attendancegroup.store');
    //edit
    Route::get('edit/{AttendanceGroup}','App\HTTp\Controllers\AttendanceGroupController@edit')->name('attendancegroup.edit');
    Route::post('update/{AttendanceGroup}','App\HTTp\Controllers\AttendanceGroupController@update')->name('attendancegroup.update');
    //index
  Route::get('','App\HTTp\Controllers\AttendancegroupController@index')->name('Attendancegroup.index');
  //delete
  Route::post('destroy/{AttendanceGroup}','App\HTTp\Controllers\AttendanceGroupController@destroy')->name('attendancegroup.destroy');
  //show
  Route::get('show/{AttendanceGroup}','App\HTTp\Controllers\AttendanceGroupController@show')->name('attendancegroup.show');

});

//Students
Route::get('/', function () {
    return view('welcome');
});
Route::prefix('students')->group(function() {
    //index
  Route::get('','App\HTTp\Controllers\StudentController@index')->name('student.index');
  //edit
  Route::get('edit/{student}','App\HTTp\Controllers\StudentController@edit')->name('student.edit');
  Route::post('update/{student}','App\HTTp\Controllers\StudentController@update')->name('student.update');
  //create
  Route::get('create','App\HTTp\Controllers\StudentController@create')->name('student.create');
  Route::post('store','App\HTTp\Controllers\StudentController@store')->name('student.store');
  //delete
  Route::post('destroy/{student}','App\HTTp\Controllers\StudentController@destroy')->name('student.destroy');
  //show
  Route::get('show/{student}','App\HTTp\Controllers\StudentController@show')->name('student.show');
});
//Schoolnews
Route::get('/', function () {
    return view('welcome');
});
Route::prefix('schoolnews')->group(function() {
    //index
  Route::get('','App\HTTp\Controllers\SchoolnewController@index')->name('schoolnew.index');
  //edit
  Route::get('edit/{schoolnew}','App\HTTp\Controllers\SchoolnewController@edit')->name('schoolnew.edit');
  Route::post('update/{schoolnew}','App\HTTp\Controllers\SchoolnewController@update')->name('schoolnew.update');
  //create
  Route::get('create','App\HTTp\Controllers\SchoolnewController@create')->name('schoolnew.create');
  Route::post('store','App\HTTp\Controllers\SchoolnewController@store')->name('schoolnew.store');
  //delete
  Route::post('destroy/{schoolnew}','App\HTTp\Controllers\SchoolnewController@destroy')->name('schoolnew.destroy');
  //show
  Route::get('show/{schoolnew}','App\HTTp\Controllers\SchoolnewController@show')->name('schoolnew.show');
});