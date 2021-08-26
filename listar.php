<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Livros</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body class="bg-light">
<header>
	<a href="http://localhost/menu.php" class="logo">Biblioteca <b style="color: #00C851;">Virtual</b></a>
	<ul>
		<li><a href="http://localhost/menu.php">Menu</a></li>
		<li><a href="http://localhost/cadastrar.php">Cadastrar Livros</a></li>
		<li><a href="http://localhost/listar.php">Lista de Livros</a></li>
	</ul>
</header>
<div class="col-10 offset-1 bg-white corpo">
<br>
<center><h1 class="titulo"><strong class="logoMenu">Lista de <b style="color: #00C851;">Livros</b></strong></h1></center>
<br>
<div class="col-10 offset-1">
	<table class="table table-striped">
		<thead>
			<tr>
				<td>Id</td>
				<td>Nome</td>
				<td>Ano</td>
				<td>Cadastro</td>
				<td>Exemplares</td>
				<td>Controles</td>
			</tr>
		</thead>
		<tbody>
			<?php
				date_default_timezone_set ('America/Sao_Paulo');
				include('conexao.php');
				$sql = 'select * from tb_livros order by nm_livro asc';
				$executa = $GLOBALS['con'] -> query($sql);//sempre utilizar isso para enviar um comando para o mysql
				//para acessar todos os cadastros, criaremos um laço de repetição
				while ($livro = $executa->fetch_array()) {//convertemos a linha em array
					//acessar dados do livro e associar o nome da coluna da tabela
					echo '<tr>
						  <td>'.$livro['id_livro'].'</td>';
					echo '<td>'.$livro['nm_livro'].'</td>';
					echo '<td>'.$livro['dt_ano'].'</td>';
					echo '<td>'.date('Y',strtotime($livro['dt_cadastro'])).'</td>';
					echo '<td>'.$livro['qt_exemplares'].'</td>';
					echo '<td> 
							<a href="excluir.php?id_livro='.$livro['id_livro'].'" class="btn btn-danger">Excluir</a>
						  </td>
						  <td> 
							<a href="editar.php?id_livro='.$livro['id_livro'].'"  style="background: #00C851;" class="btn text-white">Editar</a>
						  </td>
						  </tr>';
				}
			?>
		</tbody>
	</table>
</div>
</div>
</body>
</html>
