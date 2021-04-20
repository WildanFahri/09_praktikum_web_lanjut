@extends('mahasiswa.layout')
@section('content')
<div class="row">
    <div class="col-12 text-center">
        <h3><strong>KARTU HASIL STUDI (KHS)</strong></h3>
    </div>
    <div class="col-12 my-4">
        <br>
        <br>
        <p class="m-0"><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
        <p class="m-0"><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
        <p class="m-0"><strong>Kelas:</strong> {{ $mahasiswa->kelas->nama_kelas }}</p>
    </div>
    <div class="col-12">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <table class="table table-bordered">
            <tr>
                <th>Mata Kuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
            @foreach ($mahasiswa->matakuliah as $matakuliah)
                <tr>
                    <td>{{ $matakuliah->nama_matkul }}</td>
                    <td>{{ $matakuliah->sks }}</td>
                    <td>{{ $matakuliah->semester }}</td>
                    <td>{{ $matakuliah->pivot->nilai }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
