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
<form action="hapus.php" method="post">
Apakah data Mahasiswa dengan NRP : <?php echo $_GET['nrp'];?>
<input type="hidden" name="p1" value="<?php echo $_GET['nrp'];?>"> dengan 
Nama <?php echo $hasil['nama'];?> dan 
Jenis kelamin <?php echo $hasil['jk'];?> benar akan dihapus?<br>
<input type="submit" value="Ya" name="hapus">
<input type="submit" value="Tidak" name="hapus">
</form>