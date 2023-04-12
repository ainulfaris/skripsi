@extends('layout.v_template')
@section('title', 'add kriteria')

@section('content')

<form action="/kriteria/insert" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>ID kriteria</label>
                    <input name="id_krt" class="form-control" value="{{ old('id_krt') }}">
                    <div class="text-danger">
                        @error('id_krt')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama kriteria</label>
                    <input name="nama_krt" class="form-control" value="{{ old('nama_krt') }}">
                    <div class="text-danger">
                        @error('nama_krt')
                            {{ $message }}
                        @enderror
                    </div>
                </div>


                <div class="form-group">
                    <button class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </div>
        </div>
    </div>
</form>


@endsection