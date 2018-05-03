<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	input{
		padding:0px;
		height:100px;
		width:100px; 
	}
	body {
    background-color: #8c8c8c;
}
</style>
<body>
<center>
	<h1>Publicar Noticias</h1>
<form>
	<textarea rows="30" cols="60" maxlength="500"></textarea>
</form>
<button><a href="inserir_noticias.php">Enviar</a></button> <br>

<br>
<body>
<div class="container">
  <div class="btn-group">
    <button type="button" class="btn btn-primary">Classificação</button>
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">Cursos</a></li>
      <li><a href="#">Politica</a></li>
      <li><a href="#">Esporte</a></li>
      <li><a href="#">Projetos</a></li>
      
    </ul>
  </div>
</div>
</center>
</head>
</body>
</html>
<?php
include 'rodape.php'
?>