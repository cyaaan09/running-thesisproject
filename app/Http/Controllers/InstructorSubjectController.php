<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InstructorSubject;
use Illuminate\Support\Facades\DB;
use App\Instructor;
use App\Course;
use App\Section;
use App\Subject;

class InstructorSubjectController extends Controller
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
        // $rooms = DB::table('rooms')
        //     ->leftjoin('types', 'rooms.type_id', '=', 'types.id')->get();
        // $InstructorSubjects = InstructorSubject::leftjoin('types', 'rooms.type_id', '=', 'types.id')
        // ->select('rooms.id as room_id','types.name as type_name', 'rooms.created_at', 'rooms.updated_at', 'rooms.seating_capacity as capacity')
        // ->get();
        // dd($rooms);
        // $types = Type::all();
        // return view('pages.room')->with(['rooms', $rooms, 'types', $types]);
        $InstructorSubjects = DB::table('instructor_subjects')
        					->leftjoin('courses', 'instructor_subjects.course_id', '=', 'courses.id')
        					->leftjoin('sections', 'instructor_subjects.section_id', '=', 'sections.id')
        					->leftjoin('instructors', 'instructor_subjects.instructor_id', '=', 'instructors.id')
        					->leftjoin('subject_details', 'instructor_subjects.subject_details_id', '=', 'subject_details.id')
        					->leftjoin('subjects', 'subject_details.subject_id', '=', 'subjects.id')
        					->leftjoin('types', 'subject_details.type_id', '=', 'types.id')
        					->select('instructor_subjects.id as id', 'courses.name as course_name', 'sections.name as section_name', 'instructors.name as instructor_name', 'subjects.name as sub_name', 'types.name as type_name')
        					->get();

        					// dd($InstructorSubjects);

        $instructors = Instructor::all();
        // $pluckedname = $InstructorSubjects->pluck('instructor_name');


        $courses = Course::all();
        
        // dd($courses);
        $sections = Section::all();
        // $subjects = Subject::all();
        $subjects = DB::table('subject_details')
        			->leftjoin('subjects', 'subjects.id', '=', 'subject_details.subject_id')
        			->leftjoin('types', 'types.id', '=', 'subject_details.type_id')
        			->select('subjects.id as id', 'subject_details.id as sub_id', 'subjects.name as name', 'types.name as type_name')
        			->get();
       	$sub_select = Subject::all(); 
        // foreach ($pluckedname as $nameee) {
        //     if($pluckedname[$nameee] = "TBA")
        //     $pluckedname == "TBA";
    
        // }
        // foreach ($pluckedname as $key => $value) {
        //     if ($value[$key] = "") {
        //         $value = "TBA";
        //     }
        // }
        
        // dd($value);
        			// dd($subjects);
        // dd($pluckedname);

        return view('pages.InstructorSubject', compact(['InstructorSubjects', 'instructors', 'courses', 'sections', 'subjects']));
        // return view('pages.InstructorSubject')->with('InstructorSubjects', $InstructorSubjects);
    }

    public function new()
    {
        return view('pages.InstructorSubject');
    }

    public function show()
    {
        return view('pages.InstructorSubject');
    }

    public function post(Request $request)
    {
        $InstructorSubject = new InstructorSubject;
        $InstructorSubject->instructor_id = $request->input('instructor');
        $InstructorSubject->course_id = $request->input('course');
        $InstructorSubject->section_id = $request->input('section');
        $InstructorSubject->subject_details_id = $request->input('subject');
        $InstructorSubject->save();
        return redirect('/instructorsubject');
    }

    public function edit($id)
    {
        $instructorsubjects = DB::table('instructor_subjects')
                            ->where('instructor_subjects.id',$id)
                            ->leftjoin('instructors','instructor_subjects.instructor_id', '=', 'instructors.id')
                            ->leftjoin('courses','instructor_subjects.course_id', '=', 'courses.id')
                            ->leftjoin('sections','instructor_subjects.section_id', '=', 'sections.id')
                            ->leftjoin('subject_details','instructor_subjects.subject_details_id', '=', 'subject_details.id')
                            ->leftjoin('subjects', 'subject_details.subject_id', '=', 'subjects.id')
                            ->leftjoin('types', 'subject_details.type_id', '=', 'types.id')
                            ->select('instructors.name as instructor_name', 'instructor_subjects.id as id', 'sections.name as section_name', 'courses.name as course_name', 'subjects.name as subject_name', 'types.name as type_name', 'subjects.id as subject_id', 'instructors.id as instructor_id', 'sections.id as section_id', 'subject_details.id as subject_details_id', 'courses.id as course_id')
                            ->get();
        
        // dd($instructorsubjects);
        $instructors = Instructor::all();
        $courses = Course::all();
        $sections = Section::all();
        $subjects = DB::table('subject_details')
                    ->leftjoin('subjects', 'subjects.id', '=', 'subject_details.subject_id')
                    ->leftjoin('types', 'types.id', '=', 'subject_details.type_id')
                    ->select('subjects.id as id', 'subject_details.id as sub_id', 'subjects.name as name', 'types.name as type_name')
                    ->get();
        $instructorbyid = $id;
        // dd($instructor_id);
        return view('pages.edit', compact(['instructorsubjects', 'instructors', 'subjects', 'sections', 'courses', 'instructorbyid']));
    }

    public function put(Request $request)
    {
        $id = $request->input('id');
        
        $instructor = InstructorSubject::find($id);
        // dd($instructor);
        $instructor->course_id = $request->input('course');
        $instructor->section_id = $request->input('section');
        $instructor->instructor_id = $request->input('instructor');
        $instructor->subject_details_id = $request->input('subject_detail');
        $instructor->save();
        return redirect('/instructorsubject');
    }

    public function delete($id)
    {
        InstructorSubject::where('id',$id)->delete();
        return redirect('/instructorsubject');
    }

    
}

