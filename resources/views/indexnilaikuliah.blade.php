@extends('master2')

@section('title', 'Nilai Kuliah')

@section('konten')
	<h3>Nilai Kuliah</h3>

	<a href="/indexnilaikuliah/addnilaikuliah" class="btn btn-primary"> + Tambah Data</a>

	<br/>
    <br/>

	<table class="table table-striped table-hover">
		<tr>
            <th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
			<th>Nilai Huruf</th>
			<th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->NilaiAngka }}</td>
			<td>{{ $p->SKS }}</td>
            <td>
                @if($p->NilaiAngka >= 81)
                    A
                @elseif($p->NilaiAngka >= 61 && $p->NilaiAngka <= 80)
                    B
                @elseif($p->NilaiAngka >= 41 && $p->NilaiAngka <= 60)
                    C
                @else
                    D
                @endif
            </td>
            <td>{{ $p->NilaiAngka * $p->SKS }}</td>
		</tr>
		@endforeach
	</table>
@endsection
