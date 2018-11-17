<?php 
	
	function getPostagens(){
		include ('conexao.php');
		include __DIR__.'/../datastructures/postagem.php';
		include __DIR__.'/../datastructures/usuario.php';
		include __DIR__.'/../datastructures/topico.php';

		$sql = 'SELECT postagem.id, postagem.conteudo, postagem.data_publicacao, postagem.nome, postagem.id_usuario, postagem.id_topico, postagem.ativo, topico.nome as nome_topico, usuario.nome as nome_usuario, usuario.email, usuario.nivel FROM postagem INNER JOIN usuario ON usuario.id = postagem.id_usuario INNER JOIN topico ON topico.id = postagem.id_topico  WHERE postagem.avaliado = TRUE';
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$postagens = [];
		$topicos = [];

		$topicos[0] = [];
		$topicos[1] = [];
		$topicos[2] = [];
		$topicos[3] = [];
		$topicos[4] = [];
		$topicos[5] = [];
		$cont = 0;
		while ($post = $stmt->fetch()) {
			
			$usuario = new Usuario( $post['id_usuario'], 
									$post['nome_usuario'], 
									$post['email'], 
									$post['nivel']);

			$topico = new Topico( $post['id_topico'], 
								  $post['nome_topico']);			

			$postagem = new Postagem( $post['id'], 
										$post['nome'],
										 $post['conteudo'], 
										 $post['data_publicacao'],
										 $usuario, 
										 $topico, 
										 $post['ativo']);

			$postagens[] = $postagem;			
			$topicos[$topico->getId() - 1][] = $cont++;
		}
		
		return array($postagens, $topicos);
	
	}

?>