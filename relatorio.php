  <!doctype html>
  <html>
<meta charset="UTF-8">
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
           <form id="cadastro" name="cadastro" method="post" action="envia_relatorio.php">
            <table width="550" border="0">
              <tr>
                <td width="69" class="yellow f14" >Orientador:</td>
                <td width="546">


                 <?php
                  
                      $mysqli = new mysqli('localhost', 'root', '', 'estagioweb2');
                      mysqli_set_charset($mysqli,"utf8");
                      $sql = "SELECT * FROM EW_LOGIN WHERE TIPO_LOGIN = 4 ";
                      $query = $mysqli->query($sql);
               
                     ?>

                <select name="orientador">
                  <option value="">Orientador</option>
                  <?php while($dados = $query->fetch_array()) { ?>
                  <option value="<?=$dados['ID_LOGIN']?>"><?=$dados['NOME']?></option>
                  <?php } ?>
                </select>
                <span>*</span></td>
              </tr>
              <?php
            
                      $mysqli = new mysqli('localhost', 'root', '', 'estagioweb2');
                      mysqli_set_charset($mysqli,"utf8");
                      $id_login = $_SESSION['id_login'];
                      $sql = "SELECT * FROM EW_LOGIN WHERE TIPO_LOGIN = 1 AND ID_LOGIN = '$id_login' ";
                      $query = $mysqli->query($sql);
               
                     ?>
              <tr>
                <td width="69" class="yellow f14" >Aluno:</td>
                   <td>           <select name="aluno">
                  <option value="">Aluno</option>
                  <?php while($dados = $query->fetch_array()) { ?>
                  <option value="<?=$dados['ID_LOGIN']?>"><?=$dados['NOME']?></option>
                  <?php } ?>
                </select></td>
                </tr> 

              </tr>
            </table>
            <div>

              Relatório: 
              <br>

              <textarea name="relatorio_texto" style="color: #000000; border: 1px solid #666666; font-family: verdana; font-size:11px; background-color: #FAFAFA" name="k3jZGEeX1k1oo" rows="20" cols="62" id="cmnt"></textarea>
            </br> 
          </div>
          <div>
            <input name="cadastrar" type="submit" id="enviar" value="  Enviar  " />
            (Copie e cole).
          </div>
          <div>
        
          <input type="radio" name="tipo_relatorio" value="1" checked>Parcial
        
          <input type="radio" name="tipo_relatorio" value="2">Final

          </div>

        </form>
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