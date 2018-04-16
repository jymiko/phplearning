<?php
    $a = array(
    array('nrp'=>'00112233','nama'=>'Ephi','jk'=>'p'),
    array('nrp'=>'00112234','nama'=>'Farhan','jk'=>'l'),
    array('nrp'=>'00112235','nama'=>'Gugun','jk'=>'l')
    );


    echo "<table border='1'>
        <thead>
            <tr>
                <td>NRP</td>
                <td>Nama</td>
                <td>Jenis Kelamin</td>
            </tr>
        </thead>";
            foreach($a as &$value) {
                if($value['jk'] == 'l'){
                    $value['jk'] = 'laki-laki';
                }else{
                    $value['jk'] = 'perempuan';
                }
            }
        echo "<tbody>";
            foreach($a as $data)
            {
                echo '<tr>';
                foreach($data as $item)
                {
                    echo "<td>$item</td>";
                }
                echo '</tr>';
            }
        echo "</tbody>";
    echo "</table>";
?>