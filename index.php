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
        <h1 id="logo">ESTAGIÁRIOS DA DEPRESSÃO  </h1>
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
        	<div id="banner" class="clearfix">
            	<div id="banner-content">
                	<h1>OFERTAS DE ESTÁGIOS, VOCE ENCONTRA AQUI!</h1>
                    <p class="f14">ESTÁGIARIOS DA DEPRESSÃO</p>
                </div>
            </div>
            <div id="content-wrap">
            	<div id="content" class="clearfix">
                	<h3 class="yellow f14">BEM VINDO</h3>
                		<p>
                    	A Estagiários da epressão é especialista no recrutamento, seleção e administração de estagiários. Atuamos com administração de contratos de estágio para pessoas em busca de experiência e que visam desenvolver seus talentos.</p>
                        <p class="yellow"><strong>Com capacidade de atingir mais de 500 mil estudantes em todo o território de alagoas, conseguimos garantir um retorno quantitativo e qualitativo para suas vagas de estágio. Possuímos parceria com mais de 10 instituições de ensino públicas e privadas de Alagoas.</strong>
						</p>
                        <p>O processo de recrutamento e seleção de estagiários pela Estagiários da Depressão é desenvolvido em parceria com sua Organização. Realizamos a pré-seleção dos estudantes com a verificação dos currículos de acordo com os pré-requisitos da empresa. Cuidamos da gestão dos estagiários da sua empresa, garantindo todas as exigências legais, para que sua empresa tenha mais tempo para atividades estratégicas. É muito simples contratar um estagiário, confira abaixo o que a Companhia de Estágios pode fazer por você.
					</p>
                    <img src="images/img.gif" alt="" class="left" />
                    <p>
                    	Relatório de Estágio: disponibilizamos e acompanhamos o preenchimento do Relatório de Atividades de Estágio (obrigatório, conforme art. 9º da Lei nº 11.788/2008) pelo estagiário e pelo seu supervisor
                    </p>
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
