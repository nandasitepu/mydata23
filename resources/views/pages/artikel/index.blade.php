@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table table-striped table-sm">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Uraian</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($artikel as $art)
        <tr>
            <td>{{ $art->loop  }}</td>
            <td>{{ $art->judul}}</td>
            <td>{{ $art->uraian }}</td>
            <td>
                <form action="{{ route('artikel.destroy',$art->id) }}" method="POST">

                    <a class="btn btn-sm btn-outline-dark rounded-0 border-2" href="{{ route('artikel.show',$art->id) }}">Show</a>

                    <a class="btn btn-sm btn-outline-dark rounded-0 border-2" href="{{ route('artikel.edit',$art->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-sm btn-outline-dark rounded-0 border-2">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

</div>
@endsection
