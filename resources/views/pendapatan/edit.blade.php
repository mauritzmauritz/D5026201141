<!DOCTYPE html>
<html>
<head>
	<title>Edit Data</title>
</head>
<body>

	<h3>Data Pendapatan</h3>

	<a href="/pendapatan"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($pendapatan as $p)
	<form action="/pendapatan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
        ID Pegawai <input type="number" name="idpegawai" required="required" value ="{{ $p->pendapatan_idpegawai }}"> <br/>
		Bulan <input type="number" name="bulan" required="required" value="{{ $p->pendapatan_bulan }}"> <br/>
		Tahun <input type="text" name="tahun" required="required" value="{{ $p->pendapatan_tahun }}"> <br/>
		Gaji <input type="number" name="gaji" required="required" value="{{ $p->pendapatan_gaji }}"> <br/>
        Tunjangan <input type="number" name="tunjangan" required="required" value="{{ $p->pendapatan_tunjangan }}">
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>