# Tugas membuat form pekerja dengan PHP Sederhana

## form pekerja

* Screnshoot hasil di web
<img src="ss hasil web.png">


*  HTML tags untuk membuat tampilan form input dan output.

    ```html
        <html>
    <head>
        <title>Form Pekerja</title>
    </head>
    <body>


* Pembuatan form input yang terdiri dari tiga input fields (nama, tanggal lahir, dan pekerjaan) dan satu submit button. Setiap input field harus diisi (required).
  
    ```html
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



* PHP code yang akan dieksekusi setelah user menekan tombol submit. Data dari form input akan disimpan dalam variabel-variabel ($nama, $tgl_lahir, dan $pekerjaan).
  
    ```php
 		<input type="submit" name="submit" value="Submit">
	</form>
	<?php
	if(isset($_POST['submit'])){
		$nama = $_POST['nama'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$pekerjaan = $_POST['pekerjaan'];
		
        $umur = date_diff(date_create($tgl_lahir), date_create('now'))->y;


* Menggunakan fungsi date_diff() untuk menghitung umur berdasarkan tanggal lahir. Hasil perhitungan disimpan dalam variabel $umur.
  
  ```php
  $umur = date_diff(date_create($tgl_lahir), date_create('now'))->y;


* Menggunakan statement switch untuk menentukan gaji sesuai pilihan pekerjaan. Setiap pekerjaan memiliki gaji yang berbeda-beda. Hasil perhitungan disimpan dalam variabel $gaji.
    
    ```php
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


* Menampilkan tampilan output dari data yang sudah diinput
  
  ```php
            echo "<h3>Output Data Pekerja</h3>";
            echo "<p>Nama: ".$nama."</p>";
            echo "<p>Umur: ".$umur." tahun</p>";
            echo "<p>Pekerjaan: ".$pekerjaan."</p>";
            echo "<p>Gaji: Rp ".$gaji."</p>";
        }

        ?>

    </body>
    </html>



## module praktikum pemrograman web 2
Screenshot program module Praktikum Pemrograman Web 2
<img src="ss module.png">
