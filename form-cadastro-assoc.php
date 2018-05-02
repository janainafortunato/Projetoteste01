<?php 
include "cabeçalho.php";
?>
<main>

  <div class="container">
   
   <h2>Cadastro de Associações</h2>
   
    <form action="addAssociacoes.php" method="post">

      <div class="form-group">
        <label for="nome">Nome do Responsável:</label>
        <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" required>
      </div>

      <div class="form-group">
        <label for="rua">Endereço:</label>
        <input type="text" class="form-control" id="nome" placeholder="ex:(Rua, 123)" name="rua" required>
      </div>

      <div class="form-group">
        <label for="cidade">Cidade:</label>
        <input type="text" class="form-control" id="nome" placeholder="Cidade" name="cidade" required>
      </div>
      
      <div class="form-group">
        <label for="bairro">Bairro:</label>
        <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro" required>
      </div>

      <div class="form-group">
        <label for="cep">CPE:</label>
        <input type="text" class="form-control" id="cep" placeholder="ex:(xxxxx-xxx)" name="cep" required>
      </div>

      
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
      </div>
    
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="senha" placeholder="Senha" name="senha" required>
      </div>
    
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>

</main>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro das associações</title>
</head>
<style type="text/css">
	
	body {
    background-color: #8c8c8c;
}
</style>
<body>
	
	<h1><center>Cadastro de associações</center></h1>

</body>
</html>

<form <a href="inserir_noticias.php">Nome da Associação<br>
  <input type="text" name="firstname" value="  "><br>Nome do Responsavel <br>
   <input type="text" name="firstname" value="  "><br>Endereço<br>
    <input type="text" name="firstname" value="   "><br>CEP<br>
     <input type="text" name="firstname" value="   "><br>Bairro<br>
      <input type="text" name="firstname" value="    "><br>Telefone<br>
  <input type="text" name="lastname" value="   "><br><br>
  <input type="submit" value="Finalizar">
</form> -->