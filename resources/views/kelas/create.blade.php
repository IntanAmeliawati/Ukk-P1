@extends('template.master')

@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kelas</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('spp.store') }}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">nama_kelas</label>
                    <input type="varchar {{ (10) }}" value="{{ old('nama_kelas') }}" name="nama_kelas" class="form-control" id="exampleInputEmail1" placeholder="Enter Kelas">
                  </div>
                  @error('nama_kelas')
                  <div class="alert alert-danger" role="alert">{{ $message }}</div>
                  @enderror
                  <div class="form-group">
                    <label for="exampleInputPassword1">kompetensi_keahlian</label>
                    <input type="varchar {{ (50) }}" value="{{ old('kompetensi_keahlian') }}" name="kompetensi_keahlian" class="form-control" id="exampleInputPassword1" placeholder="Enter kompetensi_keahlian">
                  </div>
                  @error('kompetensi_keahlian')
                  <div class="alert alert-danger" role="alert">{{ $message }}</div>
                  @enderror
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

@endsection