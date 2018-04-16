<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="Lista da agenda cadastrada" />
      <meta name="author" content="https://baguy.github.io/curriculo/" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

      <title>Lista da agenda cadastrada</title>

      <!--Bootstrap core CSS-->
      <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" /> -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <!-- HTML shim and Respond.js for IE8 support of HTML elements and media queries-->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

          <!-- jogar em arquivo CSS depois - classe margin-button15 -->
          <style type="text/css">
              .margin-button15 {margin-bottom: 15px;}
          </style>
   </head>

   <body>
      <div class="container">
        <div class="row">
          <h1>Agenda</h1>

          <a href="<?php echo base_url('adicionarcontato') ?>" class="btn btn-success margin-button15">Adicionar contato</a>

          <table class="table table-bordered">
            <thread>
              <tr>
                <th class="text-center">Nome</th>
                <th class="text-right">E-mail</th>
                <th class="text-center">Telefone</th>
                <th class="text-center">Ações</th>
              </tr>
            </thread>

              <?php
              $contador = 0;
              foreach($agenda as $agenda){
                  echo'<tr>';
                    echo'<td>'.$agenda->nome.'</td>';
                    echo'<td class="text-right">'.$agenda->email.'</td>';
                    echo'<td class="text-center">'.$agenda->telefone.'</td>';
                    echo'<td class="text-center">'.$agenda->ativo.'</td>';
                    echo'<td class="text-center">';
                      echo'<a href="agenda/editarcontato/'.$agenda->id.'" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
                      echo'<a href="agenda/apagarcontato/'.$agenda->id.'" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
                      echo'<a href="agenda/detalhes'.$agenda->id.'" title="Detalhes" class="btn btn-info"><span class="glyphicon glyphicon-eye-open" arian-hidden="true"></span></a>';
                    echo'</td>';
                  echo '</tr>';
                  $contador++;
                }
              ?>
              </table>

              <div class="row">
                <div class="col-md-12">
                  Total de registros: <?php echo $contador ?>
                </div>
              </div><!-- /.row -->
        </div>
      </div><!-- /.container -->

      <!-- Bootstrap core JavaScript -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   </body>
</html>
