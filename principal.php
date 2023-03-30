<!DOCTYPE html>

<html>
   <head>
      <meta charset="utf-8">
      <title>
	     Avaliacao
      </title>
   </head>

   <?php
      session_start();	  
	  if(!isset($_SESSION['produtos'])){
	     $_SESSION['produtos'] = array();  
	  }
   ?>

   <body>
      <strong>Ao pressionar o botao adicionar, chamar a pagina produtos.php</strong> <br><br>
      <form action = "produtos.php" method = "post">
	     <table>
		    <tr>
			   <td>Produto</td>
			   <td><input type="text" name="produto" size = "50" maxlength="50" style="text-transform:uppercase"></td>
			</tr>
			<tr>
			   <td>Quantidade</td>
			   <td><input type="text" name="qtde" size = "5" maxlength="5"></td>
			</tr>
			<tr>
			   <td>Valor unitario</td>
			   <td><input type="text" name="valor" size = "5" maxlength="10"></td>
			</tr>
		 </table> <br><br>
		 
    


		 <input type="submit" value="Adicionar">
		 <br><br>
      </form> 	  

	 


   </body>
</html>