<?php 

class usuario {
	private $id;
	private $nome;
	private $email;
	private $nivel;

	public function __construct($id, $nome, $email, $nivel){
		$this->id = $id;
		$this->nome = $nome;
		$this->email = $email;
		$this->nivel = $nivel;
	}

	public function getId() { return $this->id; }
	public function getNome() { return $this->nome; }
	public function getNivel() { return $this->nivel; }
}
?>