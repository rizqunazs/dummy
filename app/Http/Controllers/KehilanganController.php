<?php

namespace App\Http\Controllers;

use App\DataTables\KehilanganDataTable;
use App\Models\Kehilangan;
use Illuminate\Http\Request;

class KehilanganController extends Controller
{

    public function index(KehilanganDataTable $datatable)
    {
        return $datatable->render('pages.spkt.kehilangan.index');
    }

    public function create()
    {
        return view('pages.spkt.kehilangan.add-edit');
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kehilangan  $kehilangan
     * @return \Illuminate\Http\Response
     */
    public function show(Kehilangan $kehilangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kehilangan  $kehilangan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kehilangan $kehilangan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kehilangan  $kehilangan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kehilangan $kehilangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kehilangan  $kehilangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kehilangan $kehilangan)
    {
        //
    }
}
