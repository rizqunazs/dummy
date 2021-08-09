<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisVisa;
use App\DataTables\Master\JenisVisaDataTable;

class JenisVisaController extends Controller
{
    public function index(JenisVisaDataTable $dataTable)
    {
        return $dataTable->render('pages.master.jenis-visa.index');
    }

    public function create()
    {
        return view('pages.master.jenis-visa.add-edit');
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
            JenisVisa::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('master-data.jenis-visa.index'))->withToastSuccess('Data tersimpan');
    }

    public function edit($id)
    {
        $data = JenisVisa::findOrFail($id);
        return view('pages.master.jenis-visa.add-edit', ['data' => $data]);
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
            $data = JenisVisa::findOrFail($id);
            $data->update($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('Something went wrong');
        }

        return redirect(route('master-data.jenis-visa.index'))->withToastSuccess('Data tersimpan');
    }

    public function destroy($id)
    {
        try {
            JenisVisa::find($id)->delete();
        } catch (\Throwable $th) {
            return response(['error' => 'Something went wrong']);
        }
    }
}
