<?php include "cabeçalho.php";
?>

<main> 

  <div class="container">
    <h2>ÚLTIMAS NOTÍCAIS</h2>  
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
    
      
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/figura01.png" alt="Los Angeles" width="1200" height="1000">
        </div>
    
        <div class="item">
          <img src="img/figura02.png" alt="Chicago" width="1200" height="1000">
        </div>
    
        <div class="item">
          <img src="img/figura02.png" alt="New york" width="1200" height="1000">
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

  <div class="container">
   <center><h2>MELHORIAS PARA COMUNIDADE </h2>
    <p><h4>Capacitação para os membros das associações </h4></p>            
    <img src="img/figura07.png" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
    <p><h4>Cursos de cidadania para moradores do Forte Orage</h4></p>            
    <img src="img/figura08.png" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
    <p><h4>Reunião no bairro do Pilar</h4></p>            
    <img src="img/figura09.png" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
    <p><h4>Reunião geral para os moradores dos bairros do Ssocego e Vila Velha </h4></p>            
    <img src="img/figura10.png" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
  </div></center>

  <div class="container">

    <h2>Deixe seu comentario </h2>

    <div class="media">
      <div class="media-left">
        <img src="img/figura04.png" class="media-object" style="width:60px">
      </div>

      <div class="media-body">
        <h4 class="media-heading">Maria dos Santos</h4>
        <p>Gostaria de saber quando vai haver doacões de leite? </p>
      </div>
    </div>

    <hr>
    <div class="media">
      <div class="media-left">
        <img src="img/figura05.png" class="media-object" style="width:60px">
      </div>

      <div class="media-body">
        <h4 class="media-heading">Fernanda Santos</h4>
        <p>Gostei bastante do curso de manicure oferecido pela associação do Pilar</p>
      </div>
    </div>
    <hr>

    <div class="media">
      <div class="media-body">
        <h4 class="media-heading">José Antonio</h4>
        <p> como faço para me cadidata para oferecer serviços comunitarios? </p>
      </div>
      
      <div class="media-right">
        <img src="img/figura06.png" class="media-object" style="width:60px">
      </div>
    </div>

  </div>
  
  <div class="container">
    <h2>Dia-a-dia Associações</h2>
    <!-- <p>Add class .active to let the user know which page he/she is on:</p> -->
    <ul class="pagination">
      <li><a href="#">1</a></li>
      <li class="active"><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#">4</a></li>
      <li><a href="#">5</a></li>
    </ul>

  </div>
</main>

<?php include "rodape.php";
?> 

</body>
</html>
