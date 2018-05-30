<?php session_start() ?>

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
      
    </header>
      <div class="jumbotron text-center">
        <h1>Dia-a-dia Associações</h1>
        <p>Veja as últimas notícias e acompanhe o que esta acontecendo na associação do seu bairro.</p> 
      </div>

      <nav class="navbar navbar-inverse navbar">
        <div>
          <div class="row">
            <div class="col col-lg-8">
              <ul class="nav navbar-nav">
                <li><a href="index.php"><i class="fas fa-home"></i> Últimas Notícias</a></li>
                <li><a href="cursos.php">Curso</a></li>
                <li><a href="politica.php">Política</a></li>
                <li><a href="esporte.php">Esporte</a></li>
                <li><a href="projeto.php">Projetos</a></li>
                <li><a href="acoes-sociais.php">Ações Sociais</a></li>
              </ul>
            </div>
            
            <div class="col col-lg-4">
              <ul class="nav navbar-nav">
                <?php if (isset($_SESSION['user'])): ?>
                <li style="color: gray;"><a href="#">Olá, <?php echo $_SESSION['user'];?></a></li>
                <li><a href="index-assoc.php">Minhas Notícias</a></li>
                <li><a href="publicar-noticias.php">Publicar Notícias</a></li>
                <li><a href="sair.php">Sair <i class="fas fa-sign-in-alt"></i></a></li>
                  <?php else: ?>
                <li><a href="form-cadastro-assoc.php">Cadastre-se</a></li>
                <li><a href="form-login.php">Login <i class="fas fa-sign-in-alt"></i></a></li>

                <?php endif ?>
              </ul>
            </div>
          </div>
        </div>
      </nav> 
    </header>