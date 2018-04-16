<?php
    $a = array(array('nrp'=>'00112233','nama'=>'Ephi','jk'=>'p'),
         array('nrp'=>'00112234','nama'=>'Farhan','jk'=>'l'),
         array('nrp'=>'00112235','nama'=>'Gugun','jk'=>'l'));

    foreach($a as $satu){
        echo $satu['nrp'].' ;; '. $satu['nama'].' ;; '. $satu['jk'].' ;; ';
    }
?>