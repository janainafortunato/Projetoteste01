<?php

if(isset($_POST['acao']) && $_POST['acao']=='preenchido'){
	include 'bd/conexao.php';

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

header('location:index.php');;

?>

