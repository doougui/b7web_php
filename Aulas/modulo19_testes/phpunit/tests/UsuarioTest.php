<?php 
	use PHPUnit\Framework\TestCase;

	class UsuarioTest extends TestCase {
		public function testExpectNomeCompleto() {
			$this -> expectOutputString('Douglas Goulart');

			$usuario = new Usuario();
			$usuario -> setNome('Douglas');
			$usuario -> setSobrenome('Goulart');
			echo $usuario -> getNomeCompleto();
		}

		public function testIdade() {
			// $usuario = new Usuario();
			// $usuario -> setIdade(90);

			// $this -> assertEquals(
			// 	90,
			// 	$usuario -> getIdade()
			// );
			
			$this -> markTestIncomplete('Falta implementar o set e get de idade');
		}

		public function testIdadeString() {
			$usuario = new Usuario();
			$usuario -> setIdade(90);

			$this -> assertEquals(
				'90 anos',
				$usuario -> getIdade(true)
			);

			// $this -> markTestIncomplete('Falta criar o método na classe');
		}
	}