<?php  include "../validar.php";  ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Empresa</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="jumbotron">
            <h1 class="display-4">Administrativo</h1>
            <p class="lead">Um ambiente administrativo para cadastro de Representantes Comerciais e Clientes.</p>
            <hr class="my-4">
            <p>Selecione a função desejada:</p>
            <a class="btn btn-primary btn-lg" href="cadastro_representante.php" role="button">Cadastro Representantes</a>
            <a class="btn btn-primary btn-lg" href="listar_representante.php" role="button">Listar Representantes</a>
            <a class="btn btn-primary btn-lg" href="cadastro_cliente.php" role="button">Cadastro Clientes</a>
            <a class="btn btn-primary btn-lg" href="listar_cliente.php" role="button">Listar Clientes</a>
            <a class="btn btn-danger btn-lg" href="../logout.php" role="button">Sair</a>
          </div>        
      </div>
    </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>