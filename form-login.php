<?php 
include "cabecalho.php";
?>
<html>
<body>
  
  <main>

	  <div class="container">

      <?php if(isset($_SESSION['sucess-cadastrado'])):?>
      <center><span class="sucess-editado"> Associação cadastrada com sucesso!!! </span></center> 
      <?php unset($_SESSION['sucess-cadastrado']); ?>
      <?php  endif;?>
  
        <form action="autLogin.php" method="post">
          <div class="form-row">
            <div class="form-group col-md-12">
              <h2>Login</h2>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-7">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Email" name="user" required>
            </div>
          </div>
    
          <div class="form-row">
            <div class="form-group col-md-7">
              <label for="senha">Senha:</label>
              <input type="password" class="form-control" id="senha" placeholder="Senha" name="password" required>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-12">
              <a href="form-cadastro-assoc.php">Cadastre-se</a>
               <button type="submit" class="btn btn-primary" id="btn">Enviar</button>
            </div>
          </div>
      </form>
    </div>

  </main>
  
<!--   <div style="margin-top:300px;"> -->
    <?php
      include 'rodape.php';
    ?>
  <div>
</body>
</html>
