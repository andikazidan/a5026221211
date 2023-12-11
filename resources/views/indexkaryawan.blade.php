@extends('master2')

@section('title', 'Data Karyawan')

@section('konten')

	<h3>Data Karyawan</h3>
    <br>
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pegawai</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
            <th>Departemen</th>
            <th>Action</th>
		</tr>
		@foreach($karyawan as $p)
		<tr>
			<td>{{ $p->kodekaryawan }}</td>
			<td>{{ strtoupper($p->namalengkap) }}</td>
			<td>{{ $p->divisi }}</td>
            <td>{{ strtolower($p->departemen) }} </td>
			<td>

				<a href="/indexkaryawan/hapuskaryawan/{{ $p->kodekaryawan }}" class="btn btn-danger">Hapus Data</a>
			</td>
		</tr>
		@endforeach
	</table>
    <a href="/indexkaryawan/addkaryawan" class="btn btn-success">Tambah Data</a>
    {{-- {{ $keranjangbelanja->links() }} --}}

    @endsection
