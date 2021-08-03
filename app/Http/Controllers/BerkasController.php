<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berkas;
use Illuminate\Support\Facades\DB;
use App\Helpers\FileUploaderHelper;

class BerkasController extends Controller
{
    public function store(Request $request, FileUploaderHelper $fileUploaderHelper)
    {
        try {
            $request->validate([
                'id_project' => 'required|integer',
                'nama_berkas' => 'required',
                'nomor' => 'required',
                'file' => 'mimes:csv,txt,xlx,xls,pdf,jpg,png|max:2048',
            ]);
        } catch (\Throwable $th) {
            return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
        }


        try {
            $berkas = Berkas::create([
                'id_project' => $request->id_project,
                'nama_berkas' => $request->nama_berkas,
                'nomor' => $request->nomor
            ]);

            if ($request->file() && $request->file('file')->isValid()) {
                $upload = $fileUploaderHelper->store($request, 'berkas');
                $berkas->file = $upload['public_path'];
                $berkas->save();
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            return back()->withInput()->withToastError('something error');
        }

        return redirect(route('project.index'))->withToastSuccess('Success add project');
    }
}
