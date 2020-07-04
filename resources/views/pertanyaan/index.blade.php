@extends('adminlte.master')

@section('content')



<div class="ml-3 mt-3">
    <h1>Daftar Pertanyaan</h1>
    <a href="/pertanyaan/create" class="btn btn-primary">
            Buat pertanyaan baru
    </a>

        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Tanggal dibuat</th>
                        <th>Tanggal diperbarui</th>
                        <th>Jawaban</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pertanyaan as $p => $tanya)
                    <tr>
                    <td>{{$p+1}}</td>
                    <td>{{$tanya->judul}}</td>
                    <td>{{$tanya->isi}}</td>
                    <td>{{$tanya->tanggal_dibuat}}</td>
                    <td>{{$tanya->tanggal_diperbarui}}</td>
                    <td>
                        <input type="text" placeholder="Masukkan jawaban" name="jawaban">
                    </td>
                    <td><a href="jawaban/{{$tanya->id}}" class="btn btn-sm btn-info">Tampilkan Jawaban</a></td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
</div>
@endsection