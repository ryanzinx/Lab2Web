<!DOCTYPE html>
<html>

<head>
	<title>Form Input</title>
	<style>
		table {
			border-collapse: collapse;
			border: 2px solid black;
			margin: auto;
		}

		th,
		td {
			padding: 10px;
			text-align: center;
			border: 1px solid black;
		}
	</style>
</head>

<body>
	<center><h1>Form Input</h1></center>
	<form method="post" action="">
		<table>
			<tr>
				<th>Nama:</th>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<th>Tanggal Lahir:</th>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>
			<tr>
				<th>Pekerjaan:</th>
				<td>
					<select name="pekerjaan">
						<option value="programmer">Programmer</option>
						<option value="designer">Designer</option>
						<option value="manager">Manager</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Submit"></td>
			</tr>
		</table>
	</form>
	<br>
	<?php
	if ($_POST) {
		$nama = $_POST['nama'];
		$tanggal_lahir = $_POST['tanggal_lahir'];
		$pekerjaan = $_POST['pekerjaan'];

		// hitung umur
		$tanggal_sekarang = date('Y-m-d');
		$umur = date_diff(date_create($tanggal_lahir), date_create($tanggal_sekarang))->y;

		// hitung gaji
		switch ($pekerjaan) {
			case 'programmer':
				$gaji = 10000000;
				break;
			case 'designer':
				$gaji = 8000000;
				break;
			case 'manager':
				$gaji = 15000000;
				break;
			default:
				$gaji = 0;
				break;
		}

		// tampilkan output
		echo "<center><h2>Output</h2></center>";
		echo "<table>";
		echo "<tr><th>Nama</th><td>$nama</td></tr>";
		echo "<tr><th>Tanggal Lahir</th><td>$tanggal_lahir</td></tr>";
		echo "<tr><th>Umur</th><td>$umur tahun</td></tr>";
		echo "<tr><th>Pekerjaan</th><td>$pekerjaan</td></tr>";
		echo "<tr><th>Gaji</th><td>Rp. " . number_format($gaji, 0, ',', '.') . "</td></tr>";
		echo "</table>";
	}
	?>
</body>

</html>