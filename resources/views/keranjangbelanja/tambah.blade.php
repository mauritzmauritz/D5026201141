<!DOCTYPE html>
<html>
<head>
	<title>Beli</title>
</head>
<body>

	<h3>Beli</h3>

	<a href="/keranjangbelanja"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/keranjangbelanja/store" method="post">
		{{ csrf_field() }}
		Kode Barang <input type="text" name="KodeBarang" required="required"> <br/>
		Jumlah Barang <input type="text" name="Jumlah" required="required"> <br/>
		Harga <input type="number" name="Harga" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>