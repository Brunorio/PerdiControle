<?php 
	if(!isset($_POST['id_usuario'])){
		header('location: https://www.dicio.com.br/trapaceiro/');
	}

	require __DIR__.'/../models/funcoes.php';

	$id_usuario = $_POST['id_usuario'];
	$comentario = $_POST['comentario'];
	$id_post = $_POST['id_post'];
	setComentario($id_post, $id_usuario, $comentario);

?>