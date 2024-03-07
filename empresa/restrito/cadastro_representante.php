<?php  include "../validar.php";  ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Cadastro de Representante</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Cadastro de Representante</h1>
          <form action="cadastro_representante_script.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control" name="nome" required>                
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email">                
            </div>
            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" name="cep">                
            </div>
             <div class="form-group">
                <label for="lagradouro">Lagradouro</label>
                <input type="text" class="form-control" name="lagradouro">                
            </div>
            <div class="form-group">
                <label for="numero">Número</label>
                <input type="text" class="form-control" name="numero">
            </div>
            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" name="bairro">
            </div>
            <div class="form-group">
                <label for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade">
            </div>
            <div class="form-group">
                <label for="uf">UF</label>
                <input type="text" class="form-control" name="uf">
            </div>                  
            <div class="form-group">                
                <input type="submit" class="btn btn-success">                
            </div>
          </form>
          <a href="index.php" class="btn btn-info">Voltar para o início</a>
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