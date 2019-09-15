<?php 
	use PHPUnit\Framework\TestCase;

	class UsuarioTest extends TestCase {
		public function testExpectNomeCompleto() {
			$this -> expectOutputString('Douglas Pinheiro Goulart');

			$usuario = new Usuario();
			$usuario -> setNome('Douglas');
			$usuario -> setSobrenome('Goulart');
			echo $usuario -> getNomeCompleto();
		}
	}