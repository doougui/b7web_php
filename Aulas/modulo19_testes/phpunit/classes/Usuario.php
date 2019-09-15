<?php 
	class Usuario {
		private $nome;
		private $sobrenome;

    public function setNome($nome) { $this -> nome = $nome; }
    public function setSobrenome($sobrenome) { $this -> sobrenome = $sobrenome; }
    public function getNomeCompleto() { return $this -> nome.' '.$this -> sobrenome; }
  }