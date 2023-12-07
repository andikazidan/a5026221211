@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
    <title>Tambah Data Pegawai</title>

    <table class=" table table-hover">
        <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
        <h3>Tambah Data Pegawai</h3>

        <a href="/pegawai" class="btn btn-secondary"> Kembali</a>

        <form action="/pegawai/store" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <tr>
            <tr>
                <div class="form-group row">
                    <td><label for="first_name" class="col-xs-3 col-form-label mr-2">Nama</label></td>
                    <td>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                    </td>
                </div>
            </tr>{{-- Lakukan ulang untuk Jabatan, Umur, dan Alamat --}}
            <tr>
                <div class="form-group row">
                    <td><label for="first_name" class="col-xs-3 col-form-label mr-2">Jabatan</label></td>
                    <td>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="jabatan" name="jabatan">
                        </div>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group row">
                    <td><label for="first_name" class="col-xs-3 col-form-label mr-2">Umur</label></td>
                    <td>
                        <div class="col-xs-9">
                            <input type="number" class="form-control" id="umur" name="umur">
                        </div>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group row">
                    <td> <label for="first_name" class="col-xs-3 col-form-label mr-2">Alamat</label></td>
                    <td>
                        <div class="col-xs-9">
                            <textarea type="text" class="form-control" id="alamat" name="alamat"> </textarea>
                        </div>
                    </td>
                </div>
            </tr>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan Data" class="btn btn-success"> <br /></td>
            </tr>

        </form>
    </table>

@endsection
