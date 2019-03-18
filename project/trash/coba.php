<?php
require 'config/config.php';
$query1 = $conn->query("SELECT nama_matkul, sks, nilai FROM tb_nilai JOIN tb_matkul WHERE tb_nilai.nim='A22201602514' AND tb_nilai.kode_matkul=tb_matkul.kode_matkul");
while ($data = $query1->fetch_assoc()) {
	echo $data['nama_matkul'] . ": ";
	echo $data['sks'] . "|";
	echo $data['nilai'] . "<br>";
}

?>