<?php include_once 'cabecalho.php' ?>

  <main>
   
    <div class="container">
      
      <form action="addNoticias.php" method="POST" enctype="multipart/form-data">
        
        <div class="form-row">
          <div class="form-group col-md-12">
            <h2>Escrever Notícias</h2>
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-12">
            <input type="file"  class="form-control-file" name="file" id="imgInp">
            <br>
            <!-- <input type="text" class="form-control" readonly> -->
            <img id='img-upload'/>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <label>Digite o Título da nóticia</label>
            <input type="text" class="form-control" name="titulo" required>
          </div>
        </div>
      
        <div class="form-row">
          <div class="form-group col-md-12">
            <label>Digite o sub título da nóticia</label>
            <input type="text" class="form-control" name="subtitulo">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <label>Digite a Nóticia</label>
            <textarea rows="10" cols="10" name="texto" class="form-control" required></textarea>
          </div>
        </div> 

        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="sel2">Classifique a nóticia</label>
            <select multiple class="form-control" id="sel2" name="categoria" required>
              <option>Cursos</option>
              <option>Reuniões</option>
              <option>Esporte</option>
              <option>Projetos</option>
              <option>Ações Sociais</option>
            </select>
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-12">
            <div class="checkbox">
              <p style="color:red;">Selecione publicar se deseja que sua notícia seja publicada agora.</p>
              <label><input type="checkbox" name="publicado" value="0">Publicar</label>
            </div>
          </div>
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-12">
            <button id="btn" class="btn">Salvar</button>
          </div>
        </div> 
      </form>
    <div>
  
  </main>
<br><br>
<?php
include 'rodape.php';
?>
  <script type="text/javascript" >
    $(document).ready( function() {
      function readURL(input) {
        if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
            $('#img-upload').attr('src', e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
        }
      }
      $("#imgInp").change(function(){
        readURL(this);
      });   
    });

  </script>
</body>
</html>
<!-- maxlength="400" -->