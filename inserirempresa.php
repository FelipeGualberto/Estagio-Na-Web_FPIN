<?php
  $con = mysql_connect("localhost", "root", "") or die('Não foi possível conectar');
  
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $endereco = $_POST['endereco'];
  $cnpj = $_POST['cnpj'];
  $representante = $_POST['representante'];
  $atuacao = $_POST['atuacao'];
  mysql_select_db("estagioweb2", $con);
  mysql_query("INSERT INTO ew_empresa (nome_emp,email_emp,tele_emp,end_emp,cnpj_emp,rl_emp,atuacao_emp) VALUES ('$nome', '$email', '$telefone', '$endereco', '$cnpj','$representante', '$atuacao'))");
  mysql_close($con);
  header("location:sucesso.php");
?>