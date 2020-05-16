<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instructor;

class InstructorController extends Controller
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
        $instructors = Instructor::all();
        return view('pages.instructor')->with("instructors", $instructors);
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
