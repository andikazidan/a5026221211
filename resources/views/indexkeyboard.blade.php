@extends('master2')

@section('title', 'Data Keyboard')

@section('konten')
	<h3>Data Pegawai</h3>

	<a href="/indexkeyboard/addkeyboard" class="btn btn-primary"> + Tambah Keyboard Baru</a>

	<br/>
    <p>Cari Data Pegawai :</p>
	<form  action="/pegawai/cari" method="GET" class="form-inline">
		<input class="form-control" type="text" name="cari" placeholder="Cari Nama Pegawai... " value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
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
			<td>{{ $p->tersedia }}</td>
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
