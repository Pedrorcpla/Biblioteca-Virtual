<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Biblioteca Virtual</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
	.imagem{
		width: 82vw;
		opacity: 0;
		transform: translate3d(0, 250px, 0);
		transition: 1s;
	}
	.imagem-start{
		opacity: 1;
		transform: translate3d(0, 0, 0);
	}
	.veja{
		opacity: 0;
		position: absolute;
		margin-top: -2%;
		margin-left: -1.5%;
		background: #094b65;
		color: white;
		transform: translate3d(0, 250px, 0);
		transition: 1.5s;
		padding-left: 3%;
		padding-right: 3%;
	}
	.veja:hover{
		background: white;
		color: white#094b65;
	}
	.veja-start{
		opacity: 1;
		transform: translate3d(0, 0, 0);
	}
	p{
		font-size: 19px;
	}
	.logoMenu{
		font-weight: 700;
		text-decoration: none;
	}
</style>
<body class="bg-light">
<header>
	<a href="http://localhost/menu.php" class="logo">Biblioteca <b style="color: #00C851;">Virtual</b></a>
	<ul>
		<li><a href="http://localhost/menu.php">Menu</a></li>
		<li><a href="http://localhost/cadastrar.php">Cadastrar Livros</a></li>
		<li><a href="http://localhost/listar.php">Lista de Livros</a></li>
	</ul>
</header>
<div class="col-10 offset-1 bg-white">
	<br>
	<center>
	<h1 class="titulo">Bem-vindo à <strong class="logoMenu">Biblioteca <b style="color: #00C851;">Virtual</b></strong></h1>
	<br>
	<img src="img/Biblioteca Virtual.png" class="imagem">
	<br>
	<a href="#infos" class="veja btn"><i class="fas fa-chevron-down"></i></a>
	</center>
	<br><br>
	<div class="row">
		<div class="col-12" id="infos" align="center">
			<h1 class="titulo">Como funciona?</h1>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-10 offset-1">
			<p>Primeiro, faça o cadastro do livro na aba <a href="http://localhost/cadastrar.php">Cadastrar Livros</a>. Após confirmar o cadastro, o livro já estará disponível na <a href="http://localhost/listar.php">Lista de livros</a>. Se algum dado cadastrado estiver errado, basta excluir o item e cadastrar novamente.</p>
		</div>
	</div>
	<br>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		$('.imagem').addClass('imagem-start');
		$('.veja').addClass('veja-start');
	});
</script>
</body>
</html>