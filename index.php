<?php 
include "cabecalho.php";
include "bd/conexao.php";
?>

<main> 

  <?php 

  $query = "SELECT DISTINCT ARQUIVO,";
  //     $stmt = $conn->prepare($query);
  //     $res = $stmt->execute();
  //     $rows = $stmt->rowCount();

  //     if ($rows <=0) {
  //         echo "NENHUMA NOTÍCIA PUBLICADA :(";
  //       } else{
          
  ?>
    <?php 

    // $campos = $stmt->fetch(PDO::FETCH_ASSOC);
    

    ?> 

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
  <div class="row">
    <div class="col-sm-4">
      <div><h4 class="titulo-h4">A.B.B inagura o seu espaço cultural</h4></div>
          <div>
          <img src="img/figura0.jpg" class="img-responsive" style="width:100%;height:200px;" alt="Image">
          <p class="text-index">A presidenta Duci Fontes e sua diretoria executiva, inaugurou, o Espaço Cultural da ABB, onde serão realizados cursos e oficinas.<a href="not-3.php">Saiba mais...</a></p>
      </div>
        <div class="panel-footer">16/05/18 em Abreu lima</div>
    </div>

    <div class="col-sm-4">
        <div><h4 class="titulo-h4">Associação dos pescadores promove cursos</h4></div> 
        <div>
          <img src="img/figura00.png" class="img-responsive" style="width:100%;height:200px;" alt="Image">
          <p class="text-index"> A Associação de pescadores de Igarassu promove cursos atraves do programa govenamental do estado de Pernambuco chapéu de palha.<a href="not-5.php">Saiba mais...</a></p>
        </div>
        <div class="panel-footer">22/05/18 em Igarassu</div>
    </div>
    <div class="col-sm-4">
        <div><h4 class="titulo-h4">Sela um colaborador</h4></div>
        <div>
          <img src="img/figura05.png" class="img-responsive" style="width:100%;height: 200px;" alt="Image">
          <p class="text-index">O Pão da Vida desenvolve projetos em diferentes áreas e precisa de pessoas dispostas a colaborar.<a href="not-4.php"> Saiba mais...</a></p>
        </div>
        <div class="panel-footer">23/05/18 em Igarassu</div>
    </div>
  </div>
</div>
<div class="container">
  <hr>
</div>


<div class="container">    
  <div class="row">
     <div class="col-sm-4">
            <div>BLACK FRIDAY DEAL</div>
            <div>
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido <a href="">Saiba mais...</a></p>
            </div>
                <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
    </div>
     <div class="col-sm-4">
            <div>BLACK FRIDAY DEAL</div>
            <div>
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido <a href="">Saiba mais...</a></p>
            </div>
                <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
    </div>
     <div class="col-sm-4">
            <div>BLACK FRIDAY DEAL</div>
            <div>
                <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
                    <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido <a href="">Saiba mais...</a></p>
            </div>
                <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
    </div>
  </div>
</div>

</main>

<?php include "rodape.php";
?> 

</body>
</html>
