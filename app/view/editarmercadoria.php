<?php
//requisição do controller
require_once('../controller/ControleMercadoria.php');
//escolha da operação de edição
Operacao('editar');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Editar mercadoria</title>
  <meta charset="UTF-8">
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
 
  
  <!--script de validação de campos!-->
  <script src="js/valida.js" type="text/javascript" /></script>

</head>

<body>


  <!--formulário de edição de mercadoria!-->
  <div class="container-fluid">
    
    <form class="form-fluid" id="form" name="form" method="post">
      <fieldset>
        <legend>Editar mercadoria</legend>
        <!-- laço para preencher os campos com as informações do objeto vindo do banco!-->
        <?php while($row = mysqli_fetch_array($rs)){?>
        <input id="nomeMercadoria" name="nomeMercadoria" maxlength="50" placeholder="nome da mercadoria" type="text" value="<?php echo $row['nome'];?>">

        <br/>

        <select id="tipoMercadoria" name="tipoMercadoria" class="form-control">
        <option value="Acessórios" <?=($row['tipo'] == 'Acessórios')?'selected':''?> >Acessórios</option>
        <option value="Brinquedos" <?=($row['tipo'] == 'Brinquedos')?'selected':''?>>Brinquedos</option>
        <option value="Calçados" <?=($row['tipo'] == 'Calçados')?'selected':''?> >Calçados</option>
        <option value="Instrumentos musicais" <?=($row['tipo'] == 'Instrumentos musicais')?'selected':''?>>Instrumentos musicais</option>
        <option value="Roupas" <?=($row['tipo'] == 'Roupas')?'selected':''?>>Roupas</option>
        <option value="Outros"<?=($row['tipo'] == 'Outros')?'selected':''?>>Outros</option>
      </select>

        <br/>

        <input id="quantidadeMercadoria" onkeyup="somenteNumeros(this)" maxlength="7" name="quantidadeMercadoria" placeholder="quantidade da mercadoria" type="text" value="<?php echo $row['quantidade'];?>">

        <br/>

        <input id="precoMercadoria" name="precoMercadoria" onkeyup="moeda(this)" maxlength="12" placeholder="preço da mercadoria" type="text" value="<?php echo $row['preco'];?>">

        <br/>

        <select id="tipoNegocio" name="tipoNegocio">
        <option value="Venda" <?=($row['tipo_negocio'] == 'Venda')?'selected':''?>>Venda</option>
        <option value="Compra" <?=($row['tipo_negocio'] == 'Compra')?'selected':''?>>Compra</option>
      </select>
       <?php }?>
        <br/>
        <!--valida os campos da mercadoria assim que pressionado usando a função validarVazios do arquivo valida.js!-->
        <input type="button" name="button" id="button" value="Editar" onclick="validarVazios(document.form)" class="btn btn-primary" />
        <!--campo escondido para sinalizar se os demais campos são validos ou não!-->
        <input type="hidden" name="ok" id="ok" />

      </fieldset>
    </form>
    
  </div>
</body>


</html>