@extends('mahasiswa.layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem">
            <div class="card-header">
                Detail Mahasiswa
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Nim: </b> {{$Mahasiswa->Nim}} </li>
                    <li class="list-group-item"><b>Nama: </b> {{$Mahasiswa->nama}} </li>
                    <li class="list-group-item"><b>Kelas: </b> {{$Mahasiswa->kelas->nama_kelas}} </li>
                    <li class="list-group-item"><b>Jurusan: </b> {{$Mahasiswa->jurusan}} </li>
                    <li class="list-group-item"><b>No_Handphone: </b> {{$Mahasiswa->no_handphone}} </li>
                </ul>
            </div>
            <a href="{{route('mahasiswa.index')}}" class="btn btn-success mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
