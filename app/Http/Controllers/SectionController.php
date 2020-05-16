<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Section;
use Illuminate\Support\Facades\DB;
class SectionController extends Controller
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

    	$Courses = Course::all();
    	$Sections= DB::table('sections')
        			->leftjoin('courses', 'courses.id', '=', 'sections.course_id')
        			->select('courses.name as CourseName', 'sections.id as SectonID', 'sections.name as SectionName', 'sections.max_num_of_students as MaxStudent','sections.created_at')
        			->get();
        // dd($Sections);
    	return view('pages.Section')->with(["Courses" => $Courses,"Sections" => $Sections]);
    }
    public function new()
    {
        
    }

    public function show()
    {
        return view('pages.Subject');
    }

    public function post(Request $request)
    {
    	$Section = new Section;
        $Section->Course_id = $request->input('course_id');
        $Section->name = $request->input('section_name');
        $Section->max_num_of_students = $request->input('max');
        $Section->save();
       	return redirect('/section');
    }

    public function edit()
    {
        
    }

    public function put()
    {
       
    }

    public function delete($id)
    {
       Section::where('id',$id)->delete();
       return redirect('/section');
    }
}
