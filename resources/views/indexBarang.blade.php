@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')

	<h3>Keranjang Belanja Anda</h3>
    <a href="/indexBarang/addbarang" class="btn btn-success">Beli</a>
    <br>
	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga</th>
            <th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->KodeBarang }}</td>
			<td>{{ $p->Jumlah }}</td>
            <td>{{ number_format($p->Harga, 0, ',', '.') }}</td>
            <td>{{ number_format($p->Harga * $p->Jumlah, 0, ',', '.') }}</td>
			<td>

				<a href="/indexBarang/hapus/{{ $p->ID }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{-- {{ $keranjangbelanja->links() }} --}}

    @endsection
