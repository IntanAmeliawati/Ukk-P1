@extends('template.master')

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambahkan Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('siswa.index')}}" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputid">Nisn</label>
                    <input type="integer" name="nisn" class="form-control" id="inputNisn" placeholder="Silahkan isi NISN">
                  </div>
                  <div class="form-group">
                    <label for="inputNamaKelas">Nis</label>
                    <input type="text" name="nis" class="form-control" id="inputNis" placeholder="Silahkan isi NIS">
                  </div>
                  <div class="form-group">
                    <label for="inputJurusan">Nama</label>
                    <input type="text" name="nama" class="form-control" id="inputNama" placeholder="Silahkan isi Nama">
                  </div>
                  <div class="form-group">
                    <label for="inputJurusan">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputAlamat" placeholder="Silahkan isi Alamat">
                  </div>
                  <div class="form-group">
                    <label for="inputJurusan">No_telp</label>
                    <input type="text" name="no_telp" class="form-control" id="inputNo_telp" placeholder="Silahkan isi No_telp">
                  </div>
                  <div class="form-group">
                  <label>Nama Kelas</label>
                <select class="form-control" name="kelas_id" id="kelas_id">
                 <option disable selected>--Silahkan Pilih Kelas--</option>
                 <option value="XII">XII RPL 1</option>
                 <option value="XII">XII RPL 2</option>
                 <option value="XII">XII RPL 3</option>
                </select>
                  </div>
                  <div class="form-group">
                  <label>Jumlah Nominal</label>
                <select class="form-control" name="spps_id" id="spps_id">
                 <option disabled selected>--Silahkan Pilih Nominal--</option>
                 <option value="2jt">2000000</option>
                 <option value="3jt">3000000</option>
                 <option value="4jt">4000000</option>
                 </select>
                  </div>

                <!-- /.card-body -->
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection