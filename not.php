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
        <p class="text"><?php echo $resultado['SUBTITULO']; ?></p>
   	    <hr>
      </div>
    	
    	<div>
    		<img src="data:image/jpeg;base64,<?= $entry ?>" class="img-responsive" style="width:100%;" alt="Image">
        <hr>
				<p class="text"><?php echo $resultado['TEXTO']; ?></p>
    	</div>
			
      <div class="panel-footer"><?php echo $resultado['DATA']; ?></div>
    </div>

    <div class="container">
    <br><br>
      <p>DEIXE AQUI SEU COMENTÁRIO</p>
  <?php
  if(isset($_GET['action']) && $_GET['action'] =='excluir'){
   $idExcluir=$_GET['id'];
   $query = "DELETE FROM TB_COMENTARIO WHERE COM_ID='$idExcluir'";

   $stmt = $conn->prepare($query);

// $stmt->bindParam(1, $id);

$result = $stmt->execute();
   // $result = mysqli_query($conn, $query);
   if ($result) {
     echo"<script > alert (\"Excluido com sucesso!\");</script>";
   }
  }
  ?>
  
  <!-- <div class="container"> -->
  <?php

  $id = isset($_GET['id']) ? (int) $_GET['id'] : null;
    //Valida a variavel da URL
    // var_dump($id);
    if (empty($id)){
      echo "ID para alteração não definido";
    exit;
    }
    ?>
<form action="" method="post">
  <div class="form-row">
    <div class="form-group col-sm-7">
      <label>Nome</label>
      <input class="form-control" rows="2" id="nome" placeholder="Nome" name="nomeComent"></input>
    </div>
  </div>
            
  <div class="form-row">
    <div class="form-group col-sm-7">
      <label>Comentário</label>
      <textarea class="form-control" rows="2" id="comment" placeholder="Escreva um comentário..." name="coment"></textarea>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-sm-12">
      <input type="hidden" name="acao" value="preenchido"/>
      <button class="btn" type="submit">ENVIAR</button>
    </div>
  </div>
</form>
</div>
<?php 
if (isset($_POST['acao'])) {
  $nomeComent = addslashes($_POST['nomeComent']);
  $coment = addslashes($_POST['coment']);
$acao = addslashes($_POST['acao']);

$sql = "INSERT INTO TB_COMENTARIO (COM_NOME,COM_COMENTARIO,FK_ID_NOT) VALUES(:nomeComent, :coment, :id)";
$stmt = $conn->prepare( $sql );

$stmt->bindParam( ':nomeComent', $nomeComent);
$stmt->bindParam( ':coment', $coment);
$stmt->bindParam( ':id', $id);

$result = $stmt->execute();
if ( ! $result ){
  var_dump( $stmt->errorInfo() );
  exit;
}
unset($_POST['acao']);
header('location:index.php');
} 

?>
<div class="container">
<p>COMENTÁRIOS</p>
  <?php

    $query = "SELECT * FROM TB_COMENTARIO, TB_NOTICIAS WHERE TB_NOTICIAS.ID_NOT = TB_COMENTARIO.FK_ID_NOT AND ID_NOT='$id' ORDER BY COM_ID DESC LIMIT 6";
    $stmt = $conn->prepare($query);
    $res = $stmt->execute();
    $rows = $stmt->rowCount();
    if($rows <= 0){
      echo"<div>Seja o primeiro a comentar!</div>";

    } else {
      ?>
    <!-- <div class="container"> -->
      <?php
      while($campos = $stmt->fetch(PDO::FETCH_ASSOC)){
           $id=$campos['COM_ID'];
           $name=$campos['COM_NOME'];
           $_comentario=$campos['COM_COMENTARIO'];
      ?>
           <div class="form-row" id="div-comentario">
              <div class="form-group col-sm-7">
                <p>NOME:<?php echo $name; ?></p>
                <p>COMENTÁRIO:<?php echo $_comentario; ?></p>
              </div>
            </div>
           <?php
        }
       }
       ?>
    </div>
</body>



</html>
<?php
// if(isset($_POST['acao']) && $_POST['acao']=='preenchido'){
//   include_once 'bd/conexao.php';

//   $nomeComent = addslashes($_POST['nomeComent']);
//   $coment = addslashes($_POST['coment']);

//   $sql = "INSERT INTO TB_COMENTARIO (COM_NOME, COM_COMENTARIO) VALUES(:nomeComent, :coment)";

//   $stmt = $conn->prepare( $sql );

//   $stmt->bindParam( ':nomeComent', $nomeComent );
//   $stmt->bindParam( ':coment', $coment );

//   $result = $stmt->execute();
//     if ( ! $result ){
//       var_dump( $stmt->errorInfo() );
//       exit;
//     }
//   unset($_POST['acao']);
//  // header('location:index.php');
// }
// header('location:index.php');
 ?>
    <?php 
    // include "comentario.php";
    ?>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <div id="fb-root"></div>

        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.0';
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="fb-comments" data-href="" data-numposts="5"></div>
  </div>
</div>



    <?php 
    // include "sistema-coment-face.php";
    ?>

  </div>
</main>

<?php include "rodape.php";
?> 