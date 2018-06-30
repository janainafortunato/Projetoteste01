<?php 
session_start();
include 'bd/conexao.php';
?>

<?php 

$id = isset($_GET['id'])? (int) $_GET['id'] : null;
    //Valida a variavel da URL
    if (empty($id)){
      echo "ID para alteração não definido";
    exit;
    }

$sql = ("DELETE FROM TB_NOTICIAS WHERE ID_NOT = '$id' AND PUBLICADO = '0'");

$stmt = $conn->prepare($sql);

// $stmt->bindParam(1, $id);

$result = $stmt->execute();
if ( ! $result ){
			var_dump( $stmt->errorInfo() );
			exit;
		}
		$_SESSION['sucess-excluido']=1;
		header('location:index-assoc.php');


?>