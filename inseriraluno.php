<?php
  $con = mysql_connect("localhost", "root", "") or die('Não foi possível conectar');
  
  $nome = $_POST['nome'];
  $sexo = $_POST['sexo'];
  $telefone = $_POST['telefone'];
  $cpf = $_POST['cpf'];
  $data = $_POST['data'];
  $endereco = $_POST['endereco'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];
  $bairro = $_POST['bairro'];
  $numero = $_POST['numero'];
  $cep = $_POST['cep'];
  mysql_select_db("estagioweb2", $con);
  mysql_query("INSERT INTO ew_aluno (nome_alu,sexo_alu,tele_alu,data_nasc,cpf_alu) VALUES ('$nome', '$sexo', '$telefone', '$data', '$cpf')");
  mysql_query("INSERT INTO ew_endereco (logradouro,cidade,estado,bairro,numero,cep) VALUES ('$endereco', '$cidade', '$estado', '$bairro', '$numero', '$cep') ");


  mysql_close($con);
  header("location:sucesso.php");
?>