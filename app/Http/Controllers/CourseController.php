<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $courses = Course::all();
        return view('pages.Course')->with("courses", $courses);
    }

    public function new()
    {
        return view('pages.Course');
    }

    public function show()
    {
        return view('pages.Course');
    }

    public function post(Request $request)
    {
        $course = new Course;
        $course->name = $request->input('course_name');
        $course->save();
        return redirect('/course');
    }

    public function edit()
    {
        return view('pages.Course');
    }

    public function put()
    {
        return view('pages.Instructor');
    }

     public function delete($id)
    {
        Course::where('id',$id)->delete();
        return redirect('/course');
    }
}
