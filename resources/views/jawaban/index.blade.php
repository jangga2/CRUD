@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3">
        <h3>Jawaban</h3>
        @foreach($jawaban as $j => $answer)
            <p>{{$answer->isi}}</p>
            <p>{{$answer->tanggal_dibuat}}</p>
            <p>{{$answer->tanggal_diperbarui}}</p>
        @endforeach


        <form action="/jawaban/{{$pertanyaan->id}}" method="post">
        @csrf
        <h3>ISI</h3>
            <table>
                <tr>
                    <td><input type="text" placeholder="Masukkan komentar" name="isi"></td>
                    <td><button class="btn btn-sm btn-info">SUBMIT</button></td>
                </tr>
            </table>
        </form>
    </div>
@endsection