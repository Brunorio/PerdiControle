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

	function getComentarioByPostagem($idPostagem){
		include ('conexao.php');

		include __DIR__.'/../datastructures/comentario.php';
		$sql = 'SELECT comentario.id, comentario.comentario, comentario.id_usuario, usuario.nome as nome_usuario, usuario.email, usuario.nivel FROM comentario INNER JOIN usuario ON comentario.id_usuario = usuario.id WHERE comentario.ativo = TRUE AND comentario.id_postagem = ?';
		$stmt = $conn->prepare($sql);
		$stmt->execute(array($idPostagem));
		$comentarios = [];

		while($comentario = $stmt->fetch()){
			$usuario = new Usuario( $comentario['id_usuario'],
									$comentario['nome_usuario'],
									$comentario['email'],
									$comentario['nivel']);

			$comentarios[] = new Comentario( $comentario['id'],
											$usuario,
											$comentario['comentario']
											);
		}

		$postagem = getPostagemById($idPostagem);
		if(count($comentarios) == 0){			
			if($postagem == null){
				header('location: https://www.dicio.com.br/trapaceiro/');
			}
		}
		return array($comentarios, $postagem);
	}

	function getPostagemById($id){
		include ('conexao.php');
		include __DIR__.'/../datastructures/postagem.php';		
		include __DIR__.'/../datastructures/topico.php';

		$sql = 'SELECT postagem.id, postagem.conteudo, postagem.data_publicacao, postagem.nome, postagem.id_usuario, postagem.id_topico, postagem.ativo, topico.nome as nome_topico, usuario.nome as nome_usuario, usuario.email, usuario.nivel FROM postagem INNER JOIN usuario ON usuario.id = postagem.id_usuario INNER JOIN topico ON topico.id = postagem.id_topico  WHERE postagem.avaliado = TRUE AND postagem.id = ?';
		$stmt = $conn->prepare($sql);
		$stmt->execute(array($id));
		$post = $stmt->fetch();

		if($post == null) return false;
		else {
			$usuario = new Usuario( $post['id_usuario'], 
									$post['nome_usuario'], 
									$post['email'], 
									$post['nivel']);

			$topico = new Topico( $post['id_topico'], 
								  $post['nome_topico']);			

			return new Postagem( $post['id'], 
										$post['nome'],
										 $post['conteudo'], 
										 $post['data_publicacao'],
										 $usuario, 
										 $topico, 
										 $post['ativo']);
		}
	}

	function setComentario($id_post, $id_usuario, $comentario){
		include ('conexao.php');
		$sql = 'INSERT INTO comentario VALUES(null, ?, ?, ?, 1)';
		$stmt = $conn->prepare($sql);
		$stmt->execute(array($id_usuario, $id_post, $comentario));
		
		header('location: http://localhost/PerdiControle/php/includes/postagem.php?postagem='.$id_post);
	}

?>