<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Cadastro</title>
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
<center><h1 class="titulo"><strong class="logoMenu">Editar <b style="color: #00C851;">Cadastro</b></strong></h1></center>
<br>
<?php
	include('conexao.php');

	if (isset($_GET['id_livro'])) {
		$sql = 'select * from tb_livros where id_livro='.$_GET['id_livro'];
		$res = $GLOBALS['con']->query($sql);
		$livro = $res->fetch_array();	
?>
<form method="post">
	<div class="form-group">
		<div class="row">
			<div class="col-2 offset-2">
				<input type="hidden" name="id" id="id" value="<?= $_GET['id_livro']?>">
				<label>Nome do livro:</label>
			</div>
			<div class="col-5">
				<input type="text" name="nome" id="nome" class="form-control" value="<?= $livro['nm_livro']?>">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-2 offset-2">
				<label>Ano do Livro:</label>
			</div>
			<div class="col-5">
				<input type="date" name="ano" id="ano" class="form-control" value="<?= $livro['dt_ano']?>">
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-2 offset-2">
				<label>Quantidade de Exemplares:</label>
			</div>
			<div class="col-5">
				<input type="number" name="exemplares" id="exemplares" class="form-control" value="<?= $livro['qt_exemplares']?>">
			</div>
		</div>
		<br>
		<center>
			<button type="submit" class="btn text-white" style="background: #00C851;">Salvar Alteração</button>
		</center>
	</div>
</form>
<br>
<?php
}
if(isset($_POST['id'])){
	$nome = $_POST['nome'];
	$ano = $_POST['ano'];
	$exemplares = $_POST['exemplares'];

	$sql = 'update tb_livros set nm_livro = "'.$nome.'", dt_ano = "'.$ano.'", qt_exemplares = '.$exemplares.' where id_livro = '.$_POST['id'];
	$res = $GLOBALS['con']->query($sql);
	
	if($res){
		echo '<center><h3 class="titulo">Registro foi atualizado!</h3><br>
			  <a href="http://localhost/listar.php" class="btn btn-danger text-white">Voltar para a Lista</a></center>';
	}else{
		echo '<center><h3 class="titulo">Erro ao atualizar. '.$GLOBALS['con']->error.'</h3></center>';
	}
}
?>
</body>
</html>