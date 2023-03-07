@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header fw-bold">Detail Peraturan</div>
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"> Peraturan</th>
                            <td> Nomor {{ $hukum->nomor }}</td>

                        </tr>
                        <tr>
                            <th scope="row"> Tentang </th>
                            <td> Tentang {{ $hukum->tentang }} </td>

                        </tr>
                        <tr>
                            <th scope="row"> Tanggal </th>
                            <td> {{ $hukum->tanggal }}</td>

                        </tr>

                    </tbody>
                </table>



            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
