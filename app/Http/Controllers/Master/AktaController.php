<?php

namespace App\Http\Controllers\Master;

use App\Models\JenisAkta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AktaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = JenisAkta::latest()->get();
            //dd($data);
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

        return view('pages.master.akta.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JenisAkta::updateOrCreate(
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis = JenisAkta::find($id);
        return response()->json($jenis);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        JenisAkta::find($id)->delete();
        return response()->json(['success' => 'Data deleted successfully.']);
    }
}
