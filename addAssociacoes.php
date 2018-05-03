<?php
session_start();

$nomeFan = $_POST['nomeFan'];
$ativPrim = $_POST['ativPrim'];
$cnpj = $_POST['cnpj'];
$loc = $_POST['loc'];
$rua = $_POST['rua'];
$fone = $_POST['fone'];
$nomeRes = $_POST['nomeRes'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$usuarios = $usuario.",".$senha. ",".$nomeFan.",".$ativPrim.",".$cnpj.",".$loc.",".$rua.",".$fone.",".$nomeRes;

$date = file('usuarios.csv' );
$date [] = $usuarios."\n";
$date_str = implode('',$date);

file_put_contents('usuarios.csv', $date_str);


?>