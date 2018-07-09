<?php 
session_start();
include "cabecalho.php";
include "bd/conexao.php";
?>

<main> 

  <div class="container">

    <center><h2>ÚLTIMAS NOTÍCAIS</h2></center>
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 50%; margin: auto;">
      
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
    
      
      <div class="carousel-inner" role="listbox" >
        <div class="item active">
          <img src="img/figura03.jpeg" alt="Los Angeles" style="width:100%;height:400px;">
          <div class="carousel-caption">
            <a href="form-cadastro-assoc.php" id="btn" class="btn">CADRASTRE-SE</a>
            <!-- <h4 style="font-size: 25px">Associação Beneficente Betânia-A.B.B</h4> -->
        
      </div>

            <div class="row">
          
             
           </div>
        </div>
      <?php
        $sql = "SELECT ARQUIVO, TITULO, ID_NOT FROM TB_NOTICIAS WHERE PUBLICADO = '1' ORDER BY DATA DESC LIMIT 3";

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

    $rest = substr($texto, 0, 300);

    $entry = base64_encode($arquivo);

   ?>
    
         <div class="item">
          <a href="not.php?id=<?=$id?>"><img src="data:image/jpeg;base64,<?= $entry ?>" alt="Chicago" class="img-responsive" style="width:100%;height:400px;"></a>
          <div class="carousel-caption">
        <h3 style="font-size: 25px"><?php echo $titulo ?></h3> 
        
      </div>

        </div>
       <?php
    }
}
  ?>
        
        </div>
    
      
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
<br>
<br>
  <div class="container">
  <?php
  $sql = "SELECT ARQUIVO, TITULO, TEXTO, ID_NOT, SUBTITULO FROM TB_NOTICIAS WHERE PUBLICADO = '1' ORDER BY DATA DESC LIMIT 6";

  $stmt = $conn->prepare($sql);
  $res = $stmt->execute();
  $rows = $stmt->rowCount();

  if ($rows <=0) {
    echo "<h1>NÃO EXISTE NOTICIAS PLUBLICADAS :(</h1>";
    } else{         

  ?>
  <div class="row">
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

  
  <!-- <div class="not"> -->
    <div class="col-md-4">
      <div class="title">
        <h4 class="titulo-h4"><?php echo $titulo ?></h4>
        <p class="text-index"><?php echo $subtitulo ?></p>
      </div>
      <div>
          <a href="not.php?id=<?=$id?>"><img src="data:image/jpeg;base64,<?= $entry ?>" class="img-responsive" style="width:100%;height:200px;" alt="Image"></a>
          <p class="text"><?php echo $rest ?><a href="not.php?id=<?=$id?>"> Saiba mais...</a></p>
          <hr>
      </div>
    </div>

  <!-- </div> -->
  <?php
    }
  echo "</div>";
}
  ?>

</div>

</main>

<?php include "rodape.php";
?> 

</body>
</html>
