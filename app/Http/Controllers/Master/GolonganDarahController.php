<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GolonganDarah;
use App\DataTables\Master\GolonganDarahDataTable;

class GolonganDarahController extends Controller
{
    public function index(GolonganDarahDataTable $dataTable)
    {
        return $dataTable->render('pages.master.golongan-darah.index');
    }

    public function create()
    {
        return view('pages.master.golongan-darah.add-edit');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            GolonganDarah::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('master-data.golongan-darah.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = GolonganDarah::findOrFail($id);
        return view('pages.master.golongan-darah.add-edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama' => 'required|min:1'
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $data = GolonganDarah::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('master-data.golongan-darah.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            GolonganDarah::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
