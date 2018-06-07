<?php include "conexao.php";?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body> -->
  <?php  

    // $query = "SELECT * FROM TB_COMENTARIO WHERE COM_NOME='$nomeComent' AND COM_COMENTARIO='$coment'";
    // $result = mysqli_query($conn, $query);
    // $contacoments = mysqli_num_rows($result);
      
    //   if($contacoments <= 0){
    //     echo"Seja o primeiro a comentar!";

    //   } else {
  ?>

  <?php
  
    // while($campos=mysqli_fetch_assoc($result)){
    //   $id=$campos['COM_ID'];                                  
    //   $name=$campos['COM_NOME'];
    //   $_comentario=$campos['COM_COMENTARIO'];
  ?>
    <!-- <div id="exibe">
      <h2>nome:<?php //echo $name; ?></h2>
      <p>Comentario:<?php //echo $_comentario; ?></p>
      <a href="?action=excluir&id=<?php //echo $id; ?> " class= "excluir">Editar </a>
    </div> -->
  <?php 

    // if(isset($_GET['action']) && $_GET['action'] =='excluir'){
    //   $idExcluir=$_GET['id'];
    //   $query = "DELETE FROM TB_COMENTARIO WHERE COM_ID='$idExcluir'";
    //   $result = mysqli_query($conn, $query);
      
    //   if ($result) {
    //   echo"<script > alert (\"editado com sucesso!\");</script>";
    //   }
    // }
  ?>

<!-- <div class="container">
<form action="form-coment.php" method="post">
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

</body>
</html> -->

<?php

// if(isset($_POST['acao']) && $_POST['acao']=='preenchido'){
//   include 'bd/conexao.php';

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
// }

?>

<div class="container">
<form action="cadastrarComent.php" method="post">
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
