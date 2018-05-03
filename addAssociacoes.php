<?php

include 'init.php';

$nomeFan = $_POST['nomeFan'];
$ativPrim = $_POST['ativPrim'];
$cnpj = $_POST['cnpj'];
$loc = $_POST['loc'];
$rua = $_POST['rua'];
$fone = $_POST['fone'];
$nomeRes = $_POST['nomeRes'];
$user = $_POST['user'];
$pw = $_POST['password'];

$associacoes = $user.",".$pw. ",".$nomeFan.",".$ativPrim.",".$cnpj.",".$loc.",".$rua.",".$fone.",".$nomeRes;

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