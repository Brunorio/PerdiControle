<?php 
	
	if(!isset($_POST['id_usuario'])){
		header('location: https://www.dicio.com.br/trapaceiro/');
	}
	$postagem = $_GET['postagem'];
	require __DIR__.'/../models/funcoes.php';
	fecharPostagem($postagem);


?>