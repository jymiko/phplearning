<?php
$nama="Jatmiko";
$alamat="Jl.Gadang gang 17b no 17b";
$notelp="085649806398";
$tgl_lahir="28-06-1992";
$today=date("Y-m-d");
$umur=date_diff(date_create($tgl_lahir),date_create($today));

echo "Nama : $nama";
echo "<br>";
echo "Alamat :$alamat";
echo "<br>";
echo "No Telepon :$notelp";
echo "<br>";
echo "Umur :" .$umur->format('%y');
?>