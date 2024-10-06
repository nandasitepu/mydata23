<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//
use App\Models\Hukum\Peraturan;
use DataTables;

class DashboardController extends Controller
{

    public function index (Request $request)
    {

        return view('dashboard.index');

    }

    public function hukum (Request $request)
    {
        if ($request->ajax()) {
            $data = Peraturan::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    // ->editColumn('jenis', function ($data) {
                    //     $jenis = '<a href="javascript:void(0)" class="border-2 border-black p-2">'+$data+'</a>';
                    //     return $jenis;
                    // })
                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" class="border-2 border-gray-300 p-2">
                           <i class="fa fa-edit" aria-hidden="true"></i>
                                    </a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view ('dashboard.pages.hukum');
    }

    public function pendidikan ()
    {
        return view ('dashboard.pages.pendidikan');
    }

    public function kesehatan ()
    {
        return view ('dashboard.pages.kesehatan');
    }

    public function peraturan ()
    {
        return view ('dashboard.pages.peraturan');
    }
}
