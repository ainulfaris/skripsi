@extends('layout.v_template')
@section('title', 'kriteria')

@section('content')
<a href="" class="btn btn-primary btn-sm">Add</a> <br>

@if (session('pesan'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Success</h5>
    {{ session('pesan') }}
  </div>
@endif
<table class=table table-bordered>
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama kriteria</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach ($kriteria as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->id_krt }}</td>
            <td>{{ $data->nama_krt }}</td>
            <td>
                <a href="" class="btn btn-sm btn-warning">Edit</a>
                <a href="" class="btn btn-sm btn-danger">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection