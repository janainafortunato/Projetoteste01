<?php 
session_start();
include 'cabecalho.php';
include "bd/conexao.php";
?>
<div class="container">
<?php
  $sql = "SELECT ARQUIVO, TITULO, TEXTO, ID_NOT, SUBTITULO FROM TB_NOTICIAS WHERE PUBLICADO = '1' AND CATEGORIA = 'Esporte' ORDER BY DATA DESC LIMIT 9";

  $stmt = $conn->prepare($sql);
  $res = $stmt->execute();
  $rows = $stmt->rowCount();

  if ($rows <=0) {
    echo "<h1>NÃO EXISTE NOTICIAS PLUBLICADAS :(</h1>";
    } else{         

  ?>
  <?php  
  while ($campos = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $id = $campos['ID_NOT'];
    $titulo = $campos['TITULO'];
    $arquivo = $campos['ARQUIVO'];
    $texto = $campos['TEXTO'];
    $subtitulo = $campos['SUBTITULO'];

    $rest = substr($texto, 0, 300);

    $entry = base64_encode($arquivo);

   ?>

  <div>
    <div class="col-sm-4">
        <div>
            <h4 class="titulo-h4"><?php echo $titulo ?></h4>
            <p class="text-index"><?php echo $subtitulo ?></p>      
        </div>
        <div>
            <a href="not.php?id=<?=$id?>"><img src="data:image/jpeg;base64,<?= $entry ?>" class="img-responsive" style="width:100%;height:200px;" alt="Image"></a>
            <p class="text-index"><?php echo $rest ?><a href="not.php?id=<?=$id?>">Saiba mais...</a></p>
        </div>
    </div>
  </div>
    <?php
    }
}
  ?>
</div>

<?php
include 'rodape.php';
?>