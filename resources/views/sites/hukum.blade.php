@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card text-center p-1">
                    <b>Data Hukum <i class="bi bi-bank2" aria-hidden="true"></i></b>
                </div>
            </div>
            <div class="col-9">
                <div class="input-group float-center">
                    <input type="text" class="form-control form-control-sm"
                        placeholder=" Nomor   /   Uraian   /   Jenis   /   ..." aria-label="search-form"
                        aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">
                        <i class="bi bi-search" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                {{-- PUSAT  --}}
                <div class="card">
                    <div class="bg-dark text-white fw-bold p-1">Peraturan Pusat</div>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div>Undang-Undang</div>

                            </div>
                            <span class="badge border border-dark text-dark">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div>Peraturan Pemerintah</div>
                            </div>
                            <span class="badge border border-dark text-dark">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div>Peraturan Presiden</div>
                            </div>
                            <span class="badge border border-dark text-dark">14</span>
                        </li>
                    </ol>

                </div>
                {{-- Daerah  --}}
                <div class="card">
                    <div class="bg-dark text-white fw-bold p-1">Peraturan Daerah</div>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div>Peraturan Daerah</div>

                            </div>
                            <span class="badge border border-dark text-dark">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div>Peraturan Gubernur</div>

                            </div>
                            <span class="badge border border-dark text-dark">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div>Peraturan Bupati / Walikota</div>
                            </div>
                            <span class="badge border border-dark text-dark">14</span>
                        </li>
                    </ol>
                </div>
                {{-- KLPND --}}
                <div class="card">
                    <div class="bg-dark text-white fw-bold p-1">Peraturan Kementerian / LPND</div>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div>Kementerian Hukum dan HAM</div>
                            </div>
                            <span class="badge border border-dark text-dark">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div>Kementerian Kesehatan</div>

                            </div>
                            <span class="badge border border-dark text-dark">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div>Kementerian Pendidikan</div>
                            </div>
                            <span class="badge border border-dark text-dark">14</span>
                        </li>
                    </ol>

                </div>
            </div>
            <div class="col-md-9">
                <div class="card ">
                    <div class="card-body radius-0">
                        @foreach ($data as $h )
                            $h->nomor
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
@endpush
