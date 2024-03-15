<?php

namespace App\Http\Controllers\Hukum;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hukum\PeraturanModel;

class PeraturanController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $jenis      = $request->jenis;
        $tentang    = $request->tentang;
        $nomor      = $request->nomor;
        $tahun      = $request->tahun;
        $status     = $request->status;

        $peraturan = PeraturanModel::orderBy('id', 'desc')
        ->where('jenis', 'like', "%".$jenis."%")
        ->where('tentang', 'like', "%".$tentang."%")
        ->where('nomor', 'like', "%".$nomor."%")
        ->where('tahun', 'like', "%".$tahun."%")
        ->where('status', 'like', "%".$status."%")
        ->paginate(5);

        // $peraturan = PeraturanModel::orderBy('id', 'desc')->paginate(5);
        return view('pages.hukum.peraturan.index', compact('peraturan'));
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
        //
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
        //
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
        //
    }
}
