<?php 

session_start("tipo_login");

session_destroy();

header("location:index.php");

?>