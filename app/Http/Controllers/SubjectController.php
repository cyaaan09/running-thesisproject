<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;

class SubjectController extends Controller
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
        $subjects = subject::all();
        return view('pages.subject')->with("subjects", $subjects);
    }
    public function new()
    {
        return view('pages.Subject');
    }

    public function show()
    {
        return view('pages.Subject');
    }

    public function post(Request $request)
    {
        $subject = new Subject;
        $subject->name = $request->input('subject_name');
        $subject->save();
        return redirect('/subject');
    }

    public function edit()
    {
        return view('pages.Subject');
    }

    public function put()
    {
        return view('pages.Room');
    }

    public function delete($id)
    {
        Subject::where('id',$id)->delete();
        return redirect('/subject');
    }
}
