@extends('master2')

@section('title', 'Data Keyboard')

@section('konten')
    <title>CRUD in Laravel</title>


    <table class="table table-hover">
        <h3>Edit Keyboard</h3>

        <a href="/indexkeyboard" class="btn btn-secondary">Kembali</a>

        @foreach ($keyboard as $p)
            <form action="/indexkeyboard/updatekeyboard" method="post">
                {{ csrf_field() }}
                <tr>
                    <input type="hidden" name="kodekeyboard" value="{{ $p->kodekeyboard }}"> <br />
                <tr>
                    <div class="form-group row">
                        <td><label for="first_name" class="col-xs-3 col-form-label mr-2">Merk Keyboard</label></td>
                        <td>
                            <div class="col-xs-9">
                                <input type="text" required="required" class="form-control" id="merkkeyboard" name="merkkeyboard"
                                    value="{{ $p->merkkeyboard }}">
                            </div>
                        </td>
                    </div>
                </tr>
                <tr>

                    <div class="form-group row">
                        <td><label for="first_name" class="col-xs-3 col-form-label mr-2">Stock Keyboard</label></td>
                        <td>
                            <div class="col-xs-9">
                                <input type="text" required="required" class="form-control" id="stockkeyboard" name="stockkeyboard"
                                    value="{{ $p->stockkeyboard }}">
                            </div>
                        </td>
                    </div>
                </tr>
                <tr>

                    <div class="form-group row">
                        <td><label for="first_name" class="col-xs-3 col-form-label mr-2">Tersedia</label></td>
                        <td>
                            <div class="col-xs-9">
                                <input type="text" required="required" class="form-control" id="tersedia" name="tersedia"
                                    value="{{ $p->tersedia }}">
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
