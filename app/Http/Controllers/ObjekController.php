<?php

namespace App\Http\Controllers;

use App\Models\Objek;
use Illuminate\Http\Request;

class ObjekController extends Controller
{
    public function store(Request $request)
    {

        try {
            $request->validate([
                'kategori' => 'required|integer',
                'id_project' => 'required|integer',
                'wilayah_kerja' => 'integer',
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }

        try {
            $objek = Objek::create($request->all());
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError('something error');
        } finally {
            return redirect(route('project.index'))->withToastSuccess('Success add objek');
        }
    }
}
