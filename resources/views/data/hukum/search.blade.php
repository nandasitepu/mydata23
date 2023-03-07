@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header fw-bold">
                        Pencarian
                    </div>
                    <div class="card-body">
                        <label for="exampleDataList" class="form-label fw-bold">Jenis Peraturan</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pilih Jenis</option>
                            <option value="1">Undang-Undang</option>
                            <option value="2">Peraturan Pemerintah / Pengganti UU</option>
                            <option value="3">Peraturan Presiden</option>
                          </select>
                          <hr>
                          <div class="input-group float-center">
                            <input type="text" class="form-control" placeholder="Cari Disini ..." aria-label="search-form"
                                aria-describedby="basic-addon2">
                            <span class="input-group-text" id="basic-addon2">
                                <i class="bi bi-search" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                 <div class="card">
                    <div class="card-header fw-bold">
                        Hasil Pencarian
                    </div>
                    <div class="card-body">
                        {{ $dataTable->table() }}
                    </div>
                </div>
            </div>

        </div>



    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
@endpush
