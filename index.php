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
      </ol>
    
      
      <div class="carousel-inner" role="listbox" >
        <div class="item active">
          <a href="not-2.php"><img src="img/figura03.jpeg" alt="Los Angeles" width="1200" height="1000"></a>
          <div class="carousel-caption">
            <h4 style="font-size: 25px">Associação Beneficente Betânia-A.B.B</h4>
        
      </div>

            <div class="row">
          
             
           </div>
        </div>
    
         <div class="item">
          <a href="not-1.php"><img src="img/figura01.jpeg" alt="Chicago" width="1200" height="1000"></a>
          <div class="carousel-caption">
        <h3 style="font-size: 25px">Feira de artesanato dos associados da associação Betânia</h3> 
        
      </div>

        </div>
     
        <div class="item">
          <a href="not-6.php"><img src="img/figura09.jpeg" alt="New york" width="1200" height="1000"></a>
       <div class="carousel-caption">
        <h4 style="font-size: 25px">Atendimento Médico</h4>
        
      </div>

        </div>
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
  $sql = "SELECT ARQUIVO, TITULO, TEXTO, ID_NOT, SUBTITULO FROM TB_NOTICIAS WHERE PUBLICADO = '1' ORDER BY DATA DESC LIMIT 9";

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
        <!-- <div class="panel-footer">16/05/18 em Abreu lima</div> -->
    </div>
  </div>
  <?php
    }
}
  ?>

</div>

</main>

<?php include "rodape.php";
?> 

</body>
</html>
