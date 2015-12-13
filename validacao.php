<?php
      
    // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
    if (!empty($_POST) AND (empty($_POST['login']) OR empty($_POST['senha']))) {
        header("Location: index.php"); exit;
    }
      


    // Tenta se conectar ao servidor MySQL
   $mysqli = new mysqli('localhost', 'root', '', 'estagioweb2');
   
    // Tenta se conectar a um banco de dados MySQL
    if (mysqli_connect_errno()) trigger_error(mysqli_connect_error());
   
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    //echo $login;
    //echo $senha;

    $sql = "SELECT * FROM EW_LOGIN WHERE EW_LOGIN.LOGIN = '$login' AND EW_LOGIN.SENHA = '$senha' ";
   // echo $sql;
    $query = $mysqli->query($sql);
    $i = 0;
    session_start();
     while ($dados = $query->fetch_array()) {
      $i++;
      $_SESSION["tipo_login"] = $dados["TIPO_LOGIN"];
      $_SESSION["nome_login"] = $dados["LOGIN"];
      $_SESSION["id_login"] = $dados["ID_LOGIN"];

    }

    if($i > 0){

          //header("location:index.php");
         $tipo =  $_SESSION["tipo_login"]; 
         if($tipo == 1){
            header("location:menu_aluno.php");
         }
         else if($tipo == 2){

            header("location:menu_empresa.php");

         }else if($tipo == 3){

            header("location:menu_instituicao.php");
         }

    }else{

       echo "Usuário não existe";
    }
    

    ?>



