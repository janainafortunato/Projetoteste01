<?php 
include "cabeçalho.php";
?>
<html>
<body>
<main>

	  <div class="container">
   
   		<h2>Login</h2>
     		<form action="autLogin.php" method="post">
   			<div class="form-group">
        	<label for="email">Email:</label>
        	<input type="email" class="form-control" id="email" placeholder="Email" name="user" required>
      	</div>
    
      	<div class="form-group">
        	<label for="senha">Senha:</label>
        	<input type="password" class="form-control" id="senha" placeholder="Senha" name="password" required>
      	</div>
        <a href="form-cadastro-assoc.php">Cadastre-se</a>
      	<button type="submit" class="btn btn-primary">Enviar</button>
    	</form>
  	</div>

</main>
<div style="margin-top:170px;">
<?php
include 'rodape.php';
?>
<div>
</body>
</html>
