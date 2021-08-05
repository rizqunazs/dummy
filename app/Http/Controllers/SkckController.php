<?php

namespace App\Http\Controllers;

use App\Models\Skck;
use Illuminate\Http\Request;

class SkckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.skck.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.skck.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skck  $skck
     * @return \Illuminate\Http\Response
     */
    public function show(Skck $skck)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skck  $skck
     * @return \Illuminate\Http\Response
     */
    public function edit(Skck $skck)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skck  $skck
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skck $skck)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skck  $skck
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skck $skck)
    {
        //
    }
}
