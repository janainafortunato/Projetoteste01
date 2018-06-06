<?php
$servername = "localhost";
$username ="id5794489_camila";
$password ="janaina";
$dbname = "id5794489_camila";;
$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection) {
	die("Connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE HTML>
<html xmlns="http;//www.w3.org/1999/html">
<meta charset="utf-8">
<title>   </title>
<link href="estilo.css" rel="stylesheet" type="text/css"/>     
<body>
	<h2>Faça um comentario !</h2> 
	<?php  

    $query = "SELECT * FROM `tb_comentarios` WHERE status='ativo'"; // parte do banco que faz conexão com o banco de dados para armazenar os comentarios
    $result = mysqli_query($connection, $query);
    $contacoments = mysqli_num_rows($result);
    if($contacoments <= 0){
    	echo"Seja o primeiro a comentar!";

    } else {
    	?>

    	<?php
    	while($campos=mysqli_fetch_assoc($result)){
	         $id=$campos['id'];                                  // vai armazenar o nome da pessoa que fez o comentario vai aparece na mesma pagina e o id de cada comentario
	         $name=$campos['nome'];
	         $_comentario=$campos['comentarios'];        // vai armazenar o comentario no banco de dados e vai aparece na mesma pagina
	         ?>
	         <div id="exibe">
	         	<h2>nome:<?php echo $name; ?></h2>    <!-- id serve para escolher qual comentario vc que excluir -->
	         	<p>Comentario:<?php echo $_comentario; ?></p>  <!-- link para editar e exclui comentario -->
	         	<!-- <a href="?action=esconder&id=<?php echo $id; ?>" class="esconder"> esconder </a>  |-->
	         	<a href="?action=excluir&id=<?php echo $id; ?> " class= "excluir">Editar </a>
	         </div>
	         <?php
	       }
	     }
	     ?>

	     <?php
/*	   if(isset($_GET['action'])&& $_GET['action']=='esconder'){ // pega o id na url da get e munda a opção no banco de dados
	   	$idEsconder=$_GET['id'];
	   	$query = "UPDATE tb_comentarios SET status='inativo' WHERE id='$idEsconder'";
	   	$result = mysqli_query($connection, $query);
	   	if($result) {
	   		echo"<script > alert (\"Escondido com sucesso!\");</script>";
	   	}
	   }*/
	if(isset($_GET['action']) && $_GET['action'] =='excluir'){   // pega o id na url da get e munda a opção no banco de dados
		$idExcluir=$_GET['id'];
		$query = "DELETE FROM tb_comentarios WHERE id='$idExcluir'";
		$result = mysqli_query($connection, $query);
		if ($result) {
			echo"<script > alert (\"editado com sucesso!\");</script>";
		//	header('location: comentario.php');
		}
	}
	?>

	<!-- formulario para inserir comentario -->
	<form action="comentario.php" method="POST">
		<label for="nome">Nome:</label><br />
		<input type="text" id="nome" name="nome" maxlength="100" /><br/>
		<label for="comment">Comentario:</label><br/>
		<textarea name="msg" id="comment" cols="100" rows="4"></textarea>   <!-- amanho da caixa de texto para inserir o texto do comentario -->
		<input type="hidden" name="acao" value="preenchido"/></label></br>
		<input type="submit" class" class="btn" value="Enviar" />  <!-- Botão para envia comentario -->
	</form>

</body>



</html>
<?php
// bloco de codigo para inserir no banco de dados os comentarios   -->
if(isset($_POST['acao']) && $_POST['acao']=='preenchido'){
	$servername = "localhost";
	$username ="id5794489_camila";
	$password ="janaina";
	$dbname = "id5794489_camila";
	$connection = mysqli_connect($servername, $username, $password, $dbname);
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}
	// $nome= explode(' ',ucwords(trim($_POST['nome']))); // linha para desconsidrar espaço no banco de dados -->
	$nome = $_POST['nome'];
	// $nome=$nome [0];
	// $comentario=trim($_POST['msg']);
	$comentario = $_POST['msg'];

	if(empty($nome) || empty($comentario)){    //para do codigo para conferir se vai armazenar alguma informaçao no banco de dados -->

     echo "<script> alert('preencha todos os campos');</script> "; // mensagem para conferir se o formulario foi preenchido por completo -->

   }else{
   	$status='ativo';
   	$query = "INSERT INTO `tb_comentarios` (`nome`,`comentarios`,`status`) VALUES ('$nome', '$comentario','$status')";
   	$result = mysqli_query($connection, $query);
   	if($result) {
	  echo "<script>alert('enviando com sucesso!');</script>"; // mensagem para informa que a mensagem foi enviada com sucesso para ser postada como comentario -->
	    //header('location: comentario.php');
	     
   	} else {
   		echo "nao enviado";
   	}
   }
   unset($_POST['acao']);
 }
 ?>