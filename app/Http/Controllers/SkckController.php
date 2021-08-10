<?php

namespace App\Http\Controllers;

use App\Models\Pemohon;
use App\Models\PermohonanSKCK;
use App\Models\SKCK;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkckController extends Controller
{
    public function index()
    {
        return view('pages.skck.index');
    }

    public function create()
    {
        return view('pages.skck.add-edit');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'no_skck' => 'required|array',
                'keperluan' => 'required',
                'nik' => 'required',
                'fullname' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'alamat_rumah' => 'required',
                'pekerjaan' => 'required',
                'kota' => 'required',
                'no_telp' => 'required',
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        DB::transaction(function () use ($request) {
            try {
                $permohonan = PermohonanSKCK::create([
                    'keperluan' => $request->keperluan,
                ]);

                $permohonan->skck->create([
                    'no_skck' => implode('-', $request->no_skck)
                ]);

                $permohonan->pemohon->create($request->all());
            } catch (\Throwable $th) {
                DB::rollBack();
                return back()->withInput()->withToastError('Error saving data');
            }
        });
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'no_skck' => 'required|array',
                'keperluan' => 'required',
                'nik' => 'required',
                'fullname' => 'required',
                'tempat_lahir' => 'required',
                'tanggal_lahir' => 'required',
                'alamat_rumah' => 'required',
                'pekerjaan' => 'required',
                'kota' => 'required',
                'no_telp' => 'required',
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        DB::transaction(function () use ($request, $id) {
            try {
                $permohonan = PermohonanSKCK::findOrFail($id);
                $permohonan->update([
                    'keperluan' => $request->keperluan,
                ]);

                $permohonan->skck->update([
                    'no_skck' => implode('-', $request->no_skck)
                ]);

                $permohonan->pemohon->update($request->all());
            } catch (\Throwable $th) {
                DB::rollBack();
                return back()->withInput()->withToastError('Error saving data');
            }
        });
    }


    public function destroy($id)
    {
        //
    }
}
