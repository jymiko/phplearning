<?php  
    echo '<h1>Nested Loop</h1>';
    echo '<table border=2>';
    echo '<th>Angka</th>';
    echo '<th>Ganjil atau Genap</th>';
    for($i = 1;$i < 5;$i++) {
        echo '<tr>';
        echo '<td>'.$i.'</td>';
        echo '<td>';
        for($j = 1; $j <= $i;$j++) {
            if($j % 2 == 0) {
                echo 'Genap';
            } else {
                echo 'Ganjil';
            }
            if($j < $i) {
                echo ',';
            }
        }
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
?>