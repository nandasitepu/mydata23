@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">
                        <form action="{{route('artikel.store')}}">

                            <div class="mb-3">
                                <label for="judul" class="form-label fw-bold">Judul Berita/label>
                                <input type="text" class="form-control" id="judul" aria-describedby="emailHelp">
                                <div id="judul-help" class="form-text fst-italic">Buat judul yang bagus</div>
                            </div>
                            <div class="mb-3">
                                <label for="uraian" class="form-label fw-bold">Uraian Berita</label>
                                <textarea class="form-control" name="uraian" id="" cols="30" rows="10"></textarea>

                                <div id="uraian-help" class="form-text fst-italic">Buat uraian yang bagus</div>
                            </div>

                            <div class="mb-3">
                                <label for="uraian" class="form-label fw-bold">Tag Berita</label>
                                <select class="form-select" multiple aria-label="multiple select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div id="uraian-help" class="form-text fst-italic">Pilih Tag - Max 5</div>
                            </div>
                            {{--  --}}
                            <button type="submit" class="btn btn-primary float-end">Submit</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code table lists',
    toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
  });
</script>



@endpush
