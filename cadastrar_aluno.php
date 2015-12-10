<!doctype html>
<html>
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
   <li><a href='#'><span>Cadastrar Login</span></a></li>
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
                	<h3 class="yellow f14">CADASTRAR ESTÁGIARIO</h3>
                    <form id="cadastro" name="cadastro" method="post" action="inseriraluno.php" onsubmit="return validaCampo(); return false;">
  <table width="550" border="0">
    <tr>
      <td width="69" class="yellow f14" >Nome:</td>
      <td width="546"><input name="nome" type="text" id="nome" size="50" maxlength="60" />
        <span>*</span></td>
    </tr>
    <tr>
      <td class="yellow f14">Sexo:</td>
      <td class="yellow f14"><input name="sexo" type="radio" value="M" checked="checked" />
        Masculino
        <input name="sexo" type="radio" value="F" />
        Feminino <span class="style1">*</span> </td>
    </tr>
    <tr>
      <td class="yellow f14">DDD:</td>
      <td class="yellow f14"><input name="ddd" type="text" id="ddd" size="4" maxlength="2" />
      Telefone:
        <input name="telefone" type="text" id="telefone" />
        <span class="style3">Apenas números</span> </td>
    </tr>
     <tr>
      <td class="yellow f14">CPF:</td>
      <td><input name="cpf" type="text" id="cpf" maxlength="20" />
        <span class="style1">*</span></td>
    </tr>
    <td class="yellow f14">
    <label >Nascimento: </label>
   </td>
   <td align="left">

   <input type="text" name="data" size="10" maxlength="10">
    <span class="style1">*</span></td>
   </td>
    <tr>
      <td class="yellow f14">Endereço:</td>
      <td><input name="endereco" type="text" id="endereco" size="50" maxlength="70" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td class="yellow f14">Numero:</td>
      <td><input name="numero" type="text" id="numero" size="10" maxlength="70" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td class="yellow f14">CEP:</td>
      <td><input name="cep" type="text" id="cep" size="10" maxlength="70" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td class="yellow f14">Cidade:</td>
      <td><input name="cidade" type="text" id="cidade" maxlength="20" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td class="yellow f14">Estado:</td>
      <td ><select name="estado" id="estado">
        <option >Selecione...</option>
        <option value="AC">AC</option>
        <option value="AL">AL</option>
        <option value="AP">AP</option>
        <option value="AM">AM</option>
        <option value="BA">BA</option>
        <option value="CE">CE</option>
        <option value="ES">ES</option>
        <option value="DF">DF</option>
        <option value="MA">MA</option>
        <option value="MT">MT</option>
        <option value="MS">MS</option>
        <option value="MG">MG</option>
        <option value="PA">PA</option>
        <option value="PB">PB</option>
        <option value="PR">PR</option>
        <option value="PE">PE</option>
        <option value="PI">PI</option>
        <option value="RJ">RJ</option>
        <option value="RN">RN</option>
        <option value="RS">RS</option>
        <option value="RO">RO</option>
        <option value="RR">RR</option>
        <option value="SC">SC</option>
        <option value="SP">SP</option>
        <option value="SE">SE</option>
        <option value="TO">TO</option>
          </select>
        <span class="style1">*      </span></td>
    </tr>
    <tr>
      <td class="yellow f14">Bairro:</td>
      <td><input name="bairro" type="text" id="bairro" maxlength="20" />
        <span class="style1">*</span></td>
    </tr>
    <tr>
      <td class="yellow f14" colspan="2"><input name="news" type="checkbox" id="news" value="ATIVO" checked="checked" />
Desejo receber novidades e informações sobre o conteúdo deste site. </td>
    </tr>
    <tr>
      <td colspan="2"><p>
        <input name="cadastrar" type="submit" id="cadastrar" value="  Criar  " />
       
 
          <input name="limpar" type="reset" id="limpar" value="  Limpar  " />
         
 
          <span class="style1 yellow f14" >* Campos com * são obrigatórios!          </span></p>
      <p>  </p></td>
    </tr>
  </table>
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
