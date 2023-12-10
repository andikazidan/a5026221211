@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
    <h3>Data Belanja</h3>

    <a href="/indexkeyboard"> Kembali</a>

    <br />
    <br />

    <form action="/indexkeyboard/storekeyboard" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <div class="col-xs-9">
                <input type="hidden" class="form-control" id="kodekeyboard" name="kodekeyboard">
            </div>
        </div>

        <div class="form-group row">
            <label for="merkkeyboard" class="col-xl-1 col-form-label mr-2">Merk Keyboard</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="merkkeyboard" name="merkkeyboard">
            </div>
        </div>

        <div class="form-group row">
            <label for="stockkeyboard" class="col-xl-1 col-form-label mr-2">Stock Keyboard</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="stockkeyboard" name="stockkeyboard">
            </div>
        </div>

        <input type="submit" value="Simpan Data">
    </form>

@endsection
