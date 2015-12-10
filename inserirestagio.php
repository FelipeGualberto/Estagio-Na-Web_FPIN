<?php
  $con = mysql_connect("localhost", "root", "") or die('Não foi possível conectar');
  
  $inicio = $_POST['inicio'];
  $encerramento = $_POST['encerramento'];
  $vagas = $_POST['vagas'];
  $salario = $_POST['salario'];
  $orientador = $_POST['orientador'];
  $supervisor = $_POST['supervisor'];
  $atuacao = $_POST['atuacao'];
  mysql_select_db("estagioweb2", $con);
  mysql_query("INSERT INTO ew_aluno (hor_ini_est,hor_fim_est,qtd_vagas_est,salario_est,orientador_est,supervisor_est,area_est) VALUES ('$inicio', '$encerramento', '$vagas', '$salario','$orientador', '$supervisor', '$atuacao')");


  mysql_close($con);
  header("location:sucesso.php");
?>