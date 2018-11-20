<?php 

class Comentario {
	private $id;
	private $usuario;
	private $comentario;

	public function __construct($id, $usuario, $comentario){
		$this->id = $id;
		$this->usuario = $usuario;
		$this->comentario = $comentario;
	}
	public function getId() { return $this->id; }
	public function getUsuario() { return $this->usuario; }
	public function getComentario() { return $this->comentario; }
}

?>