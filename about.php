<!doctype html>
<html>
<?php session_start(); 

    if (isset($_SESSION["tipo_login"]))
        {
        $tipo = $_SESSION["tipo_login"];

        if($tipo == 1){
            header("location:menu_aluno.php");
        }
        else if($tipo == 2){
            header("location:menu_empresa.php");
        }else if($tipo == 3){
            header("location:menu_instituicao.php");
        }

    } 

?>
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
        <h1 id="logo">ESTAGIÁRIOS DA DEPRESSÃO</h1>
    </div>
</div>
<div id='cssmenu'>
<ul>
   <li><a href='index.php'><span>Início</span></a></li>
   <li><a href='criarlogin.php'><span>Cadastrar Login</span></a></li>
   <li><a href='login.php'><span>Login</span></a></li>
   <li class='last'><a href='about.php'><span>Sobre</span></a></li>
   <li class='last'><a href='contato.php'><span>Contato</span></a></li>
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
            <div id="content-wrap">
            	<div id="content" class="clearfix">
                	<h3 class="yellow f14">Sobre a Estagiários da Depressão</h3>
                  
                	O Estagiários da depressão é um site desenvolvido para facilitar a vida do futuro profissional que está prestes a se formar. Aqui você pode pode achar o melhor opção de estágio para sua área e conquistar o mercado de trabalho.

                  Estamos sempre abertos a sugestões:
                  <br></br>
                  Email:
                  <br>
                  
                  <input style="color: #000000; height: 15px; border: 1px solid #666666; font-family: verdana; font-size:11px; background-color: #FAFAFA" type="text" name="k3k0xKicU0eHQ" size="30" maxlength="30" value="">
                  </br>
                  Sugestão:
                  <br>
                  
                  <textarea style="color: #000000; border: 1px solid #666666; font-family: verdana; font-size:11px; background-color: #FAFAFA" name="k3jZGEeX1k1oo" rows="9" cols="60" id="cmnt"></textarea>
                   </br> 
                 <input name="Enviar" type="submit" id="sugestao" value="  Enviar  " />
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