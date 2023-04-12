@extends('layout.v_template')
@section('title', 'alternatif')

@section('content')
    <a href="/alternatif/add" class="btn btn-primary btn-sm">Add</a> <br>

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
                <th>Nama alternatif</th>
                <th>Alamat</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($alternatif as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->id_alt }}</td>
                <td>{{ $data->nama_alt }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->kategori }}</td>
                <td><img src="{{ url('gambar_alternatif/'.$data->gambar_alt ) }}" width="100px"></td>
                <td>
                    <a href="/alternatif/detail/{{ $data->id_alt }}" class="btn btn-sm btn-success">Detail</a>
                    <a href="/alternatif/edit/{{ $data->id_alt }}" class="btn btn-sm btn-warning">Edit</a>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_alt }}">
                        Delete
                      </button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@foreach ($alternatif as $data)
    <div class="modal fade" id="delete{{ $data->id_alt }}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Anda yakin ingin mengahpus data ini?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tidak</button>
              <a href="/alternatif/delete/{{ $data->id_alt }}" class="btn btn-outline-light">Iya</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endforeach
@endsection