<?php

namespace App\Http\Controllers;

use App\Models\AktaPPAT;
use Illuminate\Http\Request;

class AktaPPATController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'id_project' => 'required|integer',
                'jenis_nomor' => 'required|integer',
                'id_jenis_akta_ppat' => 'required|integer',
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $akta = AktaPPAT::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('something error');
        } finally {
            return redirect(route('project.index'))->withToastSuccess('Success add objek');
        }
    }
}
