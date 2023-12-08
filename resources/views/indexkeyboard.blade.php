@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')

	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/indexbarang" class="btn btn-primary"> + Tambah Pegawai Baru</a>

	<br/>
    <p>Cari Data Pegawai :</p>
	<form  action="/pegawai/cari" method="GET" class="form-inline">
		<input class="form-control" type="text" name="cari" placeholder="Cari Nama Pegawai... " value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($keyboard as $p)
		<tr>
			<td>{{ $p->kodekeyboard }}</td>
			<td>{{ $p->merkkeyboard }}</td>
			<td>{{ $p->stockkeyboard }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
                {{-- <a href="/pegawai/viewpegawai/{{ $p->kodekeyboard }}" class="btn btn-success">View</a>

				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>

				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a> --}}
			</td>
		</tr>
		@endforeach
	</table>
    {{-- {{ $keyboard->links() }} --}}

    @endsection
