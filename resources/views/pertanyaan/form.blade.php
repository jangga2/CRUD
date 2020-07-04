@extends('adminlte.master')

@section('content')


            <div class="card card-primary ml-3 mt-3">
              <div class="card-header">
                <h3 class="card-title">Pertanyaan Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan" method="post">
              @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul Pertanyaan">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <input type="text" class="form-control" name="isi" id="isi" placeholder="Masukkan isi Pertanyaan">
                  </div>
                   <div class="form-group">
                    <label for="tanggal_dibuat">Tanggal dibuat</label>
                    <input type="date" id="tanggal_dibuat" name="tanggal_dibuat" min="2017-04-01">
                  </div>
                  <div class="form-group">
                    <label for="tanggal_diperbarui">Tanggal diperbarui</label>
                    <input type="date" id="tanggal_diperbarui" name="tanggal_diperbarui" min="2017-04-01">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

@endsection