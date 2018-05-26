<?php 
    function writeMsg($a, $b = 1) {
        if($b == 1) {
            echo "Error: ".$a;
        } else if($b == 2) {
            echo "Warning: ".$a;
        }
    }
    writeMsg("Testing", 1); // memanggil fungsi writeMsg
    echo "<br>";
    function sum($a, $b) {
        $hasil = $a + $b;
        return $hasil;
    }
    echo sum(100,150);
    echo "<br>";
    function form_open($url_tujuan, $method = "get") {
        echo '<form action="'.$url_tujuan.'" method="'.$method.'">';
    }
    form_open("w3schools.com", "post");
    function form_input($nama, $nilai = "") {
        echo '<input type="text" name="'.$nama.'" value="'.$nilai.'">';
    }
    form_input("a", "test");
?>