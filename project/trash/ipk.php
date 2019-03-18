<?php

$query9 = $conn->query("SELECT nama_matkul, sks, nilai FROM tb_nilai JOIN tb_matkul WHERE tb_nilai.nim = '$id' AND tb_nilai.kode_matkul = tb_matkul.kode_matkul ");
$nm=0;
$jml_sks=0;
while ($data2 = $query9->fetch_assoc()) {
	# code...
	echo $data2['nama_matkul'] . "<br>";
	echo $data2['sks'] . ":";

	if ($data2['nilai'] >= 85 && $data2['nilai'] <= 100) {
						echo "A";
						$jml_sks = $data2['sks']; 
						$nm = 4 * $jml_sks;
					} elseif ($data2['nilai'] >= 70 && $data2['nilai'] <= 85) {
						echo "B";
						$jml_sks = $data2['sks'];
						$nm = 3 * $data2['sks'];
					} elseif ($data2['nilai'] >= 60 && $data2['nilai'] <= 70) {
						echo "C";
						$jml_sks = $data2['sks'];
						$nm = 2 * $data2['sks'];
					} elseif ($data2['nilai'] >= 50 && $data2['nilai'] <= 60) {
						echo "D";
						$jml_sks = $data2['sks'];
						$nm = 1 * $data2['sks'];
					} else {
						echo "E";
						$jml_sks = $data2['sks'];
						$nm = 0 * $data2['sks'];
					}
					echo "<br>";

	echo $jumlahx += $nm;
	echo $sksx += $jml_sks;

	echo $jumlahx / $sksx;


}
?>