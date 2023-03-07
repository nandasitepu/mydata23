@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">

                    <div class="col-6">
                             {{-- Data --}}
                        <div>
                            <h5 class="card-title mb-2 mt-2 p-2 fw-bold btn btn-outline-primary btn-sm rounded-0">Data</h5>
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Subheading</div>
                                        Cras justo odio
                                    </div>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Subheading</div>
                                        Cras justo odio
                                    </div>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Subheading</div>
                                        Cras justo odio
                                    </div>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                    <div class="col-6">
                        {{-- Berita --}}
                        <div>
                            <h5 class="card-title mb-2 mt-2 p-2 fw-bold btn btn-outline-primary btn-sm rounded-0">Berita
                            </h5>
                            <ol class="list-group list-group-numbered">
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Subheading</div>
                                        Cras justo odio
                                    </div>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Subheading</div>
                                        Cras justo odio
                                    </div>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold">Subheading</div>
                                        Cras justo odio
                                    </div>
                                    <span class="badge bg-primary rounded-pill">14</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div>
                    <h5 class="card-title mb-2 mt-2 p-2 fw-bold btn btn-outline-primary btn-sm rounded-0">Data</h5>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Subheading</div>
                                Cras justo odio
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Subheading</div>
                                Cras justo odio
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Subheading</div>
                                Cras justo odio
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                    </ol>
                </div>


                {{--  --}}
                <div>
                    <h5 class="card-title mb-2 mt-2 p-2 fw-bold btn btn-outline-primary btn-sm rounded-0">Artikel</h5>

                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Subheading</div>
                                Cras justo odio
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Subheading</div>
                                Cras justo odio
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">Subheading</div>
                                Cras justo odio
                            </div>
                            <span class="badge bg-primary rounded-pill">14</span>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4">
                {{-- Hukum --}}
                <div class="card m-2">
                    <div class="card-body">
                        <h5 class="card-title"> <i class=" bi bi bi-bank fs-3 p-2 text-dark" aria-hidden="true"></i> Hukum
                        </h5>
                        <p class="card-text">Data Peraturan Hukum Pusat dan Daerah</p>

                        <a href="{{ route('hukum') }}" class="btn btn-dark float-end">
                            <i class=" bi bi-arrow-down-right-square bi-lg" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                {{-- Kesehatan --}}
                <div class="card m-2">
                    <div class="card-body">
                        <h5 class="card-title"><i class=" bi bi bi-prescription2 fs-3 p-2 text-primary"
                                aria-hidden="true"></i>Kesehatan</h5>
                        <p class="card-text">Data Fasilitas Kesehatan Negeri dan Swasta</p>
                        <a href="{{ route('kesehatan') }}" class="btn btn-primary float-end">
                            <i class="bi bi-arrow-down-right-square bi-lg" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                {{-- Pendidikan  --}}
                <div class="card m-2">
                    <div class="card-body">
                        <h5 class="card-title"><i class=" bi bi bi-book fs-3 p-2 text-success" aria-hidden="true"></i>
                            Pendidikan</h5>
                        <p class="card-text">Data Fasilitas Pendidikan Negeri dan Swasta</p>
                        <a href="{{ route('pendidikan') }}" class="btn btn-success float-end">
                            <i class="bi bi-arrow-down-right-square bi-lg" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    @endsection
