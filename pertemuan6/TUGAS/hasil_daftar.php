<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Data Pendaftar</h2>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>

				<?php
                
                if (isset($_POST['proses'])) {
                    // Buat variable untuk menangkap dan menyimpan data yang dikirim
                    $proses = $_POST['proses'];
                    $namalengkap = $_POST['namalengkap'];
                    $email = $_POST['email'];
                    $alamat = $_POST['alamat'];
                    $telepon = $_POST['telepon'];

                    // Tampilkan data dari variable
                    echo "<tr>";
                    echo "<td>1</td>";
                    echo "<td>$namalengkap</td>";
                    echo "<td>$email</td>";
                    echo "<td>$alamat</td>";
                    echo "<td>$telepon</td>";
                    echo "<tr>";
                }
				?>

			</tbody>
		</table>
	</div>
</body>
</html>