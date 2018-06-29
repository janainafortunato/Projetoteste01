<?php 
session_start();
include_once 'cabecalho.php';
include 'bd/conexao.php';
?>

<div class="container">
  
  <?php
  $user = $_SESSION['user'];

  $sql = "SELECT NOME_FANTASIA FROM TB_ASSOCIACOES WHERE EMAIL = '$user'";
  $stmt = $conn->prepare($sql);
  $res = $stmt->execute();

  $campos = $stmt->fetch(PDO::FETCH_ASSOC);

  $nome = $campos['NOME_FANTASIA'];

  ?>
  <center><h2><?php echo $nome; ?></h2></center>

  <?php if(isset($_SESSION['sucess-editado'])):?>
    <center><span class="sucess-editado"> Notícia editada com sucesso!!! </span></center> 
    <?php unset($_SESSION['sucess-editado']); ?>
  <?php  endif;?>

  <?php if (isset($_SESSION['sucess-excluido'])):?>
    <center><span class="sucess-editado"> Notícia excluída com sucesso!!! </span></center> 
  <?php unset($_SESSION['sucess-excluido']); ?>
  <?php  endif;?>

  <div class="row">
    </div>
      <div class="col-md-12">
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
                $user = $_SESSION['user'];

                $query = "SELECT * FROM TB_ASSOCIACOES, TB_NOTICIAS WHERE TB_NOTICIAS.NOT_ASSOC_FK = TB_ASSOCIACOES.ID_ASSOC AND TB_ASSOCIACOES.EMAIL = '$user'";
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
                      $data = $campos['DATA'];
                      $publicado = $campos['PUBLICADO'];
              ?>

              <tbody>
                <tr>
                  <td><?php echo $id; ?></td>
                  <td><?php echo $titulo; ?></td>
                  <td><?php echo $data; ?></td>
                  <td><p data-placement="top" data-toggle="tooltip" title="Editar"><a href="form-editar-not.php?id=<?=$id?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></a></p></td>
                  <td><p data-placement="top" data-toggle="tooltip" title="Deletar"><a href="deletar-not.php?id=<?=$id?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a></p></td>
                  <?php if ($publicado = 1): ?>
                  <td><p data-placement="top" data-toggle="tooltip" title="Publicar"><a href="despublicar.php?id=<?=$id?>" class="btn btn-success btn-xs"><i class="fas fa-check-square"></i></span></a></p></td>
                  <?php else: ?>
                    <td><p data-placement="top" data-toggle="tooltip" title="Publicar"><a href="publicar.php?id=<?=$id?>" class="btn btn-warning btn-xs"><i class="fas fa-check-square"></i></span></a></p></td>
                  <?php endif ?>
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

<!-- modal excluir -->

  <!-- <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
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
    </div> -->
<!-- fim excluir -->

<!-- modal publicar -->
   <!--  <div class="modal fade" id="publicar" tabindex="-1" role="dialog" aria-labelledby="publicar" aria-hidden="true">
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
    </div> -->

<!-- fim publicar -->


<?php
include 'rodape.php';
?>

</body>
</html>