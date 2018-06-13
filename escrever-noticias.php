<?php include_once 'cabecalho.php' ?>

  <main>
   
    <div class="container">
      
      <h1>Publicar Notícias</h1> 
      
      <form action="addNoticias.php" method="POST" enctype="multpart/form-data">
      
        <label>Classifique a nóticia</label>
        <select class="selectpicker" name="categoria">
          <option>Cursos</option>
          <option>Reuniões</option>
          <option>Esporte</option>
          <option>Projetos</option>
          <option>Ações Sociais</option>
        </select>  
        <br>
        <br>
        <div class="row">
          <div class="col-sm-6">
            <div>
              <label>Digite o Título da nóticia</label>
              <input type="text" name="titulo">
            </div>
            <br>
            
            <div>
              <label>Digite o sub título da nóticia</label>
              <input type="text" name="subtitulo">
            </div>
            <br>
            
            <div>
              <input type="file" name="file">
            </div>
            <br>
            
            <div>
              <label>Digite a Nóticia</label>
              <textarea rows="10" cols="60" name="texto"></textarea>
              <button>Salvar</button> <br>
            </div>   
          </div>
        </div>
      </form>
    
    <div>
  
  </main>
<br><br>
<?php
include 'rodape.php';
?>
<div>
</body>
</html>
<!-- maxlength="400" -->