<!-- 
==========================================================
Author - Nurul Muttaqin
Created : 14/03/2019
Updated : 15/03/2019
Version : v4
About : Pelatihan dan Sertifikasi SKKNI 2019
===========================================================

CSS & JS
-Bootstrap : https://getbootstrap.com/
-Datables : https://datatables.net/ 

Programing Leanguage
- PHP v7.2.14 : http://www.php.net/

DBMS
- MySQL v5.7.24 : https://www.mysql.com/

WEB SERVER
- WampServer Version 3.1.7 64bit : http://www.wampserver.com/en/
-->

<?php
require 'config/config.php';

if (!isset($_SESSION['admin']))
{
  echo "<script>alert('Anda Harus Login');</script>";
  echo "<script>location='login.php';</script>";
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
	table {
		width: 100%;
	}
</style>
</head>
<body>
	
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<div class="container">
				<a class="navbar-brand" href="index.php">Home</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="?halaman=tampilMhs">Data Mahasiswa <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="?halaman=tampilMatkul">Data Matakuliah <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="?halaman=tambahNilai">Tambah Nilai <span class="sr-only">(current)</span></a>
						</li>
					</ul>
					<div class="nav-item my-2 my-lg-0">
						<label><?php if (isset($_SESSION['admin'])) {
							echo $_SESSION['admin'];
						} ?></label>
						<a href="logout.php" class="btn btn-warning my-2 my-sm-0">Logout</a>
					</div>
				</div>

			</div>
		</nav>
	</header>
	<br>
	<br>
	<main>
		<div class="container">
			<?php
			error_reporting(E_ALL ^ (E_WARNING | E_NOTICE));
			switch ($_GET['halaman']) {

			//Mahasiswa
				case 'tampilMhs':
				include 'data/mahasiswa/mhs_tampil.php';
				break;
				case 'tambahMhs':
				include 'data/mahasiswa/mhs_tambah.php';
				break;
				case 'editMhs':
				include 'data/mahasiswa/mhs_edit.php';
				break;
				case 'detailMhs':
				include 'data/mahasiswa/mhs_detail.php';
				break;
				case 'hapusMhs':
				include 'data/mahasiswa/mhs_hapus.php';
				break;

			//Matakuliah
				case 'tampilMatkul':
				include 'data/matkul/matkul_tampil.php';
				break;
				case 'tambahMatkul':
				include 'data/matkul/matkul_tambah.php';
				break;
				case 'editMatkul':
				include 'data/matkul/matkul_edit.php';
				break;
				case 'hapusMatkul':
				include 'data/matkul/matkul_hapus.php';
				break;


				case 'tambahNilai':
				include 'data/nilai/nilai_tambah.php';
				break;

				default:
				?>
				<h3>Selamat Datang Asesor Junior Web Programing 2019</h3>
				<?php
				break;
			}
			?>
		</div>
	</main>
	<footer>
		<section>

		</section>
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript">	
		$(document).ready( function () {
			$('#example1').DataTable();
		} );
	</script>
</body>
</html>