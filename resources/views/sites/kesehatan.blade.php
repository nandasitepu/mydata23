
@extends('layouts.app')

@section('content')
    <div class="container">
        <b>Data Kesehatan</b>
        <div class="row">
            <div class="col-md-5 m-1">
                <div class="card">
                    <div class="bg-dark text-white fw-bold p-1">Fasilitas Kesehatan</div>
                    <div class="m-2">Peraturan Menteri Kesehatan Nomor 71 Tahun 2013 <br> tentang Pelayanan Kesehatan pada Jaminan Kesehatan Nasional</div>
                    <hr>
                    <ol class="list-group list-group-numbered">

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div>Fasilitas Kesehatan Tingkat 1</div>
                                <ul>
                                    <li>
                                        Puskesmas atau yang setara
                                    </li>
                                    <li>
                                        Praktik dokter
                                    </li>
                                    <li>
                                        Praktik dokter gigi
                                    </li>
                                    <li>
                                        Rumah sakit kelas D pratama atau yang setara
                                    </li>
                                    <li>
                                        Klinik pratama atau yang setara
                                    </li>
                                    <li>
                                        Faskes penunjang: apotik dan laboratorium
                                    </li>
                                </ul>
                            </div>
                            <span class="badge border border-dark text-dark">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div>Fasilitas Kesehatan Tingkat 2</div>
                                <p>Untuk pasien yang tidak bisa mendapat pelayanan kesehatan pada faskes tingkat 1</p>
                                <ul>
                                    <li>
                                        Fasilitas kesehatan spesialitis
                                    </li>
                                </ul>
                            </div>
                            <span class="badge border border-dark text-dark">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div>Fasilitas Kesehatan Tingkat 3</div>
                                <ul>
                                    <li>
                                        Klinik utama atau yang setara, rumah sakit umum dan rumah sakit khusus.
                                    </li>
                                </ul>
                            </div>
                            <span class="badge border border-dark text-dark">14</span>
                        </li>
                    </ol>

                </div>
            </div>
            <div class="col-md-5 m-1">
                <div class="card">
                    <div class="bg-dark text-white fw-bold p-1">Daftar Fasilitas Kesehatan</div>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div>Rumah Sakit</div>

                            </div>
                            <span class="badge border border-dark text-dark">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div>Puskesmas</div>

                            </div>
                            <span class="badge border border-dark text-dark">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div>Praktek Perorangan</div>
                            </div>
                            <span class="badge border border-dark text-dark">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div>Apotek</div>
                            </div>
                            <span class="badge border border-dark text-dark">14</span>
                        </li>
                    </ol>

                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')

@endpush
