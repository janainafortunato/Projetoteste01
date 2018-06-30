<?php 
session_start();
include "cabecalho.php";
include 'bd/conexao.php';
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

    $sql = "SELECT CATEGORIA, TITULO, SUBTITULO, ARQUIVO, TEXTO, DATA FROM TB_NOTICIAS WHERE ID_NOT='$id'";
    $result = $conn->prepare($sql);
    $result->bindParam(':id', $id, PDO::PARAM_INT);
    $result->execute();

    $resultado = $result->fetch(PDO::FETCH_ASSOC);
    if(!is_array($resultado)){
    echo "Nunhum dado encontrado";
    exit;
    }

    $arquivo = $resultado['ARQUIVO'];
    $entry = base64_encode($arquivo);
    ?>

  <div class="container">
    <div class="col-sm-12"> 
      <div> 
   		
      	<h1 class="titulo"><?php echo $resultado['TITULO']; ?></h1>
   	    <hr>
      </div>
    	
    	<div>
    		<img src="data:image/jpeg;base64,<?= $entry ?>" class="img-responsive" style="width:100%;" alt="Image">
        <hr>
				<p class="text"><?php echo $resultado['TEXTO']; ?></p>
    	</div>
			
      <div class="panel-footer"><?php echo $resultado['DATA']; ?></div>
    </div>

    <?php include "sistema-coment-face.php";?>

  </div>
</main>

<?php include "rodape.php";
?> 