<?php
$id = $_GET['id'];
$query = $conn->query("DELETE FROM tb_mahasiswa WHERE nim = '$id' ");
if ($query) {
	
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

?>