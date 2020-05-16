<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubjectDetail;
use App\Subject;
use App\Type;
use Illuminate\Support\Facades\DB;
class SubjectDetailController extends Controller
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
        // $sub_details = SubjectDetail::all();
        // return view('pages.subject_detail')->with("sub_details", $sub_details);
        $sub_details = DB::table('subject_details')
        			->leftjoin('subjects', 'subject_details.subject_id', '=', 'subjects.id')
        			->leftjoin('types', 'subject_details.type_id', '=', 'types.id')
        			->select('subjects.name as subject_name', 'types.name as type_name', 'subject_details.id as id', 'subject_details.duration as duration', 'subjects.id as subject_id', 'types.id as type_id')
        			->get();
        // $types = Type::all();
        $subjects = Subject::all();
        $types = Type::all();

        			// dd($sub_details);

        return view('pages.subject_detail', compact(['sub_details', 'types', 'subjects']));
    }

    
    public function new()
    {
        // $subjects = Subject::all();
        // $types = Type::all();
    }

    public function show()
    {
        return view('pages.Instructor');
    }

    public function post(Request $request)
    {
        $sub_details = new SubjectDetail;
        $sub_details->subject_id = $request->input('subject_name');
        $sub_details->type_id = $request->input('type_name');
        $sub_details->duration = $request->input('duration');
        $sub_details->save();
        return redirect('/subjectdetail');
    }

    public function edit($id)
    {
        
    }

    public function put()
    {
        return view('pages.Instructor');
    }

     public function delete($id)
    {
        SubjectDetail::where('id',$id)->delete();
        return redirect('/subjectdetail');
    }
}
