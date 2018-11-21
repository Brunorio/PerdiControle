<?php 
	require __DIR__.'/../models/funcoes.php';
	$data = getPostagens();
	$postagens = $data[0];  $topicos = $data[1];
	session_start();
	$_SESSION['usuario'] = new Usuario(2, 'Bruno Santos', 'bruh_santos@live.com', 1);

?>