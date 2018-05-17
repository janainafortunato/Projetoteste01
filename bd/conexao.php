<?php
try{
	// $pdo = new PDO("mysql:host=localhost:3306;dbname=id5794465_camila","id5794465_root","24682468");
	$pdo = new PDO("mysql:host=localhost:3306;dbname=camila","root","ifpe");
	
}catch(PDOException $e){
	echo $e->getMessage();
}




// $sql = "INSERT INTO `TB_ASSOCIACOES`(`NOME_FANTASIA`, `CNPJ`, `TELEFONE`, `CELULAR`, `FACEBOOK`, `RUA`, `BAIRRO`, `CIDADE`, `NOME_RESPONSAVEL`, `EMAIL`, `SENHA`) VALUES ('nome','1234','(83)982938','(81)9898','camila.facebook','rua de camila','bairro de camila','cidade de camila','responsavel','camila@gmail.com','senhaCamila')";
/*'nome',
'1234',
'(83)982938',
'(81)9898',
'camila.facebook',
'rua de camila',
'bairro de camila',
'cidade de camila',
'responsavel',
'camila@gmail.com',
'senhaCamila'*/

// :nomeFantasia, :cnpj, :telefone, :celular, :facebook, :rua, :bairro, :cidade, :nomeResponsavel, :email, :senha
// $sql = "select * from TB_ASSOCIACOES";
// $stmt = $pdo->prepare($sql);
// $stmt->bindParam()
// $stmt->execute();
// $result = $stmt->fetch(PDO::FETCH_ASSOC);

// for ($i = 0; $i < sizeof($result); $i++) { 
	// echo 'CNPJ: ' . $result['CNPJ'] . '<br>';
	// echo 'TELEFONE: ' . $result['TELEFONE'] . '<br>';
	// echo 'EMAIL: ' . $result['EMAIL'] . '<br>';
// }

?>