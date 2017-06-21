<?php 
//requisição do controller
require_once('../controller/ControleMercadoria.php');
//escolha da operação de inclusão
Operacao('incluir');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Inserir mercadoria</title>
  <meta charset="UTF-8">
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  
   <!--script de validação de campos!-->
  <script src="js/valida.js"  type="text/javascript"  /></script>
  
</head>
  
  <body >
    
    
    <!--formulário de inserção de mercadoria!-->
    <div class="container-fluid">

      <form class="form-fluid" id="form" name="form" method="post" >
        <fieldset>
          <legend>Inserir mercadoria</legend>

          <input id="nomeMercadoria" name="nomeMercadoria" maxlength="50" placeholder="nome da mercadoria" type="text">

          <br/>

      <select id="tipoMercadoria" name="tipoMercadoria" class="form-control">
        <option value="Acessórios">Acessórios</option>
        <option value="Brinquedos">Brinquedos</option>
        <option value="Calçados">Calçados</option>
        <option value="Instrumentos musicais">Instrumentos musicais</option>
        <option value="Roupas">Roupas</option>
        <option value="Outros">Outros</option>
      </select>

          <br/>

          <input id="quantidadeMercadoria" onkeyup="somenteNumeros(this)" maxlength="7" name="quantidadeMercadoria" placeholder="quantidade da mercadoria" type="text">

          <br/>

          <input id="precoMercadoria" name="precoMercadoria" onkeyup="moeda(this)" maxlength="12" placeholder="preço da mercadoria" type="text">

          <br/>

          <select id="tipoNegocio" name="tipoNegocio">
        <option value="Venda">Venda</option>
        <option value="Compra">Compra</option>
      </select>

          <br/>
          <!--valida os campos da mercadoria assim que pressionado usando a função validarVazios do arquivo valida.js!-->
          <input type="button" name="button" id="button" value="Cadastrar" onclick="validarVazios(document.form)" class="btn btn-primary" />
          <!--campo escondido para sinalizar se os demais campos são validos ou não!-->
          <input type="hidden" name="ok" id="ok" />

        </fieldset>
      </form>
    </div>
  </body>


</html>
