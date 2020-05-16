<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Type;
use App\Room;

class RoomController extends Controller
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
        $rooms = Room::leftjoin('types', 'rooms.type_id', '=', 'types.id')
        ->select('rooms.id as room_id','types.name as type_name', 'rooms.created_at', 'rooms.updated_at', 'rooms.seating_capacity as capacity')
        ->get();
        // dd($rooms);
        $types = Type::all();
        // dd($types);
        // return view('pages.room')->with(['rooms', $rooms, 'types', $types]);
        return view('pages.room', compact(['rooms', 'types']));
    }

    public function new()
    {
        return view('pages.Room');
    }

    public function show()
    {
        return view('pages.Room');
    }

    public function post(Request $request)
    {
        $rooms = new Room;
        $rooms->type_id = $request->input('room_type');
        $rooms->seating_capacity = $request->input('seating_capacity');
        $rooms->save();
        return redirect('/room');
    }

    public function edit()
    {
        return view('pages.Room');
    }

    public function put()
    {
        return view('pages.Room');
    }

    public function delete($id)
    {
        Room::where('id', $id)->delete();
        return redirect('/room');
    }

    
}
