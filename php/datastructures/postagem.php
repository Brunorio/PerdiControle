<?php 

class Postagem {
	 public $id;
	 public $nome;
	 public $conteudo;
	 public $data;
	 public $usuario;
	 public $topico;
	 public $ativo;

	public function __construct($id, $nome, $conteudo, $data, $usuario, $topico, $ativo){
		$this->id = $id;
		$this->nome = $nome;
		$this->conteudo = $conteudo;
		$this->data = $data;
		$this->usuario = $usuario;
		$this->topico = $topico;
		$this->ativo = $ativo;
	}

	public function getTopico() { return $this->topico; }
	public function getConteudo() { return $this->conteudo; }
	public function getId() { return $this->id; }
	public function getAtivo() { return $this->ativo; }
	public function getNome() { return $this->nome; }
	public function getData() { 
		return date('d/m/Y H\hi', strtotime($this->data));
	}
	public function getUsuario() { return $this->usuario; }

}

?>