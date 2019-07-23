<?php 
	// Pre-PHP7
	class Carro {
		public function getName() {
			return 'Carro 1.0';
		}
	}

	$carro = new Carro();
	echo $carro -> getName();

	// Pós-PHP7
	
	// Exemplo 1
	$carro = new class {
		public function getName() {
			return 'Carro 2.0';
		}
	};

	echo $carro -> getName();

	// Exemplo 2
	function criarCarro() {
		return new class {
			public function getName() {
				return 'Carro 3.0';
			}
		};
	}

	$carro = criarCarro();
	echo $carro -> getName();

	// Exemplo 3
	$a = new class {
		private $carro;

		public function setCarro($carro) {
			$this -> carro = $carro;
		}

		public function getName() {
			return $this -> carro -> getName();
		}
	};

	$a -> setCarro(new class {
		public function getName() {
			return 'Carro 4.0';
		}
	});

	echo $a -> getName();

	// Exemplo 4
	$config = new class {
		private $base = 'http://localhost/';

		public function getBaseURL() {
			return $this -> base;
		}
	}