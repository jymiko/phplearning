<?php
include "connection.php";
	try {
		$str_Query = "select * from mahasiswa where nrp='$_GET[nrp]'";

		$str_final_Query = $my_koneksi->prepare($str_Query);

		$str_final_Query->execute();
						
	} catch (PDOException $e) {
		 die("Error: ".$e->getMessage());
	}
	
	$hasil = $str_final_Query->fetch();
?>
<form action="simpan.php" method="post">
NRP : <input type="text" name="p1" value="<?php echo $_GET['nrp'];?>"> <br>
Nama : <input type="text" name="p2" value="<?php echo $hasil['nama'];?>"> <br>
Jk : <input type="checkbox" name="p3"><input type="text" name="p3" value="<?php echo $hasil['jk'];?>"><br>
<input type="submit" value="Simpan">
</form>