<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PeraturanRequest;
use App\Http\Resources\PeraturanResource;
use App\Models\Peraturan;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Validator;

class PeraturanController extends Controller
{
    public function index()
    {
        // $peraturan = Peraturan::latest()->get();
        $peraturan = Peraturan::paginate(10);
        return PeraturanResource::collection($peraturan);
    }

    public function show (Peraturan $peraturan)
    {
        return new PeraturanResource($peraturan);
    }

    public function store (PeraturanRequest $request)
    {
        $peraturan = Peraturan::create($request->validated());
        return new PeraturanResource($peraturan);
    }

    public function update (PeraturanRequest $request, Peraturan $peraturan)
    {
        $peraturan->update($request->validated());

        return (new PeraturanResource($peraturan))->response();
    }

    public function destroy(Peraturan $peraturan)
    {
        $peraturan->delete();
        return response()->json(["message" => "Data Berhasil Dihapus"], 200);

    }
}
