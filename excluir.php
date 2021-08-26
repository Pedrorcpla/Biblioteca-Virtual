<?php
	include('conexao.php');
	if(isset($_GET['id_livro'])){
		$sql = 'delete from tb_livros where id_livro = '.$_GET['id_livro'];
		$executa = $GLOBALS['con'] -> query($sql);
		if($executa){
			echo '<script>
					alert("Livro Excluído!");
					window.location = "listar.php";
				  </script>';
		}else{
			echo 'Erro ao excluir livro: '.$GLOBALS['con'] -> error;
		}
	}
?>