<?php

namespace App\Http\Controllers\Master;

use App\DataTables\Master\JenisAktaPPATDataTable;
use App\Http\Controllers\Controller;
use App\Models\JenisAktaPPAT;
use Illuminate\Http\Request;

class JenisAktaPPATController extends Controller
{

    public function index(JenisAktaPPATDataTable $dataTable)
    {
        return $dataTable->render('pages.master.jenis-akta-ppat.index');
    }

    public function store(Request $request)
    {
        JenisAktaPPAT::updateOrCreate(
            ['id' => $request->id],
            ['name' => $request->name]
        );
        return response()->json(
            [
                'success' => true,
                'message' => 'Data saved successfully.'
            ]
        );
    }

    public function edit($id)
    {
        $jenis = JenisAktaPPAT::find($id);
        return response()->json($jenis);
    }

    public function destroy($id)
    {
        JenisAktaPPAT::find($id)->delete();
        return response()->json(['success' => 'Data deleted successfully.']);
    }
}
