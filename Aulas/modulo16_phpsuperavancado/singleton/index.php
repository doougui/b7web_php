<?php 
	class Pessoa {
		private $nome;
		private $idade;

		public static function getInstance() {
			static $instance = NULL;

			if ($instance === NULL) {
				$instance = new Pessoa();
			}

			return $instance;
		}

		private function __construct() {

		}

		public function setNome($n) {
			$this -> nome = $n;
		}

		public function getNome() {
			return $this -> nome;
		}

		public function setIdade($i) {
			$this -> idade = $i;
		}

		public function getIdade() {
			return $this -> idade;
		}
	}

	$cara = Pessoa::getInstance();
	$cara -> setNome('Douglas');

	$cara2 = Pessoa::getInstance();
	$cara2 -> setIdade(90);

	echo "A idade é: ".$cara -> getIdade();