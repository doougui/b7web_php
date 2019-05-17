<?php

// Interface
interface Animal {
	public function andar();
}

class Cachorro implements Animal {
	public function andar() {
		echo "Andando...";
	}
}

$cachorro = new Cachorro();
$cachorro -> andar();

echo "<br/>";

// Polimorfismo
class Veiculo {
	public function getNome() {
		echo "getNome da classe Veiculo";
	}

	public function testar() {
		echo "Testado.";
	}
}

class Carro extends Veiculo {
	public function getNome() { // getNome daqui substitui o da classe Veiculo
		$this -> testar(); // Porém o testar() ainda funciona, já que essa classe estende Veiculo
	}
}

$carro = new Carro();
$carro -> getNome();

// Namespace
?>