<?php

abstract class Animal {

	abstract protected function andar();

	private $nome;
	private $idade;
	private $peso;

	public function setNome($n) {
		$this -> nome = $n;
	}

	public function getNome() {
		return $this -> nome;
	}
}

class Cavalo extends Animal {
	private $quantidade_de_patas;
	private $tipo_de_pelo;

	public function andar() {
		// Fun��o de andar
	}
}

class Gato extends Animal{
	private $quantidade_de_patas;
	private $miado;

	public function andar() {
		// Fun��o de andar
	}
}

$gato = new Gato();
$gato -> nome = "Kito";

echo "O nome do meu gato �: ".$gato -> nome;

echo "<br/><br/>";

$cavalo = new Cavalo();
$cavalo -> setNome('P� de Pano');

echo "O nome do meu cavalo �: ".$cavalo -> getNome();
?>