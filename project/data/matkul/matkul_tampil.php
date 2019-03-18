<div class="col-lg-6">
	<div class="row">
<a href="?halaman=tambahMatkul" class="btn btn-primary">Tambah Data Matkul</a>
</div>
</div>
<table border="1" id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Kode Matkul</th>
			<th>Nama Matkul</th>
			<th>Bobot Sks</th>
			<th>AKsi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no=1;
		$query = $conn->query("SELECT kode_matkul, nama_matkul, sks FROM tb_matkul");
		while ($data = $query->fetch_assoc()) {

			?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $data['kode_matkul']; ?></td>
				<td><?= $data['nama_matkul']; ?></td>
				<td><?= $data['sks']; ?></td>
				<td>
					<a class="btn btn-warning" href="?halaman=editMatkul&id=<?= $data['kode_matkul']; ?>">Edit</a>
					<a class="btn btn-danger" href="?halaman=hapusMatkul&id=<?= $data['kode_matkul']; ?>">Delete</a>
				</td>
			</tr>
			<?php
		}

		?>
	</tbody>
</table>