<?php

use Illuminate\Support\Facades\Route;
use App\Mail\InstadeckNewUserWelcomeMail;

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

//Laravel Welcome Page
Route::view('/welcome', 'welcome')->name('welcome');

// SisDeck portfolio
Route::get('/login-form', 'SisdeckLoginController@showLoginForm')->name('sisdeck.login.form');
Route::post('/login', 'SisdeckLoginController@login')->name('sisdeck.login');
Route::get('/register-form', 'SisdeckRegisterController@showRegistrationForm')->name('sisdeck.register.form');
Route::post('/register', 'SisdeckRegisterController@register')->name('sisdeck.register');
Route::post('/logout', 'SisdeckLoginController@logout')->name('sisdeck.logout');
Route::get('/', 'SisdeckController@index')->name('sisdeck.home');
Route::get('/academics', 'SisdeckAcademicController@index')->name('sisdeck.academics.index');
Route::post('/academics', 'SisdeckAcademicController@store')->name('sisdeck.academics.store');
Route::get('/academics/create', 'SisdeckAcademicController@create')->name('sisdeck.academics.create');
Route::get('/academics/{academic}', 'SisdeckAcademicController@show')->name('sisdeck.academics.show');
Route::delete('/academics/{academic}', 'SisdeckAcademicController@destroy')->name('sisdeck.academics.destroy');
Route::patch('/academics/{academic}', 'SisdeckAcademicController@update')->name('sisdeck.academics.update');
Route::get('/academics/{academic}/edit', 'SisdeckAcademicController@edit')->name('sisdeck.academics.edit');
Route::get('/attendances', 'SisdeckAttendanceController@index')->name('sisdeck.attendances.index');
Route::post('/attendances', 'SisdeckAttendanceController@store')->name('sisdeck.attendances.store');
Route::get('/attendances/create', 'SisdeckAttendanceController@create')->name('sisdeck.attendances.create');
Route::get('/attendances/{attendance}', 'SisdeckAttendanceController@show')->name('sisdeck.attendances.show');
Route::delete('/attendances/{attendance}', 'SisdeckAttendanceController@destroy')->name('sisdeck.attendances.destroy');
Route::patch('/attendances/{attendance}', 'SisdeckAttendanceController@update')->name('sisdeck.attendances.update');
Route::get('/attendances/{attendance}/edit', 'SisdeckAttendanceController@edit')->name('sisdeck.attendances.edit');
Route::get('/batches', 'SisdeckBatchController@index')->name('sisdeck.batches.index');
Route::post('/batches', 'SisdeckBatchController@store')->name('sisdeck.batches.store');
Route::get('/batches/create', 'SisdeckBatchController@create')->name('sisdeck.batches.create');
Route::get('/batches/{batch}', 'SisdeckBatchController@show')->name('sisdeck.batches.show');
Route::delete('/batches/{batch}', 'SisdeckBatchController@destroy')->name('sisdeck.batches.destroy');
Route::patch('/batches/{batch}', 'SisdeckBatchController@update')->name('sisdeck.batches.update');
Route::get('/batches/{batch}/edit', 'SisdeckBatchController@edit')->name('sisdeck.batches.edit');
Route::get('/class_assignments', 'SisdeckClassAssignmentController@index')->name('sisdeck.class_assignments.index');
Route::post('/class_assignments', 'SisdeckClassAssignmentController@store')->name('sisdeck.class_assignments.store');
Route::get('/class_assignments/create', 'SisdeckClassAssignmentController@create')->name('sisdeck.class_assignments.create');
Route::get('/class_assignments/{class_assignment}', 'SisdeckClassAssignmentController@show')->name('sisdeck.class_assignments.show');
Route::delete('/class_assignments/{class_assignment}', 'SisdeckClassAssignmentController@destroy')->name('sisdeck.class_assignments.destroy');
Route::patch('/class_assignments/{class_assignment}', 'SisdeckClassAssignmentController@update')->name('sisdeck.class_assignments.update');
Route::get('/class_assignments/{class_assignment}/edit', 'SisdeckClassAssignmentController@edit')->name('sisdeck.class_assignments.edit');
Route::get('/class_schedules', 'SisdeckClassScheduleController@index')->name('sisdeck.class_schedules.index');
Route::post('/class_schedules', 'SisdeckClassScheduleController@store')->name('sisdeck.class_schedules.store');
Route::get('/class_schedules/create', 'SisdeckClassScheduleController@create')->name('sisdeck.class_schedules.create');
Route::get('/class_schedules/{class_schedule}', 'SisdeckClassScheduleController@show')->name('sisdeck.class_schedules.show');
Route::delete('/class_schedules/{class_schedule}', 'SisdeckClassScheduleController@destroy')->name('sisdeck.class_schedules.destroy');
Route::patch('/class_schedules/{class_schedule}', 'SisdeckClassScheduleController@update')->name('sisdeck.class_schedules.update');
Route::get('/class_schedules/{class_schedule}/edit', 'SisdeckClassScheduleController@edit')->name('sisdeck.class_schedules.edit');
Route::get('/classes', 'SisdeckClassController@index')->name('sisdeck.classes.index');
Route::post('/classes', 'SisdeckClassController@store')->name('sisdeck.classes.store');
Route::get('/classes/create', 'SisdeckClassController@create')->name('sisdeck.classes.create');
Route::get('/classes/{class}', 'SisdeckClassController@show')->name('sisdeck.classes.show');
Route::delete('/classes/{class}', 'SisdeckClassController@destroy')->name('sisdeck.classes.destroy');
Route::patch('/classes/{class}', 'SisdeckClassController@update')->name('sisdeck.classes.update');
Route::get('/classes/{class}/edit', 'SisdeckClassController@edit')->name('sisdeck.classes.edit');
Route::get('/classrooms', 'SisdeckClassroomController@index')->name('sisdeck.classrooms.index');
Route::post('/classrooms', 'SisdeckClassroomController@store')->name('sisdeck.classrooms.store');
Route::get('/classrooms/create', 'SisdeckClassroomController@create')->name('sisdeck.classrooms.create');
Route::get('/classrooms/{classroom}', 'SisdeckClassroomController@show')->name('sisdeck.classrooms.show');
Route::delete('/classrooms/{classroom}', 'SisdeckClassroomController@destroy')->name('sisdeck.classrooms.destroy');
Route::patch('/classrooms/{classroom}', 'SisdeckClassroomController@update')->name('sisdeck.classrooms.update');
Route::get('/classrooms/{classroom}/edit', 'SisdeckClassroomController@edit')->name('sisdeck.classrooms.edit');
Route::get('/courses', 'SisdeckCourseController@index')->name('sisdeck.courses.index');
Route::post('/courses', 'SisdeckCourseController@store')->name('sisdeck.courses.store');
Route::get('/courses/create', 'SisdeckCourseController@create')->name('sisdeck.courses.create');
Route::get('/courses/{course}', 'SisdeckCourseController@show')->name('sisdeck.courses.show');
Route::delete('/courses/{course}', 'SisdeckCourseController@destroy')->name('sisdeck.courses.destroy');
Route::patch('/courses/{course}', 'SisdeckCourseController@update')->name('sisdeck.courses.update');
Route::get('/courses/{course}/edit', 'SisdeckCourseController@edit')->name('sisdeck.courses.edit');
Route::get('/days', 'SisdeckDayController@index')->name('sisdeck.days.index');
Route::post('/days', 'SisdeckDayController@store')->name('sisdeck.days.store');
Route::get('/days/create', 'SisdeckDayController@create')->name('sisdeck.days.create');
Route::get('/days/{day}', 'SisdeckDayController@show')->name('sisdeck.days.show');
Route::delete('/days/{day}', 'SisdeckDayController@destroy')->name('sisdeck.days.destroy');
Route::patch('/days/{day}', 'SisdeckDayController@update')->name('sisdeck.days.update');
Route::get('/days/{day}/edit', 'SisdeckDayController@edit')->name('sisdeck.days.edit');
Route::get('/faculties', 'SisdeckFacultyController@index')->name('sisdeck.faculties.index');
Route::post('/faculties', 'SisdeckFacultyController@store')->name('sisdeck.faculties.store');
Route::get('/faculties/create', 'SisdeckFacultyController@create')->name('sisdeck.faculties.create');
Route::get('/faculties/{faculty}', 'SisdeckFacultyController@show')->name('sisdeck.faculties.show');
Route::delete('/faculties/{faculty}', 'SisdeckFacultyController@destroy')->name('sisdeck.faculties.destroy');
Route::patch('/faculties/{faculty}', 'SisdeckFacultyController@update')->name('sisdeck.faculties.update');
Route::get('/faculties/{faculty}/edit', 'SisdeckFacultyController@edit')->name('sisdeck.faculties.edit');
Route::get('/levels', 'SisdeckLevelController@index')->name('sisdeck.levels.index');
Route::post('/levels', 'SisdeckLevelController@store')->name('sisdeck.levels.store');
Route::get('/levels/create', 'SisdeckLevelController@create')->name('sisdeck.levels.create');
Route::get('/levels/{level}', 'SisdeckLevelController@show')->name('sisdeck.levels.show');
Route::delete('/levels/{level}', 'SisdeckLevelController@destroy')->name('sisdeck.levels.destroy');
Route::patch('/levels/{level}', 'SisdeckLevelController@update')->name('sisdeck.levels.update');
Route::get('/levels/{level}/edit', 'SisdeckLevelController@edit')->name('sisdeck.levels.edit');
Route::get('/roles', 'SisdeckRoleController@index')->name('sisdeck.roles.index');
Route::post('/roles', 'SisdeckRoleController@store')->name('sisdeck.roles.store');
Route::get('/roles/create', 'SisdeckRoleController@create')->name('sisdeck.roles.create');
Route::get('/roles/{role}', 'SisdeckRoleController@show')->name('sisdeck.roles.show');
Route::delete('/roles/{role}', 'SisdeckRoleController@destroy')->name('sisdeck.roles.destroy');
Route::patch('/roles/{role}', 'SisdeckRoleController@update')->name('sisdeck.roles.update');
Route::get('/roles/{role}/edit', 'SisdeckRoleController@edit')->name('sisdeck.roles.edit');
Route::get('/semesters', 'SisdeckSemesterController@index')->name('sisdeck.semesters.index');
Route::post('/semesters', 'SisdeckSemesterController@store')->name('sisdeck.semesters.store');
Route::get('/semesters/create', 'SisdeckSemesterController@create')->name('sisdeck.semesters.create');
Route::get('/semesters/{semester}', 'SisdeckSemesterController@show')->name('sisdeck.semesters.show');
Route::delete('/semesters/{semester}', 'SisdeckSemesterController@destroy')->name('sisdeck.semesters.destroy');
Route::patch('/semesters/{semester}', 'SisdeckSemesterController@update')->name('sisdeck.semesters.update');
Route::get('/semesters/{semester}/edit', 'SisdeckSemesterController@edit')->name('sisdeck.semesters.edit');
Route::get('/shifts', 'SisdeckShiftController@index')->name('sisdeck.shifts.index');
Route::post('/shifts', 'SisdeckShiftController@store')->name('sisdeck.shifts.store');
Route::get('/shifts/create', 'SisdeckShiftController@create')->name('sisdeck.shifts.create');
Route::get('/shifts/{shift}', 'SisdeckShiftController@show')->name('sisdeck.shifts.show');
Route::delete('/shifts/{shift}', 'SisdeckShiftController@destroy')->name('sisdeck.shifts.destroy');
Route::patch('/shifts/{shift}', 'SisdeckShiftController@update')->name('sisdeck.shifts.update');
Route::get('/shifts/{shift}/edit', 'SisdeckShiftController@edit')->name('sisdeck.shifts.edit');
Route::get('/students', 'SisdeckStudentController@index')->name('sisdeck.students.index');
Route::post('/students', 'SisdeckStudentController@store')->name('sisdeck.students.store');
Route::get('/students/create', 'SisdeckStudentController@create')->name('sisdeck.students.create');
Route::get('/students/{student}', 'SisdeckStudentController@show')->name('sisdeck.students.show');
Route::delete('/students/{student}', 'SisdeckStudentController@destroy')->name('sisdeck.students.destroy');
Route::patch('/students/{student}', 'SisdeckStudentController@update')->name('sisdeck.students.update');
Route::get('/students/{student}/edit', 'SisdeckStudentController@edit')->name('sisdeck.students.edit');
Route::get('/teachers', 'SisdeckTeacherController@index')->name('sisdeck.teachers.index');
Route::post('/teachers', 'SisdeckTeacherController@store')->name('sisdeck.teachers.store');
Route::get('/teachers/create', 'SisdeckTeacherController@create')->name('sisdeck.teachers.create');
Route::get('/teachers/{teacher}', 'SisdeckTeacherController@show')->name('sisdeck.teachers.show');
Route::delete('/teachers/{teacher}', 'SisdeckTeacherController@destroy')->name('sisdeck.teachers.destroy');
Route::patch('/teachers/{teacher}', 'SisdeckTeacherController@update')->name('sisdeck.teachers.update');
Route::get('/teachers/{teacher}/edit', 'SisdeckTeacherController@edit')->name('sisdeck.teachers.edit');
Route::get('/times', 'SisdeckTimeController@index')->name('sisdeck.times.index');
Route::post('/times', 'SisdeckTimeController@store')->name('sisdeck.times.store');
Route::get('/times/create', 'SisdeckTimeController@create')->name('sisdeck.times.create');
Route::get('/times/{time}', 'SisdeckTimeController@show')->name('sisdeck.times.show');
Route::delete('/times/{time}', 'SisdeckTimeController@destroy')->name('sisdeck.times.destroy');
Route::patch('/times/{time}', 'SisdeckTimeController@update')->name('sisdeck.times.update');
Route::get('/times/{time}/edit', 'SisdeckTimeController@edit')->name('sisdeck.times.edit');
Route::get('/transactions', 'SisdeckTransactionController@index')->name('sisdeck.transactions.index');
Route::post('/transactions', 'SisdeckTransactionController@store')->name('sisdeck.transactions.store');
Route::get('/transactions/create', 'SisdeckTransactionController@create')->name('sisdeck.transactions.create');
Route::get('/transactions/{transaction}', 'SisdeckTransactionController@show')->name('sisdeck.transactions.show');
Route::delete('/transactions/{transaction}', 'SisdeckTransactionController@destroy')->name('sisdeck.transactions.destroy');
Route::patch('/transactions/{transaction}', 'SisdeckTransactionController@update')->name('sisdeck.transactions.update');
Route::get('/transactions/{transaction}/edit', 'SisdeckTransactionController@edit')->name('sisdeck.transactions.edit');
Route::get('/users', 'SisdeckUserController@index')->name('sisdeck.users.index');
Route::post('/users', 'SisdeckUserController@store')->name('sisdeck.users.store');
Route::get('/users/create', 'SisdeckUserController@create')->name('sisdeck.users.create');
Route::get('/users/{user}', 'SisdeckUserController@show')->name('sisdeck.users.show');
Route::delete('/users/{user}', 'SisdeckUserController@destroy')->name('sisdeck.users.destroy');
Route::patch('/users/{user}', 'SisdeckUserController@update')->name('sisdeck.users.update');
Route::get('/users/{user}/edit', 'SisdeckUserController@edit')->name('sisdeck.users.edit');