<?php 
session_start();
include_once 'cabecalho.php';
include 'bd/conexao.php';
?>

<?php

// $query = "SELECT * FROM TB_NOTOCIAS";
// $stmt = $conn->prepare($query);
// $res = $stmt->execute();
// $rows = $stmt->rowCount();

?>

<div class="container">
	<div class="row">
		
    </div>
        <div class="col-md-12">
        <h4><i class="fas fa-th-list"></i> Minhas Notícias</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                <thead>
                  <th>ID</th>
                  <th>Título</th>
                  <th>Data</th>
                  <th>Editar</th>
                  <th>Deletar</th>
                  <th>Publicar</th>
                </thead>
    <tbody>
    
    <tr>
    <td>1</td>
    <td>Lorem ipsum</td>
    <td>23/06/208</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Editar"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Deletar"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Publicar"><button class="btn btn-success btn-xs" data-title="Publicar" data-toggle="modal" data-target="#publicar" ><i class="fas fa-check-square"></i></span></button></p></td>
    </tr>
    
 		<tr>
    <td>1</td>
    <td>Lorem ipsum</td>
    <td>23/06/208</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Editar"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Deletar"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Publicar"><button class="btn btn-success btn-xs" data-title="Publicar" data-toggle="modal" data-target="#publicar" ><i class="fas fa-check-square"></i></span></button></p></td>
    </tr>
    
    
 		<tr>
    <td>1</td>
    <td>Lorem ipsum</td>
    <td>23/06/208</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Editar"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Deletar"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Publicar"><button class="btn btn-success btn-xs" data-title="Publicar" data-toggle="modal" data-target="#publicar" ><i class="fas fa-check-square"></i></span></button></p></td>
    </tr>
  </tbody>
        
</table>


            
        </div>
	</div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edite sua publicação</h4>
      </div>
          <div class="modal-body">

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
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
    
    
    
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


<!-- <div style="margin-top:450px;"> -->

<?php
include 'rodape.php';
?>
<div>
	<script src="">
		$(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});

		
	</script>

</body>
</html>