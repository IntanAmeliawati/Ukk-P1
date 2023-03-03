@extends('template.master')

@section('judul')
    <h1>Halaman Detail</h1>
@endsection

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Detail Spp</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="petugas/create" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputnama_petugas">Nama_petugas</label>
                    <input type="text" name="nama_petugas" class="form-control" id="inputnama_petugas" value="{{ $users->nama_petugas }}" disabled  >
                  </div>
                <div class="form-group">
                    <label for="inputusername">Username</label>
                    <input type="text" name="username" class="form-control" id="inputusername" value="{{ $users->username }}" disabled>
                  </div>
                <div class="form-group">
                    <label for="inputpassword">Password</label>
                    <input type="password" name="password" class="form-control" id="inputpassword" value="{{ $users->password }}" disabled>
                  </div>
                  <label for="input_level">Level</label>
                  <select  type="text" name="level" class="form-control" id="inputnisn" require >
                        <option value="{{ $petugas->level }}" >{{ $petugas->level }}</option>
                        <option value="{{ $petugas->level }}" >petugas</option>
                        <option value="{{ $petugas->level }}" >admin</option>
                    </select>
                
                <!-- /.card-body -->
                <div class="card-footer">
                <a class="btn btn-primary" href="/petugas">Back</a>
                </div>
              </form>
            </div>
@endsection