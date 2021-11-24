<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	<h3>Data Pendapatan</h3>

	<a href="/pendapatan/tambah"> + Tambah Data Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>IDPegawai</th>
			<th>Bulan</th>
			<th>Tahun</th>
			<th>Gaji</th>
			<th>Tunjangan</th>
			<th>Opsi</th>
		</tr>
		@foreach($pendapatan as $p)
		<tr>
			<td>{{ $p->pendapatan_idpegawai }}</td>
			<td>{{ $p->pendapatan_bulan }}</td>
			<td>{{ $p->pendapatan_tahun }}</td>
			<td>{{ $p->pendapatan_gaji }}</td>
			<td>{{ $p->pendapatan_tunjangan }}</td>
			<td>
				<a href="/pendapatan/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/pendapatan/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>