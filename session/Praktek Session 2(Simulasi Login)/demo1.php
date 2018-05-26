<?php
    session_start();
    if(isset($_POST['submit'])){
        $name = $_POST['nama'];
        $pass = $_POST['password'];

        if(!empty($name) || !empty($pass)){
            $_SESSION['nama'] = $name;
            $_SESSION['password'] = $pass;
            header("location: demo2.php");
        }else{
            echo "nama dan password tidak boleh kosong";
            header("location: demo.php");
        }
    }
?>
