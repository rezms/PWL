<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik::Daftar Dosen</title>
    <link rel="stylesheet" type="text/css" href="bootstrap4/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styleku.css">
	<script src="bootstrap4/jquery/3.3.1/jquery-3.3.1.js"></script>
	<script src="bootstrap4/js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
    <div class="utama">
    <h2 class="text-center">Daftar Dosen</h2>
	<span class="float-left">
		<a class="btn btn-success" href="addDosen.php">Tambah Data</a>
	</span>
	<br><br>

    <table>
    <table class="table table-hover">
	<thead class="thead-light">
        <tr>
        <th>No</th>
        <th>NPP</th>
        <th>Nama Dosen</th>
        <th style="text-align: center">Homebase</th>
        <br>
        </tr>
    <?php
        include "fungsi.php";
        include "head.html";
        
        $q = "SELECT * from dosen";
        $query = mysqli_query($koneksi,$q) OR die(mysqli_error($koneksi));

        
        $no = 0;
       
        while($rs = mysqli_fetch_assoc($query)){
            $no++;
          ?>
        <tr>
                <td><?php echo $no?></td>
				<td><?php echo $rs["npp"]?></td>
				<td><?php echo $rs["namadosen"]?></td>
				<td style="text-align: center"><?php echo $rs["homebase"]?>
                <a class="btn btn-danger btn-sm" href="hpsDosen.php?kode=<?php 
                echo enkripsiurl($row["npp"])?>" id="linkHps" onclick="return confirm ('Yakin dihapus?')">Hapus</a>
				</td> 
		</tr>
		<?php 
        }
        ?>
    </table>
    </div>
</body>

</html>