<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use Illuminate\Support\Facades\DB;
class TypeController extends Controller
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

    	$Types = Type::all();
    	return view('pages.Types')->with("Types", $Types);
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
    	$Type = new Type;
        $Type->name = $request->input('name');
        $Type->save();
       	return redirect('/types');
    }

    public function edit()
    {
        
    }

    public function put()
    {
       
    }

    public function delete($id)
    {
       Type::where('id', $id)->delete();
       return redirect('/types');
    }
}
