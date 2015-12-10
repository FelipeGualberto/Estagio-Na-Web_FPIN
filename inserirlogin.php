<?php
  $con = mysql_connect("localhost", "root", "") or die('Não foi possível conectar');
  
  $login = $_POST['login'];
  $senha = $_POST['senha'];
  $tipo_login = $_POST['tipo_login'];
  mysql_select_db("estagioweb2", $con);
  mysql_query("INSERT INTO ew_login (login,senha,tipo_login) VALUES ('$login', '$senha', '$tipo_login')");
  mysql_close($con);
  header("location:sucesso.php");
?>