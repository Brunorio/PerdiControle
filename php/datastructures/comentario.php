<?php 

class Comentario {
	private $id;
	private $usuario;
	private $postagem;
	private $comentario;

	public __constructor($id, $usuario, $postagem, $comentario){
		$this->id = $id;
		$this->usuario = $usuario;
		$this->postagem = $postagem;
		$this->comentario = $comentario;
	}
}

?>