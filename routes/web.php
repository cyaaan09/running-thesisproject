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

Route::get('/instructor', 'InstructorController@get')->name('instructor');
Route::POST('/instructor', 'InstructorController@post')->name('instructor.post');
Route::get('/instructor/{id}', 'InstructorController@delete')->name('instructor.delete');


Route::get('/course', 'CourseController@get')->name('course');
Route::POST('/course', 'CourseController@post')->name('course.post');
Route::get('/course/{id}', 'CourseController@delete')->name('course.delete');


Route::get('/subject', 'SubjectController@get')->name('subject');
Route::POST('/subject', 'SubjectController@post')->name('subject.post');
Route::get('/subject/{id}', 'SubjectController@delete')->name('subject.delete');


Route::get('/schedule', 'ScheduleController@get')->name('schedule');
Route::POST('/schedule/post', 'ScheduleController@post')->name('schedule.post');
Route::POST('/schedule/update', 'ScheduleController@update_schedule');

Route::get('/room', 'RoomController@get')->name('room');
Route::POST('/room', 'RoomController@post')->name('room.post');
Route::get('/room/{id}', 'RoomController@delete')->name('room.delete');


Route::get('/meetingtime', 'MeetingController@get')->name('meeting');
Route::POST('/meetingtime', 'MeetingController@post')->name('meeting.post');
Route::get('/meetingtime/{id}', 'MeetingController@delete')->name('meetingtime.delete');


Route::get('/instructorsubject', 'InstructorSubjectController@get')->name('instructorsubject');
Route::POST('/instructorsubject', 'InstructorSubjectController@post')->name('instructorsubject.post');
Route::get('/instructorsubject/{id}', 'InstructorSubjectController@delete')->name('instructorsubject.delete');
Route::get('/instructorsubject/edit/{id}', 'InstructorSubjectController@edit')->name('instructorsubject.edit');
Route::POST('/instructorsubject/edit', 'InstructorSubjectController@put')->name('instructorsubject.put');


Route::get('/section', 'SectionController@get')->name('sections');
Route::POST('/section_add', 'SectionController@post')->name('sections.post');
Route::get('/section/{id}', 'SectionController@delete')->name('sections.delete');

Route::get('/types', 'TypeController@get')->name('types');
Route::POST('/types_add', 'TypeController@post')->name('types.post');
Route::get('/types/{id}', 'TypeController@delete')->name('types.delete');

Route::get('/subjectdetail', 'SubjectDetailController@get')->name('subjectdetail');
Route::POST('/subjectdetail', 'SubjectDetailController@post')->name('subjectdetail.post');
Route::get('/subjectdetail/{id}', 'SubjectDetailController@delete')->name('subjectdetail.delete');

Route::get('/generate', 'DashboardController@get')->name('dashboard');

