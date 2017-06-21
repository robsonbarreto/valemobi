<?php
//requisição do controller
require_once('../controller/ControleMercadoria.php');
//escolha da operação de consulta
Operacao('consultar');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta charset="UTF-8">
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  </head>
 <body>
   <div class="container">
     <legend>Mercadorias</legend>
       <table class="table table-striped">
         <tr>
         <td><b>Código</b></td>
         <td><b>Nome</b></td>
         <td><b>Tipo</b></td>
         <td><b>Quantidade</b></td>
         <td><b>Preço</b></td>
         <td><b>Tipo de negócio</b></td>  
         </tr>
         
          <!-- laço para preencher os campos com as informações do objeto vindo do banco!-->
         <?php while($row = mysqli_fetch_array($rs)){?>
         <tr>
         <td><?php echo $row['codigo'];?></td>
         <td><?php echo $row['nome'];?></td>
         <td><?php echo $row['tipo'];?></td>
         <td><?php echo $row['quantidade'];?></td>
         <td><?php echo $row['preco'];?></td>
         <td><?php echo $row['tipo_negocio'];?></td>
         <!-- botão para edição de registro !-->
         <td><a href="editarmercadoria.php?codigo=<?php echo $row['codigo']?>"><button type="button" class="btn btn-primary">Editar</button></a></td> 
         <!-- botão para exclusão de registro !-->
         <td><a href="listarmercadoria.php?ok=excluir&codigo=<?php echo $row['codigo']?>"><button type="button" class="btn btn-danger">Excluir</button></a></td>  
         </tr>
         <?php }?>
       </table>
   </div>
</body>
</html>