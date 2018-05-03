<?php 
include "cabeçalho.php";
?>
<main>

  <div class="container">
   
   <h2>Cadastro de Associações</h2>
   
    <form action="addAssociacoes.php" method="post">

      <div class="form-group">
        <label for="nomeFan">Nome Fantasia:</label>
        <input type="text" class="form-control" id="nomeFan" placeholder="Ex:(Associação de Moradores)" name="nomeFan" required>
      </div>

      <div class="form-group">
        <label for="ativPrim">Atividade Primaria:</label>
        <input type="text" class="form-control" id="ativPrim" placeholder="Ex:(Área de atuação)" name="ativPrim" required>
      </div>

      <div class="form-group">
        <label for="cnpj">CNPJ:</label>
        <input type="text" class="form-control" id="cnpj" placeholder="Numero de registro" name="cnpj" required>
      </div>
      
      <div class="form-group">
        <label for="bairro">Localização:</label>
        <input type="text" class="form-control" id="bairro" placeholder="EX:(Bairro-PE)" name="loc" required>
      </div>

      <div class="form-group">
        <label for="rua">Endereço:</label>
        <input type="text" class="form-control" id="Rua" placeholder="Ex:(Nome da rua)" name="rua" required>
      </div>

      <div class="form-group">
        <label for="fone">Telefone:</label>
        <input type="text" class="form-control" id="fone" placeholder="Ex:(ddd987511238)" name="fone" required>
      </div>

      <div class="form-group">
        <label for="nomeRes">Nome do Responsavel:</label>
        <input type="text" class="form-control" id="nomeRes" placeholder="Nome" name="nomeRes" required>
      </div>
      
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Email" name="user" required>
      </div>
    
      <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" class="form-control" id="senha" placeholder="Senha" name="password" required>
      </div>
    
      <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
  </div>

</main>
