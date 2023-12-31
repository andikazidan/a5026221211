@extends('master2')

@section('title', 'Data Keyboard')

@section('konten')
	<h3>Data Pegawai</h3>

	<a href="/indexkeyboard/addkeyboard" class="btn btn-primary"> + Tambah Keyboard Baru</a>

	<br/>
    <p>Cari Data Keyboard :</p>
	<form  action="/indexkeyboard/carikeyboard" method="GET" class="form-inline">
		<input class="form-control" type="text" name="carikeyboard" placeholder="Cari Merk Keyboard... " value="{{ old("carikeyboard", isset($carikeyboard) ? $carikeyboard : '') }}">
		<input type="submit" value="carikeyboard" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Keyboard</th>
			<th>Merk Keyboard</th>
			<th>Stock Keyboard</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($keyboard as $p)
		<tr>
			<td>{{ $p->kodekeyboard }}</td>
			<td>{{ $p->merkkeyboard }}</td>
			<td>{{ $p->stockkeyboard }}</td>
            <td><input type="checkbox" {{ $p->tersedia == 'Y' ? 'checked' : '' }} disabled></td>
            <td>
                <a href="/indexkeyboard/viewkeyboard/{{ $p->kodekeyboard }}" class="btn btn-success">View</a>

				<a href="/indexkeyboard/editkeyboard/{{ $p->kodekeyboard }}" class="btn btn-warning">Edit</a>

				<a href="/indexkeyboard/hapuskeyboard/{{ $p->kodekeyboard }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{-- {{ $keyboard->links() }} --}}

    @endsection
