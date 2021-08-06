<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StatusKeluarga;
use App\DataTables\Master\StatusKeluargaDataTable;

class StatusKeluargaController extends Controller
{
    public function index(StatusKeluargaDataTable $dataTable)
    {
        return $dataTable->render('pages.master.status-keluarga.index');
    }

    public function create()
    {
        return view('pages.master.status-keluarga.add-edit');
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
            StatusKeluarga::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('master-data.status-keluarga.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = StatusKeluarga::findOrFail($id);
        return view('pages.master.status-keluarga.add-edit', ['data' => $data]);
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
            $data = StatusKeluarga::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('master-data.status-keluarga.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            StatusKeluarga::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
