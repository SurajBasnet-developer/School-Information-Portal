<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Time;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Time::all();
        return view('backend.timetable.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.timetable.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $list = new Time();
        $list->grade = $request->grade;
        $list->subjectone = $request->subjectone;
        $list->subjecttwo = $request->subjecttwo;
        $list->subjectthree = $request->subjectthree;
        $list->subjectfour = $request->subjectfour;
        $list->subjectfive = $request->subjectfive;
        $list->subjectsix = $request->subjectsix;
        $list->subjectseven = $request->subjectseven;
        $list->subjecteight = $request->subjecteight;
        $list->save();
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
        $list = Time::where('id', $id)->first();
        return view ('backend.timetable.edit', compact('list'));
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
        $list = Time::where('id', $id)->first();
        $list->grade = $request->grade;
        $list->subjectone = $request->subjectone;
        $list->subjecttwo = $request->subjecttwo;
        $list->subjectthree = $request->subjectthree;
        $list->subjectfour = $request->subjectfour;
        $list->subjectfive = $request->subjectfive;
        $list->subjectsix = $request->subjectsix;
        $list->subjectseven = $request->subjectseven;
        $list->subjecteight = $request->subjecteight;
        $list->update();
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
        $list = Time::where('id', $id)->first();
        $list->delete();
        return redirect()->back();
    }
}
