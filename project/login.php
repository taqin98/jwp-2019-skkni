<?php 

require 'config/config.php'; 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


	<div class="container">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header">
					Login Administrator
				</div>
				<div class="card-body">
					<form method="POST">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control" placeholder="Password">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="pass" class="form-control" placeholder="Password">
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					</form>
					<?php

					if (isset($_POST['submit'])) {
						
						$user = $_POST['user'];
						$pass = md5($_POST['pass']);

						$query = $conn->query("SELECT username FROM tb_admin WHERE username = '$user' AND password = '$pass' ");
						$akunygcocok = $query->num_rows;
						if ($akunygcocok==1) {
							
							$ambil = $query->fetch_assoc();
							$_SESSION['admin'] = $ambil['username'];
							echo "<script>alert('anda sukses login');</script>";
							echo "<script>location='index.php';</script>";
						} else {
							echo "<script>alert('gagal');</script>";
							echo "<script>location='login.php';</script>";
						}
					}

					?>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>