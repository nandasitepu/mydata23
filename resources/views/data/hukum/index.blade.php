@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Data Hukum</div>
            <div class="card-body">
                @foreach ($hukum as $hkm)
                  <ul> <li>{{ $hkm->nomor}}</li></ul>
                @endforeach
            </div>
        </div>
    </div>

    {!! $hukum->links() !!}
@endsection


