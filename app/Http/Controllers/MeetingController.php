<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MeetingTime;
class MeetingController extends Controller
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
        $meeting_times = MeetingTime::all();
        return view('pages.Meeting')->with("meeting_times", $meeting_times);
    }
    public function new()
    {
        return view('pages.Meeting');
    }

    public function show($id)
    {
        MeetingTime::where('id',$id)->delete();
        return redirect('/meetingtime');
    }

    public function post(Request $request)
    {
        $meeting = new MeetingTime;
        $meeting->day = $request->input('day');
        $meeting->start = $request->input('start');
        $meeting->end = $request->input('end');
        $meeting->duration = $request->input('duration');
        $meeting->save();
        return redirect('/meetingtime');
    }

    public function edit()
    {
        return view('pages.Meeting');
    }

    public function put()
    {
        return view('pages.Meeting');
    }

    public function delete($id)
    {
        MeetingTime::where('id',$id)->delete();
        return redirect('/meetingtime');
    }
}
