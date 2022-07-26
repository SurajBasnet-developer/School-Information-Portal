<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sibiling;
use Illuminate\Http\Request;

class SiblingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peers = Sibiling::all();
        return view('backend.sibling.index', compact('peers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sibling.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peers = new Sibiling();
        $peers->name = $request->name;
        $peers->studentname = $request->studentname;
        $peers->dob = $request->dob;
        $peers->save();
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
        $peers = Sibiling::where('id', $id)->first();
        return view ('backend.sibling.edit', compact('peers'));
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
        $peers = Sibiling::where('id', $id)->first();
        $peers->name = $request->name;
        $peers->studentname = $request->studentname;
        $peers->dob = $request->dob;
        $peers->update();
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
        $peers = Sibiling::where('id', $id)->first();
        $peers->delete();
        return redirect()->back();
    }
}
