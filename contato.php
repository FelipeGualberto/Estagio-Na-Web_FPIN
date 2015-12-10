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
            	
            </div>
        </div>
        <div id="maincol">
            <div id="content-wrap">
            	<div id="content" class="clearfix">
                	<h3 class="yellow f14">Mais informações:</h3>

		<ul style="list-style-type:circle">
			<li><b>Diego Fernando Ferreira Gomes:<b> (082) 98130-3050</li>
       <li><b>Email:<b> dffg1986@hotmail.com</li>
		</ul>
		
		<ul style="list-style-type:circle">
			<li><b>Felipe Gualberto:<b> (082) 99623-9907</li>
       <li><b>Email:<b> </li>
		</ul>

		<ul style="list-style-type:circle">
			<li><b>Kayo Lucas Oliveira Lima:<b> (082) 98741-5982</li>
      <li><b>Email:<b> kayo_97@hotmail.com</li>
		</ul>
		
		<ul style="list-style-type:circle">
			<li><b>Wilton Daniel Arcanjo Silva:<b> (082) 98822-6342</li>
       <li><b>Email:<b> danielarcanjo1@gmail.com</li>
		</ul>



                </div>
            </div>
            <div id="footer">
           
            </div>
        </div>
        <div id="rightcol">
        	<div class="inner">
            	


            </div>
        </div>
    </div>
</div>
</body>
</html>
