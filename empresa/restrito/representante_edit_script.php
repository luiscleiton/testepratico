<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Alteração de Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <?php 
            include "conexao.php";
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $cep = $_POST['cep'];
            $lagradouro = $_POST['lagradouro'];
            $numero = $_POST['numero'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $uf = $_POST['uf'];
          
            $sql = "UPDATE  `representantes`  set `nome` = '$nome', `email` = '$email', `cep` = '$cep', `lagradouro` = '$lagradouro', `numero` = '$numero', `bairro` = '$bairro', `cidade` = '$cidade', `uf` = '$uf' WHERE id_representante = $id";
            
            if ( mysqli_query($conn, $sql) ) {
                mensagem("$nome alterado com sucesso!",'success');
            } else
                mensagem("$nome NÃO alterado!",'danger');
           ?>
           <hr>
           <a href="listar_representante.php" class="btn btn-primary">Voltar</a>
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