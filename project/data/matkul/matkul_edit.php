<?php
$id = $_GET['id'];
$query = $conn->query("SELECT * FROM tb_matkul WHERE kode_matkul = '$id' ");
$data = $query->fetch_assoc();

?>
<f

<h3>Edit Data Matkul</h3>
<form method="POST">
	<label>Kode Matkul</label><br>
	<input type="text" maxlength="4" name="kode" value="<?= $data['kode_matkul']; ?>" required=""><br>

	<label>Nama Matkul</label><br>
	<input type="text" maxlength="100" name="nama" value="<?= $data['nama_matkul']; ?>" required=""><br>

	<label>Bobot Sks</label><br>
	<input type="numeric" maxlength="2" name="sks" value="<?= $data['sks']; ?>" required=""><br>

	<input type="submit" name="submit" value="submit"><br>
</form>

<?php

if (isset($_POST['submit'])) {
	
	$Kode 		= $_POST['kode'];
	$Nama 		= $_POST['nama'];
	$Sks 		= $_POST['sks'];

	$query2		= $conn->query("UPDATE tb_matkul SET 
				kode_matkul = '$Kode',
				nama_matkul = '$Nama',
				sks = $Sks
				WHERE kode_matkul = '$id'");
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