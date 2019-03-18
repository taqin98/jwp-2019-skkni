<div class="col-lg-6">
	<div class="row">
		<a href="?halaman=tambahMhs" class="btn btn-primary">Tambah Mahasiswa</a>
	</div>
</div>

<table border="1" id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Nim</th>
			<th>Nama Mahasiswa</th>
			<th>AKsi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no=1;
		$query = $conn->query("SELECT nim, nama_mhs FROM tb_mahasiswa");
		while ($data = $query->fetch_assoc()) {

			?>
			<tr>
				<td><?= $no++; ?></td>
				<td><?= $data['nim']; ?></td>
				<td><?= $data['nama_mhs']; ?></td>
				<td>
					<a class="btn btn-success" href="?halaman=detailMhs&id=<?= $data['nim']; ?>">Detail</a>
					<a class="btn btn-warning" href="?halaman=editMhs&id=<?= $data['nim']; ?>">Edit</a>
					<a class="btn btn-danger" href="?halaman=hapusMhs&id=<?= $data['nim']; ?>">Delete</a>
				</td>
			</tr>
			<?php
		}

		?>
	</tbody>
</table>