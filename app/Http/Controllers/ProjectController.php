<?php

namespace App\Http\Controllers;

use App\DataTables\ProjectDataTable;
use App\Models\JenisForm;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Riskihajar\Terbilang\Facades\Terbilang;

class ProjectController extends Controller
{
  public function index(ProjectDataTable $dataTable)
  {
    return $dataTable->render('pages.project.index');
  }

  public function view()
  {
    return view('pages.project.view');
  }

  public function create()
  {
    $jenisForm = JenisForm::all();
    return view('pages.project.create', [
      'jenisForm' => $jenisForm
    ]);
  }

  public function store(Request $request)
  {
    try {
      $request->validate([
        'jenis_form' => 'required|integer',
        'pihak_nama' => 'required|array|min:1',
        'pihak_address' => 'required|array|min:1',
      ]);
    } catch (\Throwable $th) {
      return back()->withInput()->withToastError($th->validator->messages()->all()[0]);
    }

    DB::transaction(function () use ($request) {
      try {
        $project = Project::create([
          'id_jenis_form' => $request->jenis_form,
          'nilai_transaksi' => $request->nilai_transaksi,
          'nilai_ht' => $request->nilai_ht,
          'plafond_hutang' => $request->plafond_hutang,
          'keterangan' => $request->keterangan,
          'kota' => $request->kota,
          'nama_direktur' => $request->nama_direktur,
          'modal_dasar' => $request->modal_dasar,
          'badan_ajuan' => $request->badan_ajuan,
          'pendiri' => $request->pendiri,
          'badan_disetujui' => $request->badan_disetujui,
          'notaris_partner' => $request->notaris_partner
        ]);

        $countPihak = count($request->pihak_nama);
        $pihaks = array();
        for ($i = 0; $i < $countPihak; $i++) {
          $pihakKeString = 'Pihak ke ' . Terbilang::make($i + 1);
          $pihak = array(
            'nama' => $request->pihak_nama[$i],
            'alamat' => $request->pihak_address[$i],
            'npwp' => $request->pihak_npwp[$i],
            'pihak_ke' => $pihakKeString
          );
          array_push($pihaks, $pihak);
        }
        $project->pihak()->createMany($pihaks);
      } catch (\Throwable $th) {
        DB::rollBack();
        return back()->withInput()->withToastError('something error');
      }
    });

    return redirect(route('project.index'))->withToastSuccess('Success add project');
  }
}
