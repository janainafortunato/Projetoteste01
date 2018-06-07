<?php
include 'bd/conexao.php';
?>
<?php
$categoria=addslashes($_POST['categoria']);
$titulo=addslashes($_POST['titulo']);
$subtitulo=addslashes($_POST['subtitulo']);
$file=addslashes($_POST['file']);
$texto=addslashes($_POST['texto']);
// $email = $_SESSION['user'];


 //$select = $conn->query("SELECT ID FROM TB_ASSOCIACOES WHERE EMAIL='$email'");
 //$result = $select->fetch(PDO::FETCH_ASSOC);

 // print_r($result);


$sql ="INSERT INTO TB_NOTICIAS (CATEGORIA, TITULO, SUBTITULO, TEXTO, ARQUIVO) VALUES(:categoria, :titulo, :subtitulo, :file, :texto)";
$stmt = $conn->prepare( $sql );

$stmt->bindParam( ':categoria', $categoria);
$stmt->bindParam( ':titulo', $titulo);
$stmt->bindParam( ':subtitulo', $subtitulo);
$stmt->bindParam( ':file', $file);
$stmt->bindParam( ':texto', $texto);
//$stmt->bindParam( ':ID', $result);

$result = $stmt->execute();
if ( ! $result ){
	var_dump( $stmt->errorInfo() );
	exit;
}

header('location:index-assoc.php');


?>

