<?php
require_once('../model/ModeloMercadoria.php');
function Operacao($Operacao){
  
  //switch case para decidir qual operação executar
  switch ($Operacao){
    //inclui mercadoria no banco
    case 'incluir':
      //instancia a classe de modelo
      $mercadoria = new ModeloMercadoria();
      
      //caso tudo esteja ok com o formulario aciona o método incluir do controller
      if(@$_POST['ok'] == 'true'){
        $mercadoria->incluir(@$_POST['tipoMercadoria'],@$_POST['nomeMercadoria'],@$_POST['quantidadeMercadoria'],@$_POST['precoMercadoria'],@$_POST['tipoNegocio']);
        echo '<script>alert("Mercadoria cadastrada com sucesso!");</script>'; //alerta de sucesso na inclusão
        echo '<script>window.location = "listarmercadoria.php"; </script>'; //redirecionamento para a lista de mercadorias
      }
      
      break;
      
    //consulta mercadorias no banco
    case 'consultar':
      global $linha;
      global $rs;
      //instancia a classe de modelo
      $mercadoria = new ModeloMercadoria();
      
      //query para selecionar todas as mercadorias do banco
      $mercadoria->consultar('select * from Mercadorias');
      
      //linha e resultado consulta
      $linha = $mercadoria ->Linha;
      $rs = $mercadoria ->Result;
      
      //caso a exclusão tenha sido requisitada aciona o método excluir do controller
      if(@$_GET['ok'] == 'excluir'){
        $mercadoria->excluir($_GET['codigo']);
        echo '<script>alert("Mercadoria excluida com sucesso!");</script>'; //alerta de sucesso na exclusão
        echo '<script>window.location = "listarmercadoria.php"; </script>'; //redirecionamento para a lista de mercadoria
      }
      
      break;
      
    case 'editar':
      global $linha;
      global $rs;
      //instancia a classe de modelo
      $mercadoria = new ModeloMercadoria();
      
      //query para resgatar o registro escolhido para edição
      $mercadoria->consultar('select * from Mercadorias where codigo="'.$_GET['codigo'].'"');
      $linha = $mercadoria ->Linha;
      $rs = $mercadoria ->Result;
      
      //caso tudo esteja ok com o formulario aciona o método editar do controller
      if(@$_POST['ok'] == 'true'){
        $mercadoria->editar($_POST['tipoMercadoria'],$_POST['nomeMercadoria'],$_POST['quantidadeMercadoria'],$_POST['precoMercadoria'],$_POST['tipoNegocio'], $_GET['codigo']);
        echo '<script>alert("Mercadoria editada com sucesso!");</script>'; //alerta de sucesso na edição
        echo '<script>window.location = "listarmercadoria.php"; </script>'; //redirecionamento para a lista de mercadorias
      }
      
  }
}

