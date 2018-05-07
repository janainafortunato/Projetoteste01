<?php

include 'init.php';

$nomeFan = $_POST['nomeFan'];
$fone = $_POST['fone'];
$ativPrim = $_POST['ativPrim'];
$cnpj = $_POST['cnpj'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$nomeRes = $_POST['nomeRes'];
$user = $_POST['user'];
$pw = $_POST['password'];

$associacoes = $user.",".$pw. ",".$nomeFan.",".$fone.",".$ativPrim.",".$cnpj.",".$rua.",".$bairro.",". $cidade.",".$nomeRes;

$date = file('accociacoes.csv' );
$date [] = $usuarios."\n";
$date_str = implode('',$date);

file_put_contents('associacoes.csv', $date_str);

$usuarios = $user.",".$pw;

$date = file('usuarios.csv' );
$date [] = $usuarios."\n";
$date_str = implode('',$date);

file_put_contents('usuarios.csv', $date_str);

redirect('form-login.php');


?>