<?php
function writeMsg($first,$second = 1) {
    if($second == 1) {
        echo "Error: ".$first;
    } else if($second == 2) {
        echo "Warning: ".$first;
    }
}
writeMsg("Testing",1); // memanggil fungsi writeMsg

function sum($nilia1,$nilai2){
    $hasil = $nilia1+$nilai2;
    return $hasil;
}
echo "<br>";
echo sum(100,150);

function form_open($url_tujuan,$method){
    echo '<form action="'.$url_tujuan.'" method="'.$method.'">';
}

form_open("www.github.com","get");
function form_input($nama, $nilai = "") {
    echo '<input type="text" name="'.$nama.'" value="'.$nilai.'">';
}

form_input("miko", "nilai kosong");
?>