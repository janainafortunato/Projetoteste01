<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Dia-a-dia Associações</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/web-fonts-with-css/css/fontawesome-all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    
    <header>

      <div class="jumbotron text-center">
        <h1>Dia-a-dia Associações</h1>
        <p>Veja as últimas notícias e acompanhe o que esta acontecendo na associação do seu bairro.</p> 
      </div>

      <nav class="navbar navbar-inverse navbar">
        <div>
          <div class="row">
            <div class="col col-lg-3">
              <ul class="nav navbar-nav">
                <li><a href="sobre.php">Sobre</a></li>
              </ul>
            </div>
            
            <div class="col col-lg-7">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Últimas Notícias</a></li>
                <li><a href="cursos.php">Curso</a></li>
                <li><a href="politica.php">Política</a></li>
                <li><a href="esporte.php">Esporte</a></li>
                <li><a href="projeto.php">Projetos</a></li>
                <li><a href="acoes-sociais.php">Ações Sociais</a></li>
              </ul>
            </div>
          
            <div class="col col-lg-2">
              <ul class="nav navbar-nav">
                <li><a href="form-cadastro-assoc.php">Cadastre-se</a></li>
                <li><a href="index.php">Sair <i class="fas fa-sign-out-alt"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

    </header>

    <h4 class="bemVindo">Bem-vindo(a), <?php echo $_SESSION['user-logged'];?></h4>
  <main>
<center>
  <h1>Publicar Notícias</h1>
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
      <li><a href="#">Política</a></li>
      <li><a href="#">Esporte</a></li>
      <li><a href="#">Projetos</a></li>
      
    </ul>
  </div>
</div>
</center>
</main>
<div style="margin-top:450px;">
<?php
include 'rodape.php';
?>
<div>
</body>
</html>