<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Instructor;
use App\instructorSubject;
use App\MeetingTime;
use App\Room;
use App\Section;
use App\Subject;
use App\SubjectDetail;
use App\Type;


class DashboardController extends Controller
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
    	$courses = Course::all()->count();
    	$instructors = Instructor::all()->count();
    	$instructors_subjects = instructorSubject::all()->count();
    	$meeting_times = MeetingTime::all()->count();
    	$rooms = Room::all()->count();
    	$sections = Section::all()->count();
        $subjects = Subject::all()->count();
        $subjects_details = SubjectDetail::all()->count();
        $types = Type::all()->count();

        // $courseCount = count($courses);

        // dd($courseCount);

        if ($courses <= 0 || $instructors <= 0 || $instructors_subjects <= 0 || $meeting_times <= 0 || $rooms <= 0 || $sections <= 0 || $subjects <= 0 || $subjects_details <= 0 || $types <= 0) {
        	return redirect('/home');
        }
     
        return view('pages.generateGA');
    }

    
    public function new()
    {
        return view('pages.Instructor');
    }

    public function show()
    {
        return view('pages.Instructor');
    }

    public function post(Request $request)
    {
        $instructor = new Instructor;
        $instructor->name = $request->input('instructor_name');
        $instructor->save();
        return redirect('/instructor');
    }

    public function edit()
    {
        return view('pages.Instructor');
    }

    public function put()
    {
        return view('pages.Instructor');
    }

     public function delete($id)
    {
        Instructor::where('id',$id)->delete();
        return redirect('/instructor');
    }
}
