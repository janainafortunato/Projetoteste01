<?php 
include "cabeçalho.php";
?>
<main>

	  <div class="container">
   
   		<h2>Login</h2>

   		<form action="autLogin.php" method="post">
   			<div class="form-group">
        	<label for="email">Email:</label>
        	<input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
      	</div>
    
      	<div class="form-group">
        	<label for="senha">Senha:</label>
        	<input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>
      	</div>
    
      	<button type="submit" class="btn btn-primary">Enviar</button>
    	</form>
  	</div>

</main>
