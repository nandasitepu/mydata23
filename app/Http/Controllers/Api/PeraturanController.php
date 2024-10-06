<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeraturanRequest;
use App\Http\Resources\PeraturanResource;
use App\Models\Hukum\PeraturanHukum;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Validator;

class PeraturanController extends Controller
{
    public function index()
    {
        $peraturan = PeraturanHukum::orderBy ('id', 'DESC')->paginate(10);
        // $peraturan = PeraturanHukum::paginate(10)->get;
        return PeraturanResource::collection($peraturan);
    }

    public function show (PeraturanHukum $peraturan)
    {
        return new PeraturanResource($peraturan);
    }

    public function store (PeraturanRequest $request)
    {
        $peraturan = PeraturanHukum::create($request->validated());
        return new PeraturanResource($peraturan);
    }

    public function update (PeraturanRequest $request, PeraturanHukum $peraturan)
    {
        $peraturan->update($request->validated());

        return (new PeraturanResource($peraturan))->response();
    }

    public function destroy(PeraturanHukum $peraturan)
    {
        $peraturan->delete();
        return response()->json(["message" => "Data Berhasil Dihapus"], 200);

    }
}
