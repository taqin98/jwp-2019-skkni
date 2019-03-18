<h3>Tambah Data Matkul</h3>
<form method="POST">
	<label>Kode Matkul</label><br>
	<input type="text" maxlength="4" name="kode" placeholder="Masukkan Kode Matkul" required=""><br>

	<label>Nama Matkul</label><br>
	<input type="text" maxlength="100" name="nama" placeholder="Masukkan Nama Matkul" required=""><br>

	<label>Bobot Sks</label><br>
	<input type="numeric" maxlength="2" name="sks" placeholder="Masukkan Angka" required=""><br>

	<input type="submit" name="submit" value="submit"><br>
</form>

<?php

if (isset($_POST['submit'])) {
	
	$Kode 		= $_POST['kode'];
	$Nama 		= $_POST['nama'];
	$Sks 		= $_POST['sks'];

	$query2		= $conn->query("INSERT INTO tb_matkul (kode_matkul,nama_matkul, sks) VALUES('$Kode', '$Nama', '$Sks')");
	if ($query2) {
		?>
		<script type="text/javascript">
			alert("Berhasil");
			document.location = '?halaman=tampilMatkul';
		</script>
		<?php
	} else {
		?>
		<script type="text/javascript">
			alert("Gagal");
			document.location = '?halaman=tampilMatkul';
		</script>
		<?php
	}
}
?>