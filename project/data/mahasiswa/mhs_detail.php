<?php
$id = $_GET['id'];
$query = $conn->query("SELECT nim, nama_mhs FROM tb_mahasiswa WHERE nim = '$id' ");
$data1 = $query->fetch_assoc();
?>

<table>
	<tr>
		<td>Nim</td>
		<td>:</td>
		<td><?= $data1['nim']; ?></td>
		<td>A = 4</td>
		<td>B = 3</td>
		<td>C = 2</td>
		<td>D = 1</td>
		<td>E = 0</td>
	</tr>
	<tr>
		<td>Nama mhs</td>
		<td>:</td>
		<td><?= $data1['nama_mhs']; ?></td>
	</tr>
</table>



<table border="1">
	<thead>
		<tr>
			<th>Mata Kuliah</th>
			<th>Sks</th>
			<th>Mutu Huruf</th>
			<th></th>
			<th>Nilai</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$id = $_GET['id'];
		$query2 = $conn->query("SELECT nama_matkul, sks, nilai FROM tb_nilai JOIN tb_matkul WHERE tb_nilai.nim = '$id' AND tb_nilai.kode_matkul = tb_matkul.kode_matkul ");
		
		$sks_x_mutu=0;
		$jml_sks=0;

		while ($data2 = $query2->fetch_assoc()) {
			?>
			<tr>
				<td><?= $data2['nama_matkul']; ?></td>
				<td><?= $data2['sks']; ?></td>
				<td>
					<?php
					if ($data2['nilai'] >= 85 && $data2['nilai'] <= 100) {

						echo "A";
						$jml_sks = $data2['sks'];
						$sks_x_mutu = 4 * $data2['sks'];

					} elseif ($data2['nilai'] >= 70 && $data2['nilai'] <= 85) {

						echo "B";
						$jml_sks = $data2['sks'];
						$sks_x_mutu = 3 * $data2['sks'];

					} elseif ($data2['nilai'] >= 60 && $data2['nilai'] <= 70) {
						
						echo "C";
						$jml_sks = $data2['sks'];
						$sks_x_mutu = 2 * $data2['sks'];

					} elseif ($data2['nilai'] >= 50 && $data2['nilai'] <= 60) {
						
						echo "D";
						$jml_sks = $data2['sks'];
						$sks_x_mutu = 1 * $data2['sks'];

					} else {

						echo "E";
						$jml_sks = $data2['sks'];
						$sks_x_mutu = 0 * $data2['sks'];

					}

					$jumlahx += $sks_x_mutu;
					$sksx += $jml_sks;
					$ipk = $jumlahx / $sksx;
					
					?>		
				</td>
				<td></td>
				<td colspan="2"><?= $zz = $data2['nilai']; ?></td>
			</tr>
			<?php
		}
		?>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="2"></td>
			<td>Total (Sks * Huruf Mutu)</td>
			<td>:</td>
			<td colspan="2">
				<?php
				 echo $jumlahx . "<br>";
				 //echo $sksx;
				?>				
			</td>
		</tr>
		<tr>
			<td colspan="2"></td>
			<td>IPK (Total / jumlah sks)</td>
			<td>:</td>
			<td>
				<?php
				echo number_format($ipk, 2);
				?>
			</td>
		</tr>
	</tfoot>
</table>


