<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Cadastro de Cliente</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php 
          include "conexao.php";
          
          $nome = $_POST['nome'];
          $telefone = $_POST['telefone'];
          $email = $_POST['email'];
          $cnpj_cpf = $_POST['cnpj_cpf'];
          $data_cnpj_nasc = $_POST['data_cnpj_nasc'];
          $representante = $_POST['representante'];

          $sql = "INSERT INTO `clientes` ( `nome`, `telefone`, `email`, `cnpj_cpf`, `data_cnpj_nasc`, `representante` ) VALUES ('$nome','$telefone','$email','$cnpj_cpf','$data_cnpj_nasc','$representante')";

          if (mysqli_query($conn, $sql)) {            
            mensagem("$nome cadastrado com sucesso!",'success');
          } else
            mensagem("$nome NÃO cadastrado!",'danger');
         ?> 
         <hr>
         <a href="index.php" class="btn btn-primary">Voltar</a>      
      </div>
    </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>