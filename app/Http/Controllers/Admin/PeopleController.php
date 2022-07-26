<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Youth;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peoples = Youth::all();
        return view('backend.emergency.index',compact('peoples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.emergency.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peoples = new Youth();
        $peoples->fullname = $request->fullname;
        $peoples->relation = $request->relation;
        $peoples->address = $request->address;
        $peoples->contact = $request->contact;
        $peoples->studentname = $request->studentname;
        $peoples->email = $request->email;
        $peoples->save();
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
        $peoples = Youth::where('id', $id)->first();
        return view('backend.emergency.edit', compact('peoples'));
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
        $peoples = Youth::where('id', $id)->first();
        $peoples->fullname = $request->fullname;
        $peoples->relation = $request->relation;
        $peoples->address = $request->address;
        $peoples->contact = $request->contact;
        $peoples->studentname = $request->studentname;
        $peoples->email = $request->email;
        $peoples->update();
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
        $peoples = Youth::where('id', $id)->first();
        $peoples->delete();
        return redirect()->back();
    }
}
