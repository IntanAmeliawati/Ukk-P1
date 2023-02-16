@extends('template.master')

@section('content')
    <div class="card">
    <div class="card-header">
    <h3 class="card-title">Halaman Data Siswa</h3>
    </div>
      <div class="card-body">
      <div class="card-body">
        <a href="{{ route('siswa.index') }}" class="btn btn-primary">
          <i class="fas fa-plus"></i>
          Tambah Data Siswa
        </a>
      </div>
        <table id="example2" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Nisn</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No_Telp</th>
            <th>Kelas_Id</th>
            <th>Spp_Id</th>
          </tr>
          </thead>
          @foreach ($siswa as $value)
          <tbody>
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $value->nisn }}</td>
            <td>{{ $value->nis }}</td>
            <td>{{ $value->nama }}</td>
            <td>{{ $value->id_kelas }}</td>
            <td>{{ $value->alamat }}</td>
            <td>{{ $value->no_telp }}</td>
            <td>{{ $value->id_spp }}</td>
            <td>
            <form action="{{ route('siswa', [$value->id]) }}" method="POST">
              <a class="btn btn-info mr-3" href="{{ route('siswa.show', $value->id) }}">
              <i class="fa fa-info-circle"></i>
              Detail</a>
              <a class="btn btn-warning mr-3" href="{{ route('siswa.edit', $value->id) }}">
              <i class="fas fa-edit"></i>Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm-3">
                <a>Delete
                <i class="fa fa-trash"></i>
                </a>
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
      <!-- /.card-body -->
    </div>
@endsection
        </table> 
      <!-- /.card-body -->
    </div>
</div>
@endsection