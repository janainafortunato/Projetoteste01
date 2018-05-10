<?php

mysql_connect('localhost', 'root'); 
mysql_select_db('Servidor:localhost/Basededados/Camila/Tabela/tb_comentarios');

$selecionarDados= mysql_query("SELECT*FROM tb_comentarios WHERE status='ativo'"); //parte do banco que faz conexão com o banco de dados para armazenar os comentarios
	$contacoments= @mysql_num_rows($selecionarDados);
	   if($contacoments<=0){
	     echo"seja o primeiro a comentar!";

	   }else {
	      while($campos=mysql_fetch_array($selcionarDados)){
	         $pegaId=$campo['id'];                                  //vai armazenar o nome da pessoa que fez o comentario vai aparece na mesma pagina e o id de cada comentario
	         $pegaNome=$campos['nome'];
	         $peegaCamontario=$campos['comentario'];        //vai armazenar o comentario no banco de dados e vai aparece na mesma pagina
}

"<script> alert(\"preecha todos os campos\");</script>"


"<script>alert(\"enviando com sucesso!\");</script>