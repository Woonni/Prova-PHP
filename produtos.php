<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title>
	     Avaliacao
      </title>
   </head>
   <body>
      <strong>Receber os dados da pagina anterior e criar um array com:
	  Produto, quantidade, valor unitario e total</strong> <br><br>

     <table>
		    <tr>
			   <td>Produto:</td>
			   <td>

			   <?php
			      echo strtoupper($_POST['produto']);
			   ?>
         
			   </td>
            
            <tr>
			   <td>Quantidade:</td>
			   <td align = "right">
			   <?php
			      echo $_POST['qtde'];
			   ?>
			   </td>
			</tr>

         <tr>
			   <td>Valor:</td>
			   <td align = "right">
			   <?php
			      echo $_POST['valor'];
			   ?>
			   </td>
			</tr>	
			<tr>

         <tr>
			   <td>Total:</td>
			   <td align = "right">
			   <?php
			   $quantidade = intval($_POST['qtde']);
			   $valor = floatval($_POST['valor']);
			   $total = $quantidade * $valor;
			   echo "$total";
			   ?>
			   </td>
			</tr>

      </table>



      <?php
      error_reporting (0);
	    echo '<br><br>';

		 session_start();
    
	     $ProdutosTemp = array();
		 $ProdutosTemp['produto'] = strtoupper($_POST['produto']);
		 $ProdutosTemp['qtde'] = intval($_POST['qtde']);
		 $ProdutosTemp['valor'] = floatval($_POST['valor']);
		 $ProdutosTemp['total'] = intval($_POST['total']);
		  array_push($_SESSION['produtos'], $ProdutosTemp);		
          
	   ?>

	  <br><br>
       	  
	  <a href="listagem.php">Listar produtos</a> <br><br>
	  
	  <button onclick = "history.back()"> Voltar </button>
	  
   </body>
</html>