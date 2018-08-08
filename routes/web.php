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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('staff','StaffController');

Route::resource('student','StudentController');

Route::resource('authentication','AuthController');


// Route::post('/student_login', function(){
// 	echo "you can post";
// });

Route::get('/stu_login', 'StudentController@stu_login')->name('stu_login');
Route::get('/stu_dash', 'StudentController@stu_dash')->name('stu_dash');
Route::get('/stud_grades', 'StaffController@stud_grades')->name('stud_grades');
Route::get('/stu_dashboard', 'StudentController@stu_dashboard')->name('stu_dashboard');
Route::get('/stud_profile', 'StudentController@stud_profile')->name('stud_profile');
Route::get('/stud_settings', 'StudentController@stud_settings')->name('stud_settings');
Route::get('/stud_detail/{id}', 'StudentController@stud_detail')->name('stud_detail');
Route::post('/student_login', 'StudentController@student_login')->name('student_login');
Route::post('/student_registration', 'StudentController@student_registration')->name('student_registration');
Route::post('/newcoursereg', 'StudentController@newcoursereg')->name('newcoursereg');


Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/blog', 'HomeController@blog')->name('blog');


Route::get('/login', 'StaffController@update_profile')->name('update_profile');
Route::get('/login', 'StaffController@login')->name('login');
Route::get('/staff_dash', 'StaffController@staff_dash')->name('staff_dash');
Route::get('/grading_system', 'StaffController@grading_system')->name('grading_system');
Route::post('/staff_login', 'StaffController@staff_login')->name('staff_login');
Route::get('/list_of_ass', 'StaffController@list_of_ass')->name('list_of_ass');
Route::get('/reg_student', 'StaffController@reg_student')->name('reg_student');
Route::get('/staff_dash_home', 'StaffController@staff_dash_home')->name('staff_dash_home');
Route::get('/lec_assignment', 'StudentController@lec_assignment')->name('lec_assignment');
Route::get('/awarded_grades', 'StudentController@awarded_grades')->name('awarded_grades');
Route::get('/reg_new_lec', 'StudentController@reg_new_lec')->name('reg_new_lec');
Route::get('/staff_profile', 'StaffController@staff_profile')->name('staff_profile');
Route::get('/staff_settings', 'StaffController@staff_settings')->name('staff_settings');
Route::get('/staff_detail/{id}', 'StaffController@staff_detail')->name('staff_detail');
Route::post('/staff_registration', 'StaffController@staff_registration')->name('staff_registration');
Route::post('/dispatch_ass', 'StaffController@dispatch_ass')->name('dispatch_ass');