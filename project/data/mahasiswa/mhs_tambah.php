<form method="POST">
	<label>Nim</label><br>
	<input type="text" maxlength="16" name="nim" placeholder="Masukkan Nim Anda" required=""><br>

	<label>Nama Mahasiswa</label><br>
	<input type="text" maxlength="100" name="nama" placeholder="Masukkan Nama Anda Anda" required=""><br>

	<input type="submit" name="submit" value="submit"><br>
</form>

<?php

if (isset($_POST['submit'])) {
	
	$Nim 		= $_POST['nim'];
	$Nama 		= $_POST['nama'];

	$query2		= $conn->query("INSERT INTO tb_mahasiswa VALUES('$Nim', '$Nama')");
	if ($query2) {
		?>
		<script type="text/javascript">
			alert("Berhasil");
			document.location = '?halaman=tampilMhs';
		</script>
		<?php
	} else {
		?>
		<script type="text/javascript">
			alert("Gagal");
			document.location = '?halaman=tampilMhs';
		</script>
		<?php
	}
}
?>