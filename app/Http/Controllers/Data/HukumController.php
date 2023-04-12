<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use App\Models\Data\Hukum;
use Illuminate\Http\Request;

use App\DataTables\HukumDataTable;

class HukumController extends Controller
{

    // Datatable

    public function dt_search(HukumDataTable $dataTable)
    {
        return $dataTable->render('data.hukum.search');
    }

    public function dt_index(HukumDataTable $dataTable)
    {
        return $dataTable->render('data.hukum.index');
    }

    // Tambahan

    public function search(Request $request)
	{
		// menangkap data pencarian
		$search = $request->search;

    	// mengambil data dari table pegawai sesuai pencarian data
		$hukum = DB::table('hukum')
		->where('nomor','like',"%".$search."%")
		->paginate();

    	// mengirim data pegawai ke view index
		return view('data.hukum.search',['hukum' => $hukum]);

	}



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hukum = Hukum::where('jenis', 'uu')->paginate(5);
        return view ('data.hukum.index', compact('hukum'));
    }

    // SITESs

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function create()
    {
        // The Form
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Hukum::create($request->all());

        return "Sukses Menyimpan Data";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Data\Hukum  $hukum
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('data.hukum.show', [
            'hukum' => Hukum::findOrFail($id)
        ]);



    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Data\Hukum  $hukum
     * @return \Illuminate\Http\Response
     */
    public function edit(Hukum $hukum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Data\Hukum  $hukum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hukum $hukum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Data\Hukum  $hukum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hukum $hukum)
    {
        //
    }
}
