<?php
$id = $_GET['id'];
$query = $conn->query("SELECT * FROM tb_mahasiswa WHERE nim = '$id' ");
$data = $query->fetch_assoc();

?>
<form method="POST">
	<label>Nim</label><br>
	<input type="text" maxlength="16" name="nim" value="<?= $data['nim']; ?>" required=""><br>

	<label>Nama Mahasiswa</label><br>
	<input type="text" maxlength="100" name="nama" value="<?= $data['nama_mhs']; ?>" required=""><br>

	<input type="submit" name="submit" value="submit"><br>
</form>

<?php

if (isset($_POST['submit'])) {
	
	$Nim 		= $_POST['nim'];
	$Nama 		= $_POST['nama'];

	$query2		= $conn->query("UPDATE tb_mahasiswa SET 
		          nim = '$Nim', 
		 		  nama_mhs = '$Nama' 
		 		  WHERE nim = '$id' ");
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