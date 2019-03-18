<?php
$id = $_GET['id'];
$query = $conn->query("DELETE FROM tb_matkul WHERE kode_matkul = '$id' ");
if ($query) {
	
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

?>