@extends('master2')

@section('title', 'Data Keyboard')

@section('konten')
    <title>Tambah Data Keyboard</title>

    <table class=" table table-hover">
        <h3>Tambah Data Keyboard</h3>

        <a href="/indexkeyboard" class="btn btn-secondary"> Kembali</a>

        <form action="/indexkeyboard/storekeyboard" method="post" class="form-horizontal">
            {{ csrf_field() }}
            <tr>
            <tr>
                <div class="form-group row">
                    <td><label for="kodekeyboard" class="col-xs-3 col-form-label mr-2">Kode Keyboard</label></td>
                    <td>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="kodekeyboard" name="kodekeyboard">
                        </div>
                    </td>
                </div>
            </tr>{{-- Lakukan ulang untuk Jabatan, Umur, dan Alamat --}}
            <tr>
                <div class="form-group row">
                    <td><label for="merkkeyboard" class="col-xs-3 col-form-label mr-2">Merk Keyboard</label></td>
                    <td>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="merkkeyboard" name="merkkeyboard">
                        </div>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group row">
                    <td><label for="stockkeyboard" class="col-xs-3 col-form-label mr-2">Stock</label></td>
                    <td>
                        <div class="col-xs-9">
                            <input type="number" class="form-control" id="stockkeyboard" name="stockkeyboard">
                        </div>
                    </td>
                </div>
            </tr>
            <tr>
                <div class="form-group row">
                    <td> <label for="tersedia" class="col-xs-3 col-form-label mr-2">tersedia</label></td>
                    <td>
                        <div class="col-xs-9">
                            <textarea type="text" class="form-control" id="tersedia" name="tersedia"> </textarea>
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
