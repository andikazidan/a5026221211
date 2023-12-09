@extends('master2')

@section('title', 'Data Keyboard')

@section('konten')
    <title>View Data Keyboard</title>
    <h3>Tambah Data Keyboard</h3>

    <a href="/indexkeyboard" class="btn btn-secondary">Kembali</a>
    <br/>
    <br/>

    @foreach ($keyboard as $p)
        <form action="/keyboard/storekeyboard" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-4 border">

                </div>
                <div class="col-sm-8 ">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 control-label">Kode Keyboard</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $p->kodekeyboard }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan" class="col-sm-2 control-label">Merk Keyboard</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ $p->merkkeyboard }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="umur" class="col-sm-2 control-label">Stock Keyboard</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="umur" name="umur" value="{{ $p->stockkeyboard }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 control-label">Tersedia</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $p->tersedia }}">
                        </div>
                    </div>
                    <div class="col-sm-8 align-items-center mx-auto"><a href='/indexkeyboard' class="btn btn-success">Ok Computer</a></div>
                </div>
            </div>

        </form>
    @endforeach


@endsection
