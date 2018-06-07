<?php
include_once "bd/conexao.php"
?>
<!DOCTYPE HTML>
<html xmlns="http;//www.w3.org/1999/html">
<meta charset="utf-8">
<title>   </title>
<body>

  <?php
	if(isset($_GET['action']) && $_GET['action'] =='excluir'){
		$idExcluir=$_GET['id'];
		$query = "DELETE FROM TB_COMENTARIO WHERE COM_ID='$idExcluir'";
		$result = mysqli_query($conn, $query);
		if ($result) {
			echo"<script > alert (\"editado com sucesso!\");</script>";
		}
	}
	?>
	
	<div class="container">
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

    $query = "SELECT * FROM TB_COMENTARIO";
    $stmt = $conn->prepare($query);
    $res = $stmt->execute();
    $rows = $stmt->rowCount();
    if($rows <= 0){
    	echo"Seja o primeiro a comentar!";

    } else {
    	?>
		<div class="container">
    	<?php
    	while($campos = $stmt->fetch(PDO::FETCH_ASSOC)){
	         $id=$campos['COM_ID'];
	         $name=$campos['COM_NOME'];
	         $_comentario=$campos['COM_COMENTARIO'];
	    ?>
	         <div id="exibe">
	         	<p>nome:<?php echo $name; ?></p> 
	         	<p>Comentario:<?php echo $_comentario; ?></p>
	         	<a href="?action=excluir&id=<?php echo $id; ?> " class= "excluir">Excluir</a>
	         </div>
	         <?php
	      }
	     }
	     ?>
		</div>
</body>



</html>
<?PHP
if(isset($_POST['acao']) && $_POST['acao']=='preenchido'){
	include_once 'bd/conexao.php';

	$nomeComent = addslashes($_POST['nomeComent']);
	$coment = addslashes($_POST['coment']);

	$sql = "INSERT INTO TB_COMENTARIO (COM_NOME, COM_COMENTARIO) VALUES(:nomeComent, :coment)";

	$stmt = $conn->prepare( $sql );

	$stmt->bindParam( ':nomeComent', $nomeComent );
	$stmt->bindParam( ':coment', $coment );

	$result = $stmt->execute();
		if ( ! $result ){
			var_dump( $stmt->errorInfo() );
			exit;
		}
	unset($_POST['acao']);
}

header('location:index.php');
 ?>