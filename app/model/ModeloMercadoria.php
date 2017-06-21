<?php
require_once('Conexao.php');
class ModeloMercadoria{
private $codigo;
private $tipo;
private $nome;
private $quantidade;
private $preco;
private $tipoNegocio;

public function incluir($tipo, $nome, $quantidade, $preco, $tipoNegocio){
  //query de inserção
  $insert = 'insert into Mercadorias(tipo,nome,quantidade,preco,tipo_negocio) values("'.$tipo.'","'.$nome.'","'.$quantidade.'","'.$preco.'","'.$tipoNegocio.'")';
  
  //instancia da classe Acesso presente no arquivo Conexao.php
  $Acesso = new Acesso();
  //faz a conexão com o banco
  $Acesso -> Conexao();
  //executa a query de inserção
  $Acesso -> query($insert);
}

public function consultar($sql){
      //instancia da classe Acesso presente no arquivo Conexao.php
      $Acesso = new Acesso();
      //faz a conexão com o banco
      $Acesso->Conexao();
      //executa a query de consulta 
      $Acesso->Query($sql);
      //linha e resultado da query de consulta
      $this->Linha = @mysqli_affected_rows($Acesso->result);

      $this->Result = $Acesso->result;
}
  public function editar($tipo, $nome, $quantidade, $preco, $tipoNegocio, $codigo){
  //query de atualização
  $update = 'update Mercadorias set tipo="'.$tipo.'", nome="'.$nome.'", quantidade="'.$quantidade.'", preco="'.$preco.'", tipo_negocio="'.$tipoNegocio.'" where codigo="'.$codigo.'"';
  
  //instancia da classe Acesso presente no arquivo Conexao.php
  $Acesso = new Acesso();
  //faz a conexão com o banco
  $Acesso -> Conexao();
  //executa a query de atualização
  $Acesso -> query($update);
  //linha e resultado da query de edição  
  $this->Linha = @mysqli_num_rows($Acesso->result);

  $this->Result = $Acesso->result;   
}
  
  public function excluir($codigo){
      //query de exclusão
      $delete = 'delete from Mercadorias where codigo="'.$codigo.'"';   
      //instancia da classe Acesso presente no arquivo Conexao.php
      $Acesso = new Acesso();
      //faz a conexão com o banco
      $Acesso->Conexao();
      //executa a query de exclusão 
      $Acesso->Query($delete);

     
}


  
}
