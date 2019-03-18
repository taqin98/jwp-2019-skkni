<h3>Tambah Nilai</h3>
<form method="POST">
	<label>Nama Mhs</label><br>
	<select name="nim">
		<option readonly>Pilih Mhs</option>
		<?php
		$query1 = $conn->query("SELECT nim, nama_mhs FROM tb_mahasiswa");
		while ($data = $query1->fetch_assoc()) {
			?>
			<option value="<?= $data['nim']; ?>"><?= $data['nama_mhs'] ?></option>
			<?php
		}
		?>	
	</select><br>

	<label>Nama Matkul</label><br>
	<select name="kode">
		<option readonly>Pilih Matkul</option>
		<?php
		$query1 = $conn->query("SELECT kode_matkul, nama_matkul FROM tb_matkul");
		while ($data = $query1->fetch_assoc()) {
			?>
			<option value="<?= $data['kode_matkul']; ?>"><?= $data['nama_matkul'] ?></option>
			<?php
		}
		?>	
	</select><br>

	<label>Nilai</label><br>
	<input type="numeric" maxlength="3" name="nilai" placeholder="Masukkan Angka" required=""><br>

	<input type="submit" name="submit" value="submit"><br>
</form>

<?php

if (isset($_POST['submit'])) {
	
	$Nim 		= $_POST['nim'];
	$Kode 		= $_POST['kode'];
	$nilai 		= $_POST['nilai'];

	$query2		= $conn->query("INSERT INTO tb_nilai (kode_matkul, nim, nilai) VALUES('$Kode', '$Nim', '$nilai')");
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