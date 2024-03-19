<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//
use App\Models\Hukum\PeraturanHukum;
use DataTables;

class DashboardController extends Controller
{

    public function dashboard (Request $request)
    {
        if ($request->ajax()) {
            $data = PeraturanHukum::all();
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

        return view('dashboard');

        // $data = PeraturanModel::all();
        // echo $data;
    }
}
