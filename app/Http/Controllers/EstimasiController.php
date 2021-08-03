<?php

namespace App\Http\Controllers;

use App\Models\JenisEstimasi;
use Illuminate\Http\Request;

class EstimasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = JenisEstimasi::latest()->get();
            // dd($data);
            return \DataTables::of($data)
                ->addColumn('action', function ($data) {
                    $button =   '<button type="button" name="edit" data-id="' . $data->id . '" class="edit btn btn-warning btn-sm"><i class="fa fa-edit"></i> Edit</button>';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button"  data-id="' . $data->id . '" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i> Delete</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }

        return view('pages.master.estimasi.index');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JenisEstimasi::updateOrCreate(
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


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenken = JenisEstimasi::find($id);
        return response()->json($jenken);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JenisEstimasi::find($id)->delete();
        return response()->json(['success' => 'Data deleted successfully.']);
    }
}
