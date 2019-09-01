<?php 
	interface Veiculo {
		public function transport(Carga $carga);
	}

	class Carga {
		private $peso;

		public function __construct($peso) {
			$this -> peso = $peso;
		}

		public function getPeso() {
			return $this -> peso;
		}
	}

	class Moto implements Veiculo {
		private $sucessor;

		public function setSucessor($sucessor) {
			$this -> sucessor = $sucessor;
		}

		public function transport(Carga $carga) {
			if ($carga -> getPeso() <= 500) {
				echo "LEVOU DE MOTO!";
			} else {
				$this -> sucessor -> transport($carga);
			}
		}
	}

	class Carro implements Veiculo {
		private $sucessor;

		public function setSucessor($sucessor) {
			$this -> sucessor = $sucessor;
		}

		public function transport(Carga $carga) {
			if ($carga -> getPeso() <= 5000) {
				echo "LEVOU DE CARRO!";
			} else {
				$this -> sucessor -> transport($carga);
			}
		}
	}

	class Caminhao implements Veiculo {
		private $sucessor;

		public function setSucessor($sucessor) {
			$this -> sucessor = $sucessor;
		}

		public function transport(Carga $carga) {
			if ($carga -> getPeso() <= 30000) {
				echo "LEVOU DE CAMINHÃO!";
			} else {
				echo "NÃO FOI POSSÍVEL LEVAR ESTA CARGA";
			}
		}
	}

