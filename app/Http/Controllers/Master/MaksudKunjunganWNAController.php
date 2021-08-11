<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MaksudKunjunganWNA;
use App\DataTables\Master\MaksudKunjunganWNADataTable;

class MaksudKunjunganWNAController extends Controller
{
    public function index(MaksudKunjunganWNADataTable $dataTable)
    {
        return $dataTable->render('pages.master.maksud-kunjungan-wna.index');
    }

    public function create()
    {
        return view('pages.master.maksud-kunjungan-wna.add-edit');
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
            MaksudKunjunganWNA::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('master-data.maksud-kunjungan-wna.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = MaksudKunjunganWNA::findOrFail($id);
        return view('pages.master.maksud-kunjungan-wna.add-edit', ['data' => $data]);
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
            $data = MaksudKunjunganWNA::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('master-data.maksud-kunjungan-wna.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            MaksudKunjunganWNA::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
