<?php

	$alamat_server = 'localhost';
	$nama_database = 'stiki';
	$user_database = 'root';
	$pass_database = '';
	
	$data_server = "mysql:host=$alamat_server;dbname=$nama_database";
	
	try {
		$my_koneksi = new PDO($data_server,$user_database,$pass_database);

		$my_koneksi->setAttribute(
			PDO::ATTR_ERRMODE, 				
			PDO::ERRMODE_EXCEPTION);
	}  catch (PDOException $e) {		
		echo "Error: ".$e->getMessage();
		die();
	}

	function kembali($url){
		header("location: $url");
	}
	
	function simpan_mahasiswa(){
		global $my_koneksi;
		try {
			$str_Query = "UPDATE mahasiswa SET nama = :a1, jk = :a2 WHERE nrp = :a3";

			$str_final_Query = $my_koneksi->prepare($str_Query);
			
			$data2 = $_POST['p3'];
			$data3 = $_POST['p1'];
			
			$str_final_Query->bindValue(':a1',$_POST['p2']);
			$str_final_Query->bindValue(':a2',$data2);
			$str_final_Query->bindValue(':a3',$data3);
			
			$str_final_Query->execute();				
		} catch (PDOException $e) {
			 die("Error: ".$e->getMessage());
		}
	}

	function delete_mahasiswa(){
		global $my_koneksi;
		try{
			$str_Query = "DELETE fROM mahasiswa where nrp= :a3";
			$str_final_Query = $my_koneksi->prepare($str_Query);

			$data3 =$_POST['p1'];

			$str_final_Query->bindValue(':a3',$data3);
			$str_final_Query->execute();
		}catch(PDOException $e){
			die("Error: ".$e->getMessage());
		}
	}
?>