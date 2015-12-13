  <!doctype html>
  <html>
<meta charset="utf-8">
 <head>
  <title>ESTAGIÁRIOS DA DEPRESSÃO</title>
  <link href="css/reset.css" rel="stylesheet" type="text/css" />
  <link href="css/tipo.css" rel="stylesheet" type="text/css"  />
  <link href="css/principal.css" rel="stylesheet" type="text/css" />
  <meta charset="utf-8">
</head>
<body>
  <div id="mainwrap">                                                   

    <div id="header-wrap" class="wrap">
     <div id="header" class="pagesize">
      <h1 id="logo">ESTAGIÁRIOS DA DEPRESSÃO  <?php session_start(); if (isset($_SESSION["tipo_login"])){echo  $_SESSION["nome_login"];} ?> </h1>
    </div>
  </div>
  <div id='cssmenu'>
    <ul>
      <li><a href='menu_aluno.php'><span>Voltar</span></a></li>
    </ul>
  </div>
  <div id="container-wrap" class="wrap">
    <div id="container" class="pagesize clearfix">
     <div id="leftcol">
       <div class="inner">
         <p>A regularização do estágio, conforme determina a Lei, dar-se-á pela formalização - obrigatória - do Contrato de Estágio (Termo de Compromisso de Estágio), firmado entre o Estudante e a Empresa contratante, com a interveniência compulsória da Instituição de Ensino.</p>
       </div>
     </div>
     <div id="maincol">
       <div id="banner" class="clearfix">
         <div id="banner-content">
           <h1>OFERTAS DE ESTÁGIOS, VOCE ENCONTRA AQUI!</h1>
           <p class="f14">ESTÁGIARIOS DA DEPRESSÃO</p>
         </div>
       </div>
       <div id="content-wrap">
         <div id="content" class="clearfix">


           <?php 
    
          $id_login = $_SESSION["id_login"];
                    $mysqli = new mysqli('localhost', 'root', '', 'estagioweb2');
                      mysqli_set_charset($mysqli,"utf8");
                      $sql = "SELECT * FROM RELATORIOS WHERE ID_ALUNO = '$id_login' ";
                      $result = $mysqli->query($sql);
            
                        echo "<table >";
                     echo "<td width='30%'><h1> Nota</h1></td>";
                      echo "<td width='70%'><h1>Relatório</h1></td>";

                      while($row = $result->fetch_array())

{
       
echo "<tr >";
//echo "<td>" . $row[''] . "</td>";
echo "<td width='30%' style='border:1px solid black;'> ". $row['NOTA'] ."</td>";
echo "<td width='70%' style='border:1px solid black;'>" . $row['TEXTO'] . "</td>";
echo "</tr>";
}
echo "</table>";


           ?>
      </div>

    </div>
    <div id="footer">

    </div>
  </div>
  <div id="rightcol">
   <div class="inner">
     <p>O estágio relativo a cursos que alternam teoria e prática, nos períodos em que não estão programadas aulas presenciais, poderá ter jornada de até 40 (quarenta) horas semanais, desde que isso esteja previsto no projeto pedagógico do curso e da instituição de ensino.</p>
   </div>
 </div>
</div>
</div>
</body>
</html>