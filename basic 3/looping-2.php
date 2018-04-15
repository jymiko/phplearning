<?php
    echo '<h1>Angka Ganjil Genap</h1>';
    echo '<table border=2>';
    echo '<th>Angka</th>';
    echo '<th>Ganjil atau Genap</th>';
    for($i = 1;$i <= 10;$i++) {
        echo '<tr>';
        echo '<td>'.$i.'</td>';
        echo '<td>';
        if($i % 2 == 0) {
            echo 'Genap';
        } else {
            echo 'Ganjil';
        }
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
?>