<?php
    echo '<h1>Tabel Harga Bensin</h1>';
    echo '<table border=2">';
    echo '<th>Jumlah Liter</th>';
    echo '<th>Harga Bensin</th>';
    for($i = 1;$i <= 10;$i++) {
        $harga = $i * 7500;
        echo '<tr>';
        echo '<td>'.$i.'</td>';
        echo '<td>'.$harga.'</td>';
        echo '</tr>';
    }
    echo '</table>';
?>