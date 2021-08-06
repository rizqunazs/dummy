<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GolonganSIM;
use App\DataTables\Master\GolonganSIMDataTable;

class GolonganSIMController extends Controller
{
    public function index(GolonganSIMDataTable $dataTable)
    {
        return $dataTable->render('pages.master.golongan-sim.index');
    }

    public function create()
    {
        return view('pages.master.golongan-sim.add-edit');
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
            GolonganSIM::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('master-data.golongan-sim.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = GolonganSIM::findOrFail($id);
        return view('pages.master.golongan-sim.add-edit', ['data' => $data]);
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
            $data = GolonganSIM::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('master-data.golongan-sim.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            GolonganSIM::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
