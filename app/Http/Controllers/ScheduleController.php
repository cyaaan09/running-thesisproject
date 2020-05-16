<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use App\Room;
use App\Type;
use App\MeetingTime;
use App\Instructor;
use App\Course;
use App\Section;
use App\SubjectDetail;
use App\InstructorSubject;
use App\CourseSection;
use App\Subject;
use App\Distance;
use App\Schedule;
use App\RoomSchedule;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $schedules = Schedule::with(['instructor', 'course', 'section', 'subject', 'room_type', 'room', 'meeting_time'])->get();

        $day = "";

        foreach($schedules as $schedule) {
            if( ! isset($schedule->room)) {
                // get the day
                $day = $schedule->meeting_time->day;
            }
        }

        return view('pages.Schedule', compact(['schedules', 'day']));
    }

    public function update_schedule(Request $request)
    {
        // pull required data from db
        $day = [];
        $rooms = json_encode(Room::all());
        $types = json_encode(Type::all());
        $scheds = json_encode(Schedule::all());
        $distances = json_encode(Distance::all());
        $meeting_times = json_encode(MeetingTime::all());
        $room_schedules = RoomSchedule::with('schedule')->get();
        $day = json_encode(['day' => $request->input('day')]);
        // dd($room_schedules);
        $r_s = [];
        foreach($room_schedules as $room_schedule) {
            $r_s[] = [
                'room_id' => $room_schedule->room_id,
                'meeting_time_id' => $room_schedule->schedule->meeting_time_id
            ];
        }
        $r_s = json_encode($r_s);
        // dd($r_s);

        // if these data are ready for genetic algo:
        $process = new Process(['python', storage_path("app/python/bf.py"), 
            $rooms, 
            $types, 
            $scheds, 
            $distances, 
            $meeting_times,
            $r_s,
            $day
        ]);
        $process->setTimeout(0);
        $process->run();
        // dd($process);
        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $string_result = $process->getOutput();
        $result = json_decode($string_result);
        // var_dump($result); die();
        foreach($result as $key => $t) {
            $schedule = Schedule::find($t->schedule_id);
            $schedule->room_id = $t->room_id;
            $room_meeting_time = new RoomSchedule;
            $room_meeting_time->room_id = $t->room_id;
            $room_meeting_time->schedule_id = $t->schedule_id;
            $room_meeting_time->save();
            $schedule->save();

        }

        return redirect()->back();
    }

    public function new()
    {
        return view('pages.Schedule');
    }

    public function show()
    {
        return view('pages.Schedule');
    }

    public function post()
    {
        // pull required data from db
        $room = json_encode(Room::all());
        $types = json_encode(Type::all());
        $meeting_times = json_encode(MeetingTime::all());
        $instructors = json_encode(Instructor::all());
        $courses = json_encode(Course::all());
        $sections = json_encode(Section::all());
        $subjects = json_encode(Subject::all());
        $subject_details = json_encode(SubjectDetail::all());
        $instructor_subjects = json_encode(InstructorSubject::all());
        $course_section = json_encode(CourseSection::all());

        // if these data are ready for genetic algo:
        $process = new Process(['python', storage_path("app/python/genetic_algorithm.py"), 
            $room, 
            $types, 
            $meeting_times, 
            $instructors, 
            $courses, 
            $sections, 
            $subjects, 
            $subject_details, 
            $instructor_subjects, 
            $course_section
        ]);
        $process->setTimeout(0);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $string_result = $process->getOutput();
        $result = json_decode($string_result);

        foreach($result as $key => $t) {
            $schedule = new Schedule;
            $schedule->course_id = $t[0]->course_id;
            $schedule->section_id = $t[0]->section_id;
            $schedule->subject_id = $t[0]->subject_id;
            $schedule->room_id = $t[0]->room_id;
            $schedule->type_id = $t[0]->type_id;
            $schedule->instructor_id = $t[0]->instructor_id;
            $schedule->meeting_time_id = $t[0]->meeting_time_id;
            $schedule->save();

        }
        return response()->json([
            'status' => true,
            'redirect' => url('/schedule')
        ]);
        // if they are not ready, then produce error and redirect back       
    }

    public function edit()
    {
        return view('pages.Schedule');
    }

    public function put()
    {
        return view('pages.Schedule');
    }

    public function delete()
    {
        return view('pages.Schedule');
    }
}
