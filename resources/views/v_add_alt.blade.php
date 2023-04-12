@extends('layout.v_template')
@section('title', 'add alternatif')

@section('content')

<form action="/alternatif/insert" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>ID alternatif</label>
                    <input name="id_alt" class="form-control" value="{{ old('id_alt') }}">
                    <div class="text-danger">
                        @error('id_alt')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Nama alternatif</label>
                    <input name="nama_alt" class="form-control" value="{{ old('nama_alt') }}">
                    <div class="text-danger">
                        @error('nama_alt')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input name="alamat" class="form-control" value="{{ old('alamat') }}">
                    <div class="text-danger">
                        @error('alamat')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Kategori</label>
                    <input name="kategori" class="form-control" value="{{ old('kategori') }}">
                    <div class="text-danger">
                        @error('kategori')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar_alt" class="form-control" value="{{ old('gambar_alt') }}">
                    <div class="text-danger">
                        @error('gambar_alt')
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