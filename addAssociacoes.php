<?php
 
session_start();

include 'bd/conexao.php';

$nomeFan = addslashes($_POST['nomeFan']);
$cnpj = addslashes($_POST['cnpj']);
$fone = addslashes($_POST['fone']);
$cel = addslashes($_POST['cel']);
$face = addslashes($_POST['face']);
$rua = addslashes($_POST['rua']);
$bairro = addslashes($_POST['bairro']);
$cidade = addslashes($_POST['cidade']);
$nomeRes = addslashes($_POST['nomeRes']);
$user = addslashes($_POST['user']);
$pw = md5(addslashes($_POST['password']));

$sql = "SELECT EMAIL, CNPJ FROM TB_ASSOCIACOES";
$stmt = $conn->prepare( $sql );
$result = $stmt->fetch(PDO::FETCH_ASSOC);

$email_res = $result['EMAIL'];
$cnpj_res = $result['CNPJ'];

if ($email_res == $email || $cnpj_res == $pw) {
	
	$_SESSION['not-sucess']=1;
	header('location:form-cadastro-assoc.php');
}else{

$sql = "INSERT INTO TB_ASSOCIACOES (NOME_FANTASIA, CNPJ, TELEFONE, CELULAR, FACEBOOK, RUA, BAIRRO, CIDADE, NOME_RESPONSAVEL, EMAIL, SENHA) VALUES(:nomeFan, :cnpj, :fone, :cel, :face, :rua, :bairro, :cidade, :nomeRes, :user, :pw)";

$stmt = $conn->prepare( $sql );

$stmt->bindParam( ':nomeFan', $nomeFan );
$stmt->bindParam( ':cnpj', $cnpj );
$stmt->bindParam( ':fone', $fone );
$stmt->bindParam( ':cel', $cel);
$stmt->bindParam( ':face', $face);
$stmt->bindParam( ':rua', $rua);
$stmt->bindParam( ':bairro', $bairro);
$stmt->bindParam( ':cidade', $cidade);
$stmt->bindParam( ':nomeRes', $nomeRes);
$stmt->bindParam( ':user', $user);
$stmt->bindParam( ':pw', $pw);

$result = $stmt->execute();
if ( ! $result ){
	var_dump( $stmt->errorInfo() );
	exit;
}

$_SESSION['sucess-cadastrado']=1;
header('location:form-login.php');

}

?>