@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
    <h3>Data Belanja</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    <form action="/indexBarang/storebarang" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="KodeBarang" class="col-xl-1 col-form-label mr-2">KodeBarang</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="KodeBarang" name="KodeBarang">
            </div>
        </div>
        <div class="form-group row">
            <label for="Jumlah" class="col-xl-1 col-form-label mr-2">Jumlah</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="Jumlah" name="Jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label for="Harga" class="col-xl-1 col-form-label mr-2">Harga</label>
            <div class="col-xs-9">
                <textarea name="Harga" class="form-control" id="Harga" name="Harga"></textarea> <br />
            </div>
        </div>
        <input type="submit" value="Simpan Data">
    </form>

@endsection
