<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisPermohonanSIM;
use App\DataTables\Master\JenisPermohonanSIMDataTable;

class JenisPermohonanSIMController extends Controller
{
    public function index(JenisPermohonanSIMDataTable $dataTable)
    {
        return $dataTable->render('pages.master.jenis-permohonan-sim.index');
    }

    public function create()
    {
        return view('pages.master.jenis-permohonan-sim.add-edit');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            JenisPermohonanSIM::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('master-data.jenis-permohonan-sim.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = JenisPermohonanSIM::findOrFail($id);
        return view('pages.master.jenis-permohonan-sim.add-edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama' => 'required|min:3'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = JenisPermohonanSIM::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('master-data.jenis-permohonan-sim.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            JenisPermohonanSIM::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
