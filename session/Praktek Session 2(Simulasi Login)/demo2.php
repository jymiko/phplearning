<?php
session_start();
echo "Nama : ".$_SESSION['nama'];
echo "<br>";
echo "Password :".$_SESSION['password'];
echo "<br>";
?>
<form action="demo3.php" method="post">
	<input type="submit" value="Logout">
</form>