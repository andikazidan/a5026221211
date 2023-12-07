@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>


    <table class="table table-hover">
        <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
        <h3>Edit Pegawai</h3>

        <a href="/pegawai" class="btn btn-secondary"> Kembali</a>

        @foreach ($pegawai as $p)
            <form action="/pegawai/update" method="post">
                {{ csrf_field() }}
                <tr>
                    <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
                <tr>
                    <div class="form-group row">
                        <td><label for="first_name" class="col-xs-3 col-form-label mr-2">Nama</label></td>
                        <td>
                            <div class="col-xs-9">
                                <input type="text" required="required" class="form-control" id="nama" name="nama"
                                    value="{{ $p->pegawai_nama }}">
                            </div>
                        </td>
                    </div>
                </tr>
                <tr>

                    <div class="form-group row">
                        <td><label for="first_name" class="col-xs-3 col-form-label mr-2">Jabatan</label></td>
                        <td>
                            <div class="col-xs-9">
                                <input type="text" required="required" class="form-control" id="jabatan" name="jabatan"
                                    value="{{ $p->pegawai_jabatan }}">
                            </div>
                        </td>
                    </div>
                </tr>
                <tr>

                    <div class="form-group row">
                        <td><label for="first_name" class="col-xs-3 col-form-label mr-2">Umur</label></td>
                        <td>
                            <div class="col-xs-9">
                                <input type="number" required="required" class="form-control" id="umur" name="umur"
                                    value="{{ $p->pegawai_umur }}">
                            </div>
                        </td>
                    </div>
                </tr>
                <tr>

                    <div class="form-group row">
                        <td><label for="first_name" class="col-xs-3 col-form-label mr-2">Alamat</label></td>
                        <td>
                            <div class="col-xs-9">
                                <textarea required="required" class="form-control" id="jabatan" name="jabatan" value="{{ $p->pegawai_alamat }}"> </textarea>
                            </div>
                        </td>
                    </div>
                </tr>
                </tr>

                <tr>
                    <td><input type="submit" value="Simpan Data" class="btn btn-success"> <br /></td>
                </tr>
            </form>
        @endforeach
    </table>

@endsection
