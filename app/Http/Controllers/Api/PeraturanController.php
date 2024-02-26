<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeraturanRequest;
use App\Http\Resources\PeraturanResource;
use App\Models\Hukum\PeraturanModel;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Validator;

class PeraturanController extends Controller
{
    public function index()
    {
        $peraturan = PeraturanModel::latest()->orderBy ('id')->get();
        // $peraturan = PeraturanModel::paginate(10)->get;
        return PeraturanResource::collection($peraturan);
    }

    public function show (PeraturanModel $peraturan)
    {
        return new PeraturanResource($peraturan);
    }

    public function store (PeraturanRequest $request)
    {
        $peraturan = PeraturanModel::create($request->validated());
        return new PeraturanResource($peraturan);
    }

    public function update (PeraturanRequest $request, PeraturanModel $peraturan)
    {
        $peraturan->update($request->validated());

        return (new PeraturanResource($peraturan))->response();
    }

    public function destroy(PeraturanModel $peraturan)
    {
        $peraturan->delete();
        return response()->json(["message" => "Data Berhasil Dihapus"], 200);

    }
}
