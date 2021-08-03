<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PajakTitipan;

class PajakTitipanController extends Controller
{
    public function store(Request $request)
    {
        try {
            $request->validate([
                'id_project' => 'required|integer',
                'id_jenis_estimasi' => 'required|integer',
                'nilai_estimasi' => 'required|integer',
                'keterangan' => 'required',
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $pajak = PajakTitipan::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('something error');
        } finally {
            return redirect(route('project.index'))->withToastSuccess('Success add objek');
        }
    }
}
