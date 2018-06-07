<?php
session_start();
include 'bd/conexao.php';
?>
<?php
$categoria=addslashes($_POST['categoria']);
$titulo=addslashes($_POST['titulo']);
$subtitulo=addslashes($_POST['subtitulo']);
$file=addslashes($_POST['file']);
$texto=addslashes($_POST['texto']);
$email = $_SESSION['user'];


 $stmt = $conn->prepare("SELECT ID_ASSOC FROM TB_ASSOCIACOES WHERE EMAIL='$email'");
 $stmt->execute();
 $result = $stmt->fetch(PDO::FETCH_ASSOC);

$id_assoc = $result['ID_ASSOC'];

$sql ="INSERT INTO TB_NOTICIAS (CATEGORIA, TITULO, SUBTITULO, TEXTO, ARQUIVO, NOT_ASSOC_ID) VALUES(:categoria, :titulo, :subtitulo, :file, :texto, :assoc_id)";
$stmt = $conn->prepare( $sql );

$stmt->bindParam( ':categoria', $categoria);
$stmt->bindParam( ':titulo', $titulo);
$stmt->bindParam( ':subtitulo', $subtitulo);
$stmt->bindParam( ':file', $file);
$stmt->bindParam( ':texto', $texto);
$stmt->bindParam( ':assoc_id', $id_assoc);

$result = $stmt->execute();
if ( ! $result ){
	var_dump( $stmt->errorInfo() );
	exit;
}

header('location:index-assoc.php');


?>

