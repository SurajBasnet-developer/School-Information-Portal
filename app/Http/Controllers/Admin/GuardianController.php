<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use App\Models\Student;
use Illuminate\Http\Request;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guardian = Guardian::all();
        return view('backend.parents.index', compact('guardian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = Student::all();
        return view('backend.parents.create', compact('student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guardian = new Guardian();
        $guardian->username = $request->username;
        $guardian->name = $request->name;
        $guardian->email = $request->email;
        $guardian->address = $request->address;
        $guardian->contact = $request->contact;
        $guardian->school_id = $request->school_id;
        $guardian->save();
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $guardian = Guardian::where('id', $id)->first();


        return view('backend.parents.edit', compact('guardian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $guardian = Guardian::where('id', $id)->first();
        $guardian->username = $request->username;
        $guardian->name = $request->name;
        $guardian->email = $request->email;
        $guardian->address = $request->address;
        $guardian->contact = $request->contact;
        $guardian->school_id = $request->school_id;
        $guardian->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guardian = Guardian::where('id', $id)->first();
         $guardian->delete();
        return redirect()->back();
    }
}
