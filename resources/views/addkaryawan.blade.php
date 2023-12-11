@extends('master2')

@section('title', 'Data Karyawan')

@section('konten')
    <h3>Data Karyawan</h3>

    <a href="/indexkaryawan">Kembali</a>

    <br />


    <form action="/indexkaryawan/storekaryawan" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="kodekaryawan" class="col-xl-1 col-form-label mr-2">Kode Karyawan</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="kodekaryawan" name="kodekaryawan">
            </div>
        </div>
        <div class="form-group row">
            <label for="namalengkap" class="col-xl-1 col-form-label mr-2">Nama Lengkap</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="namalengkap" name="namalengkap">
            </div>
        </div>
        <div class="form-group row">
            <label for="divisi" class="col-xl-1 col-form-label mr-2">Divisi</label>
            <div class="col-xs-9">
                <textarea name="divisi" class="form-control" id="divisi" name="divisi"></textarea> <br />
            </div>
        </div>
        <div class="form-group row">
            <label for="departemen" class="col-xl-1 col-form-label mr-2">Departemen</label>
            <div class="col-xs-9">
                <textarea name="departemen" class="form-control" id="departemen" name="departemen"></textarea> <br />
            </div>
        </div>
        <input type="submit" value="Simpan Data">
    </form>


    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif
@endsection
