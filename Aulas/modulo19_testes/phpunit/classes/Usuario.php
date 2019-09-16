<?php 
	class Usuario {
		private $nome;
		private $sobrenome;
		private $idade;

    public function setNome($nome) { $this -> nome = $nome; }
    public function setSobrenome($sobrenome) { $this -> sobrenome = $sobrenome; }
    public function setIdade($idade) { $this -> idade = $idade; } 
    public function getNomeCompleto() { return $this -> nome.' '.$this -> sobrenome; }

    public function getIdade($str = false) { 
    	if ($str === true) {
    		return $this -> idade.' anos';
    	} else {
    		return $this -> idade; 
    	}
    }
  }