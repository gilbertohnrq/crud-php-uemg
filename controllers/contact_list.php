<!DOCTYPE html>
<html>
<head>
	<title>Agenda</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/14e3cc8fa2.js" crossorigin="anonymous"></script>

</head>
<body>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


	<div class="container" style="margin-top: 40px">
		<h3 style="padding-bottom: 40px">Agenda</h3>

		<table class="table">
			<thead>
				<tr>
				
					<th scope="col">Id</th>
					<th scope="col">Nome</th>
					<th scope="col">Email</th>
					<th scope="col">Telefone</th>
					<th scope="col">Data de Nascimento</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>
				<tr>
						<?php
					include('conexao.php');

					$sql = "select * from agenda;";
					$busca = mysqli_query($conexao,$sql);

					while ($array = mysqli_fetch_array($busca)) {
						$id = $array['id'];
						$nome = $array['nome'];
						$email = $array['email'];
						$telefone = $array['telefone'];
						$dataNascimento = $array['dataNascimento'];
					
					
					
					echo '<td>' . $id . '</td>';
					echo '<td>' . $nome . '</td>';
					echo '<td>' . $email . '</td>';
					echo '<td>' . $telefone . '</td>';
					echo '<td>' . $dataNascimento . '</td>';
					echo '<td> <a class="btn btn-warning btn-sm" href="contact_edit.php?id=' . $id .'" role="button"><i class="far fa-edit"></i> Editar</a>';
					echo ' <a class="btn btn-danger btn-sm" href="contact_delete.php?id=' . $id .'" role="button"><i class="far fa-trash-alt"></i> Excluir</a></td>';	

					echo '</tr>';
					
					} ?>
				</tr>
				
			</tbody>
		</table>

      <div style="text-align: right">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
      </div>


	</div>


</body>
</html>