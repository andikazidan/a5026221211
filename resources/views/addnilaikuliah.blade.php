@extends('master2')

@section('title', 'Nilai Kuliah')

@section('konten')
    <h3>Tambah Nilai Kuliah</h3>

    <a href="/indexnilaikuliah"> Kembali</a>

    <br />
    <br />

    <form action="/indexnilaikuliah/storenilaikuliah" class="form-horizontal" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
            {{-- field input nrp --}}
            <label class="control-label col-2" for="nrp">NRP:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="nrp" placeholder="Masukkan NRP" name="nrp">
            </div>
        </div>
        <div class="form-group row">
            {{-- field input nilai angka --}}
            <label class="control-label col-2" for="nilaiangka">Nilai Angka:</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="nilaiangka" placeholder="Masukkan Nilai" name="nilaiangka">
            </div>
        </div>
        <div class="form-group row">
            {{-- field input sks --}}
            <label class="control-label col-2" for="sks">SKS:</label>
            <div class="col-md-10">
                <input type="number" class="form-control" id="sks" placeholder="Masukkan SKS" name="sks">
            </div>
        </div>
        <div class="col-sm-10">
            <input class="btn btn-primary" type="submit" value="Tambah Data">
        </div>
    </form>
@endsection
