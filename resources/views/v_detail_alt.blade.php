@extends('layout.v_template')
@section('title', 'Detail Alternatif')

@section('content')

<table class="table">
    <tr>
        <th width='100px'>Kode</th>
        <th width='100px'>:</th>
        <th>{{ $alternatif->id_alt }}</th>
    </tr>
    <tr>
        <th width='100px'>Nama</th>
        <th width='100px'>:</th>
        <th>{{ $alternatif->nama_alt }}</th>
    </tr>
    <tr>
        <th width='100px'>Alamat</th>
        <th width='100px'>:</th>
        <th>{{ $alternatif->alamat }}</th>
    </tr>
    <tr>
        <th width='100px'>Kategori</th>
        <th width='100px'>:</th>
        <th>{{ $alternatif->kategori }}</th>
    </tr>
    <tr>
        <th width='100px'>gambar</th>
        <th width='100px'>:</th>
        <th><img src="{{ url('foto_alternatif/'.$alternatif->gambar_alt ) }}" width="1000"></th>
    </tr>
    <tr>
        <th><a href="/alternatif" class="btn btn-success btn-sm">kembali</a></th>
    </tr>
</table>

@endsection