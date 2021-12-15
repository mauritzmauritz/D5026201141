<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
</head>
<body>

	<h3>Keranjang Belanja</h3>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga Per Item</th>
			<th>Total</th>
			<th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->keranjangbelanja_ID }}</td>
			<td>{{ $p->keranjangbelanja_KodeBarang }}</td>
			<td>{{ $p->keranjangbelanja_Jumlah }}</td>
			<td>{{ $p->keranjangbelanja_Harga }}</td>
			<td>{{ number_format(($p->Jumlah)*($p->Harga)) }}</td>
				<a href="/keranjangbelanja/tambah/{{ $p->id }}">Beli</a>
				|
				<a href="/keranjangbelanja/hapus/{{ $p->id }}">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>