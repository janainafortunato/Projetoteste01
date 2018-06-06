	<!<?php
$conexao = mysql_connect("localhost",'root','');
$bd = mysql_select_db("bdcomentarios");
?>

  <form action="" method="post" action="#">
      <div class="form-row">
            <div class="form-group col-md-12">
              <h2>COMENTÁRIOS</h2>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-1">
              <img src="img.png" class="img-circle" style="width:50px">
            </div>
          </div>
            
            <div class="form-row">
              <div class="form-group col-md-4">
                <input class="form-control" rows="5" id="comment" placeholder="Escreva um comentário..."></input>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-2">
                <button class="btn" type="submit">ENVIAR</button>
                 <input type=submit value=Enviar></input>
                <input type=reset value=Limpar></input>
              </div>
            </div>
    </form> 
  