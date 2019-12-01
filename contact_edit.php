<?php
include('conexao.php');

$id = $_GET['id'];

?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Formulário de Cadastro de Contatos</title>  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>
  <body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style type="text/css">
      #tamanhoContainer {
        width: 500px;
      }

      #botao {
        background-color: #FEC68D;
        color: #ffffff
      }

    </style>

    <div class="container" id="tamanhoContainer" style="margin-top: 40px">

    <h4>Formulário de Cadastro </h4>

    <?php
    $sql = "select * from agenda where id=$id";
    $busca = mysqli_query($conexao, $sql);
    while ($array = mysqli_fetch_array($busca)){
    	$id = $array['id'];
    	$nome = $array['nome'];
      $email = $array['email'];
    	$telefone = $array['telefone'];
      $dataNascimento = $array['dataNascimento'];
    }
    ?>

      <form action="contact_update.php" method="post" style="margin-top: 20px">
      	<input type="text" class="form-control" id="modelo" autocomplete="off" name="id" value="<?php echo $id ?>" style="display: none;">

        <div class="form-group">
          <label>Nome</label>
          <input type="text" class="form-control" id="nome" autocomplete="off" name="nome" value="<?php echo $nome ?>">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="text" class="form-control" id="email" autocomplete="off" name="email" value="<?php echo $email ?>">
        </div>
        <div class="form-group">
          <label>Telefone</label>
          <input type="tel" class="form-control" id="telefone" name="telefone" value="<?php echo $telefone ?>" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Data de Nascimento</label>
          <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" value="<?php echo $dataNascimento ?>" autocomplete="off">
        </div>

      <div style="text-align: right">
        <button type="submit" id="botao" class="btn btn-primary botao">Atualizar</button>
      </div>
    </form>
    </div>


  </body>
</html>
