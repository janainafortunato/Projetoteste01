<?php 
session_start();
include_once 'cabecalho.php';
include 'bd/conexao.php';
?>

<div class="container">
  <div class="row">
    </div>
      <div class="col-md-3">
        <div class="card">
            <img src="/w3images/team2.jpg" alt="John" style="width:100%">
              <h1>John Doe</h1>
              <p class="title">CEO & Founder, Example</p>
              <p>Harvard University</p>
            </div>
  <div style="margin: 24px 0;">
         <div class="col-md-9">
        <h4><i class="fas fa-th-list"></i> Minhas Notícias</h4>
        <div class="table-responsive">
          <table id="mytable" class="table table-bordred table-striped">
            <thead>
              <th>ID</th>
                <th>Título</th>
                <th>Data / Hora</th>
                <th>Editar</th>
                <th>Deletar</th>
                <th>Publicar</th>
              </thead>
              
              <?php
                $query = "SELECT * FROM TB_ASSOCIACOES, TB_NOTICIAS WHERE NOT_ASSOC_ID = ID_ASSOC";
                $stmt = $conn->prepare($query);
                $res = $stmt->execute();
                $rows = $stmt->rowCount();
  
                  if ($rows <=0) {
                      echo "<tbody>
                              <tr>
                                <td>Você ainda não possui notícias cadastradas.</td>
                              <tr>
                            </tbody>";
                  } else{
              ?>
              
              <?php
                while ($campos = $stmt->fetch(PDO::FETCH_ASSOC)) {
                      $id = $campos['ID_NOT'];
                      $titulo = $campos['TITULO'];
                      date_default_timezone_set('America/Sao_Paulo');
                      $data = date('Y-m-d H:i');
              ?>

              <tbody>
                <tr>
                  <td><?php echo $id; ?></td>
                  <td><?php echo $titulo; ?></td>
                  <td><?php echo $data; ?></td>
                  <td><p data-placement="top" data-toggle="tooltip" title="Editar"><a href="form-editar-not.php?id=<?=$id?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></p></td>
                  <td><p data-placement="top" data-toggle="tooltip" title="Deletar"><a class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a></p></td>
                  <td><p data-placement="top" data-toggle="tooltip" title="Publicar"><a class="btn btn-success btn-xs"><i class="fas fa-check-square"></i></span></a></p></td>
                 </tr>
              <?php
               }
            }

            ?>
          </tbody>
        
        </table>
      </div>
    </div>
  </div>
  
  <!-- formulário de edição -->
  <?php

    // pega o ID da URL
    // $id = isset($_GET['id']) ? (int) $_GET['id'] : null;
    // //Valida a variavel da URL
    // if (empty($id)){
    //   echo "ID para alteração não definido";
    // exit;
    // }

    // $sql = "SELECT CATEGORIA, TITULO, SUBTITULO, ARQUIVO, TEXTO FROM TB_NOTICIAS WHERE ID_NOT='$id'";
    // $result = $conn->prepare($sql);
    // $result->bindParam();

  ?>


<!--   <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <h4 class="modal-title custom_align" id="Heading">Edite sua publicação</h4>
          </div>
          <div class="modal-body">
          <form action="" method="post">
          <div class="form-group">
            <label>Classifique a nóticia</label>
            <select class="selectpicker" name="categoria">
              <option>Cursos</option>
              <option>Reuniões</option>
              <option>Esporte</option>
              <option>Projetos</option>
              <option>Ações Sociais</option>
            </select>
          </div>

          <div class="form-group">
            <label>Título</label>
            <input class="form-control " type="text">
          </div>
          
          <div class="form-group">
            <label>Subtítulo</label>
            <input class="form-control " type="text">
          </div>
          
          <div class="form-group">
            <label>Escolha outro arquivo</label>
            <input type="file" name="file" />
          </div>
          
          <div class="form-group">
            <label>Texto da notícia</label>
            <textarea rows="2" class="form-control"></textarea>
          </div>
        </div>
        
        <div class="modal-footer ">
          <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Editar</button>
        </div>
      </form>
      </div>
    </div>
  </div>
<!-- fim do formulário de edição -->

<!-- modal excluir -->

  <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <h4 class="modal-title custom_align" id="Heading">Deletar Notícia</h4>
          </div>
          
          <div class="modal-body">
            <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Tem certeza que deseja excluir esta notícia?</div>
          </div>
          
          <div class="modal-footer ">
            <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Sim</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Não</button>
          </div>
        </div> 
      </div> 
    </div>
<!-- fim excluir -->

<!-- modal publicar -->
    <div class="modal fade" id="publicar" tabindex="-1" role="dialog" aria-labelledby="publicar" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
            <h4 class="modal-title custom_align" id="Heading">Publicar Notícia</h4>
          </div>
          
          <div class="modal-body">
            <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Tem certeza que deseja publicar esta notícia?</div>
          </div>
          
          <div class="modal-footer ">
            <button type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Sim</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Não</button>
          </div>
        </div> 
      </div> 
    </div>

<!-- fim publicar -->


<div style="margin-top:250px;">

<?php
include 'rodape.php';
?>

</body>
</html>