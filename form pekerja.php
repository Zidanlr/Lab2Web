<html>
<head>
	<title>Form Pekerja</title>
</head>
<body>

	<h1>Form Data Pekerja</h1>
    <h3>Input Data Pekerja</h3>
	<form method="post" action="">
		<label>Nama:</label>
		<input type="text" name="nama"><br><br>
		<label>Tanggal Lahir:</label>
		<input type="date" name="tgl_lahir"><br><br>
		<label>Pekerjaan:</label>
		<select name="pekerjaan">
			<option value="Manager">Manager</option>
            <option value="Cs">Cs</option>
            <option value="Staff">Staff</option>
			<option value="Programmer">Programmer</option>
			<option value="Designer">Designer</option>
		</select><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<?php
	if(isset($_POST['submit'])){
		$nama = $_POST['nama'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$pekerjaan = $_POST['pekerjaan'];
		
        $umur = date_diff(date_create($tgl_lahir), date_create('now'))->y;

		switch($pekerjaan){
			case "Manager":
				$gaji = 15000000;
				break;
            case "Cs":
				$gaji = 5000000;
				break;
            case "Staff":
                $gaji = 9000000;
                break;
			case "Programmer":
				$gaji = 10000000;
				break;
			case "Designer":
				$gaji = 10000000;
				break;
			default:
				$gaji = 0;
		}

		echo "<h3>Output Data Pekerja</h3>";
		echo "<p>Nama: ".$nama."</p>";
		echo "<p>Umur: ".$umur." tahun</p>";
		echo "<p>Pekerjaan: ".$pekerjaan."</p>";
		echo "<p>Gaji: Rp ".$gaji."</p>";
	}
	?>
</body>
</html>