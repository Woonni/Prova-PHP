<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title>
	     Avaliacao
      </title>
   </head>
   <body>
      <strong>Listar os produtos que estao no array com:
	  Produto, quantidade, valor unitario e total</strong> <br><br>

     <?php
     error_reporting (0);
	     session_start();
		 echo '<center>';
		 echo '<table border = 1>';
		 echo '<tr>';
		 echo '<td>Produto</td>';
		 echo '<td>Quantidade</td>';
		 echo '<td>Valor</td>';
		 echo '<td>Total</td>';
		 echo '</tr>';
	     foreach($_SESSION['produtos'] as $x){
			echo '<tr>';  
		    echo '<td>'. $x['produto'] . '</td>';
			echo '<td>' . $x['qtde'] . '</td>';
			echo '<td>'. $x['valor'] . '</td>';
			echo '<td>'. $x['qtde'] * $x['valor'] . '</td>';
			echo '</tr>';
		 }		
         echo '</table>';
		 echo '</center>';
	  ?>
       	  
	  <button onclick = "history.back()"> Voltar </button>
	  
   </body>
</html>