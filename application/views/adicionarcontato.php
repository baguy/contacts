<!DOCTYPE html>
<html lang="pt-BR">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta name="description" content="Lista da agenda cadastrada" />
      <meta name="author" content="https://baguy.github.io/curriculo/" />
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

      <title>Cadastrar</title>

      <!--Bootstrap core CSS-->
      <!-- <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" /> -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

      <!-- HTML shim and Respond.js for IE8 support of HTML elements and media queries-->
      <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

   </head>

   <body>
      <div class="container">
        <div class="row">

        	   <h1>Novo contato</h1>
						 <ol class="breadcrumb">
							   <li><a href="/">Inicio</a></li>
								 <li class="active">Novo contato</li>
						 </ol>

						 <!-- Formulário de novo cadastro -->
						 <form action="agenda/salvar" name="form_add" method="post">

								<!-- Input text nome -->
								<div class="row">
									<div class="col-md-8">
										<label>Nome</label>
										<input type="text" name="nome" value="" class="form-control" />
									</div>
								</div><!-- Fim nome -->

								<!-- Input text email -->
								<div class="row">
									<div class="col-md-8">
										<label>E-mail</label>
										<input type="email" name="email" value="" class="form-control" />
									</div>
								</div><!-- Fim email -->

								<!-- Input text telefone -->
								<div class="row">
									<div class="col-md-8">
										<label>Telefone</label>
										<input type="text" name="telefone" value="" class="form-control" />
									</div>
								</div><!-- Fim email -->

                <!-- Select contato ativo ou inativo -->
                <div class="row">
                  <div class="col-md-2">
                    <label>Ativo</label>
                    <select name="ativo" class="form-control">
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                    </select>
                  </div>
                </div><!-- fim ativo / inativo -->

								<!-- Botão enviar -->
								<br/>
								<div class="row">
									<div class="col-md-2">
										<button type="submit" class="btn btn-primary">Cadastrar</button>
									</div>
								</div>

						</form><!-- Fim formulário -->

        </div><!-- /.row -->
      </div><!-- /.container -->

      <!-- Bootstrap core JavaScript -->
      <!-- Placed at the end of the document so the pages load faster -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   </body>
</html>
