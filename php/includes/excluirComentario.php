<?php 
	
	
	$comentario = $_GET['comentario'];
	$postagem = $_GET['postagem'];
	require __DIR__.'/../models/funcoes.php';
	excluirComentario($comentario, $postagem);


?>