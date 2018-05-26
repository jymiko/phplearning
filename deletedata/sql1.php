<?php

include "connection.php";

	try {
		$str_Query = "select * from mahasiswa";

		$str_final_Query = $my_koneksi->prepare($str_Query);

		$str_final_Query->execute();
						
	} catch (PDOException $e) {
		 die("Error: ".$e->getMessage());
	}
	
	$hasil = $str_final_Query->fetchAll();
	echo '<table>';
	foreach($hasil as $baris){
		echo '<tr><td>';
		echo $baris['nrp'];
		echo '</td><td>';
		echo $baris['nama'];
		echo '</td><td>';
		echo $baris['jk'];
		echo '</td><td>';
		echo "<a href='edit.php?nrp=$baris[nrp]'>Edit</a>";
		echo " | <a href='delete.php?nrp=$baris[nrp]'>Delete</a>";
		echo '</td></tr>';
	} 
	echo '</table>';

?>
