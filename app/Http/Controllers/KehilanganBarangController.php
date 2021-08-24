<?php

namespace App\Http\Controllers;

use App\DataTables\KehilanganBarangDataTable;
use App\Models\KehilanganBarang;
use Illuminate\Http\Request;

class KehilanganBarangController extends Controller
{

    public function index(KehilanganBarangDataTable $datatable)
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
    public function show(KehilanganBarang $kehilangan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kehilangan  $kehilangan
     * @return \Illuminate\Http\Response
     */
    public function edit(KehilanganBarang $kehilangan)
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
    public function update(Request $request, KehilanganBarang $kehilangan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kehilangan  $kehilangan
     * @return \Illuminate\Http\Response
     */
    public function destroy(KehilanganBarang $kehilangan)
    {
        //
    }
}
