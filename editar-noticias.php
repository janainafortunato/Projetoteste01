<?php
session_start();
include 'bd/conexao.php'
?>

<?php 

$categoria=addslashes($_POST['categoria']);
$titulo=addslashes($_POST['titulo']);
$subtitulo=addslashes($_POST['subtitulo']);
$file_path= addslashes($_FILES['file']['tmp_name']);
$texto=addslashes($_POST['texto']);
$id=addslashes($_POST['id']);

$file = file_get_contents($file_path);

$sql = "UPDATE TB_NOTICIAS SET CATEGORIA = '$categoria', TITULO = '$titulo', SUBTITULO = '$subtitulo', ARQUIVO = '$file', TEXTO = '$texto' WHERE ID_NOT = '$id'";

$stmt = $conn->prepare( $sql );

$result = $stmt->execute();
if ( ! $result ){
	var_dump( $stmt->errorInfo() );
	exit;
}

header('location:index-assoc.php');


?>
