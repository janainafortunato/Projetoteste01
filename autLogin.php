<?php

// include 'init.php';

// $user = $_POST['user'];
// $pw = $_POST['password'];

// if (login($user, $pw)) {
//     redirect('index-assoc.php');
// } else {
//     redirect('form-login.php');
// }
session_start();
include 'bd/conexao.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Autenticação</title>
	<script type="text/javascript">
		function loginsucess(){
			window.location='index-assoc.php';
		}
		function loginfailed(){
			alert('Login e/ou senha incorretos');
			window.location='form-login.php';
		}
	</script>
</head>
<body>

<?php
// include 'bd/conexao.php';

// $user = addslashes($_POST['user']);
// $pw = md5(addslashes($_POST['password']));

// $sql = "SELECT * FROM TB_ASSOCIACOES WHERE EMAIL='$user' AND SENHA='$pw'";
// $res = $pdo->query($sql);

//     if($res !== false){
//         $result = $res->fetch(PDO::FETCH_ASSOC);
//         if($result['EMAIL'] == $user && $result['SENHA'] == $pw) {
//             $_SESSION['user'] = $user;
//         } else {
//             $_SESSION['errorLogin'] = true;
//         }
// 	}else{
	    
//  		echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='form-login.php';</script>";
//         die();
// 		}
// 	header("location:index-assoc.php");




$user = addslashes($_POST['user']);
$pw = md5(addslashes($_POST['password']));

	$sql = "SELECT * FROM TB_ASSOCIACOES WHERE EMAIL='$user' AND SENHA='$pw'";
	$res = $conn->query($sql);

	// $sql = mysqli_query($conexao,"SELECT * FROM TB_ASSOCIACOES WHERE EMAIL = '$user' and SENHA='$pw'");
	// $row = mysqli_num_rows($sql);
	// if($row > 0){
	if($res !== false){
		$result = $res->fetch(PDO::FETCH_ASSOC);
		if($result['EMAIL'] == $user && $result['SENHA'] == $pw) {
			$_SESSION['user'] = $user;
			$_SESSION['password'] = $pw;
			$_SESSION['logado'] = True;
		echo "<script>loginsucess()</script>";
		}
	else{
		echo "<script>loginfailed()</script>";
	}
}



?>
