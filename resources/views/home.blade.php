@extends('layouts.app')

@section('content')
    <style>
        #sidebar-nav {
            width: 150px;
        }
    </style>
    <div class="container">
        <div class="row ">
            <div class="col-auto px-0">
                <div id="sidebar" class="collapse collapse-horizontal show">
                    <div class="card">
                        <div id="sidebar-nav" class="list-group ">

                            <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate"
                                data-bs-parent="#sidebar"><i class="bi bi-columns-gap p-1"></i> <span>Dashboard</span> </a>
                            <a href="{{ route('dashboard.hukum.index') }}"
                                class="list-group-item border-end-0 d-inline-block text-truncate"
                                data-bs-parent="#sidebar"><i class="bi bi-bricks p-1"></i> <span>Hukum</span></a>
                            <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate"
                                data-bs-parent="#sidebar"><i class="bi bi-book p-1"></i> <span>Pendidikan</span></a>
                            <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate"
                                data-bs-parent="#sidebar"><i class="bi bi-prescription2 p-1"></i> <span>Kesehatan</span></a>
                            <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate"
                                data-bs-parent="#sidebar"><i class="bi bi-newspaper p-1"></i> <span>Berita</span></a>
                            <a href="#" class="list-group-item border-end-0 d-inline-block text-truncate"
                                data-bs-parent="#sidebar"><i class="bi bi-archive p-1"></i> <span>Artikel</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <main class="col">
                <div class="card vh-50">
                    <div class="card-body ">
                        <div class="float-end" data-bs-target="#sidebar" data-bs-toggle="collapse"
                            class="border rounded-0 text-dark p-1">

                            <b>Menu </b>
                            <i class="bi bi-list bi-lg "></i>
                        </div>
                        <div class="page-header float-start">
                            <h5>DB</h5>
                        </div>
                        <br>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                       1
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                       2
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="card">
                                    <div class="card-body">
                                       3
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection
