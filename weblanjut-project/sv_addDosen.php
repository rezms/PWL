
<?php
//memanggil file pustaka fungsi
require "fungsi.php";

//memindahkan data kiriman dari form ke var biasa
$npp=$_POST["npp"];
$namadosen=$_POST["namadosen"];
$homebase=$_POST["homebase"];

$q = "SELECT * FROM dosen WHERE npp='".$npp."'";

$rs = mysqli_query($koneksi,$q);
if(mysqli_num_rows($rs)==0)
{
	//jika npp tidak ditemukan, simpan data
	$sql = "INSERT INTO dosen VALUES('".$npp."','".$namadosen."','".$homebase."')";
	mysqli_query($koneksi,$sql);
	header("location: updateDosen.php");
}
else
{
	//jika npp ada, tampilkan peringatan
	echo "<script>
				alert('NPP yang diinput sudah ada!')
				javascript:history.go(-1)
	</script>";
}


// jika semua berjalan lancar

		// $sql="insert into dosen values('$npp','$namadosen','$homebase')";
		// mysqli_query($koneksi,$sql) or die(mysqli_error($koneksi));
		// header("location:addDosen.php");
		
?>