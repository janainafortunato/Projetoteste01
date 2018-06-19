<?php
session_start();
include 'bd/conexao.php';
include 'cabecalho.php';
?>
<main>

	<?php
// pega o ID da URL
    $id = isset($_GET['id']) ? (int) $_GET['id'] : null;
    //Valida a variavel da URL
    if (empty($id)){
      echo "ID para alteração não definido";
    exit;
    }

    $sql = "SELECT CATEGORIA, TITULO, SUBTITULO, ARQUIVO, TEXTO FROM TB_NOTICIAS WHERE ID_NOT='$id'";
    $result = $conn->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->execute();

    $resultado = $result->fetch(PDO::FETCH_ASSOC);
    if(!is_array($resultado)){
    echo "Nunhum dado encontrado";
    exit;
}
?>
 
    <div class="container">
      
      
      
      <form action="editar-noticias.php" method="POST">

        <div class="form-row">
          <div class="form-group col-md-12">
            <h2>Edite sua notícia</h2>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <input type="file"  class="form-control-file" name="file" id="imgInp">
            <br>
            <img id='img-upload'/>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <label>Digite o Título da nóticia</label>
            <input type="text" class="form-control" name="titulo" value="<?php echo $resultado['TITULO']; ?>">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <label>Digite o sub título da nóticia</label>
            <input type="text" class="form-control" name="subtitulo"  value="<?php echo $resultado['SUBTITULO']; ?>">
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-12">
            <label>Digite a Nóticia</label>
            <textarea rows="10" cols="10" name="texto" class="form-control"></textarea>
          </div>
        </div> 

        <div class="form-row">
          <div class="form-group col-md-12">
            <label for="sel2">Classifique a nóticia</label>
            <select multiple class="form-control" id="sel2" name="categoria">
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
            <button class="btn">Editar</button>
          </div>
        </div> 
      </form>
    
    <div>
  
  </main>
<br><br>
<?php
include 'rodape.php';
?>
</body>
</html>

