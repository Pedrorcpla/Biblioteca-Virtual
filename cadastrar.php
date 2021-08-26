<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar Livros</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
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
<center><h1 class="titulo"><strong class="logoMenu">Cadastro de <b style="color: #00C851;">Livros</b></strong></h1></center>
<br>
<form method="post">
	<div class="form-group">
		<div class="row">
			<div class="col-2 offset-2">
				<label>Nome do livro:</label>
			</div>
			<div class="col-5">
				<input type="text" name="nome" id="nome" class="form-control">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-2 offset-2">
				<label>Ano do Livro:</label>
			</div>
			<div class="col-5">
				<input type="number" name="ano" id="ano" class="form-control">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-2 offset-2">
				<label>Quantidade de Exemplares:</label>
			</div>
			<div class="col-5">
				<input type="number" name="exemplares" id="exemplares" class="form-control">
			</div>
		</div>
		<br>
		<center>
			<button type="submit" class="btn text-white" style="background: #00C851;">Cadastrar</button>
		</center>
	</div>
</form>
<?php
	include('conexao.php'); //arquivo de conexão
	if ($_POST) {
		date_default_timezone_set ('America/Sao_Paulo');
		$nome = $_POST['nome'];
		$ano = $_POST['ano'].'/01/01';
		$exemplares = $_POST['exemplares'];
		$hoje = date('Y/m/d');
		//preparar a cosulta sql adequada aos datatypes
		$sql = 'insert into tb_livros values (null,"'.$nome.'","'.$ano.'","'.$hoje.'",'.$exemplares.')'; //iserir dados seguindo o padrão sql
		$executa = $GLOBALS['con']->query($sql); //comando que envia a consulta sql para o mysql executar
		//utilizar variável
		if ($executa) {
			echo "Cadastrado com sucesso!";
		}else{
			echo "Erro ao cadastrar".$$GLOBALS['con']->error;
		}
	}
?>
</body>
</html>