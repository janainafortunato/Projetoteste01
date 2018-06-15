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
      
      <h1>Edite sua notícia</h1>
      
      <form action="editar-noticias.php" method="POST">
      
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
              <label>Título</label>
              <input type="text" name="titulo" value="<?php echo $resultado['TITULO']; ?>">
            </div>
            <br>
            
            <div>
              <label>Sub título</label>
              <input type="text" name="subtitulo" value="<?php echo $resultado['SUBTITULO']; ?>">
            </div>
            <br>
            
            <div>
              <input type="text" name="file" value="<?php echo $resultado['ar']; ?>">
            </div>
            <br>
            
            <div>
              <label>Nóticia</label>
              <textarea rows="10" cols="60" maxlength="400" name="texto">
              	
              </textarea>
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

