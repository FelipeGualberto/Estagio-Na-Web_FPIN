<?php
      
    // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
    if (!empty($_POST) AND (empty($_POST['orientador']) OR empty($_POST['aluno'] OR empty($_POST['relatorio_texto'])))) {
        header("Location: index.php"); exit;
    }
      


    // Tenta se conectar ao servidor MySQL
   $mysqli = new mysqli('localhost', 'root', '', 'estagioweb2');
   
    // Tenta se conectar a um banco de dados MySQL
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
   
    $orientador = $_POST['orientador'];
    $aluno = $_POST['aluno'];
    $relatorio_texto = $_POST['relatorio_texto'];
    $tipo_relatorio = $_POST['tipo_relatorio'];
    $date= date('Y-m-d H:i:s');

    //echo $login;
    //echo $senha;

    $sql = "INSERT INTO Relatorios (ID_ALUNO, TEXTO, ID_ORIENTADOR, Data_Hora, TIPO_RELATORIO) VALUES ('$aluno','$relatorio_texto','$orientador','$date','$tipo_relatorio') ";
    //echo $sql;
   // echo $sql;
    $query = $mysqli->query($sql);

    echo "Relatório Enviado";
   // header("Location: relatorio_parcial.php")

    ?>