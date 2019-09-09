<?php 
	use PHPUnit\Framework\TestCase;

	class CalculadoraTest extends TestCase {
		public function testSoma() {
			$calc = new Calculadora();
			// $proc = ); // Também pode ser criado variável, mas é desnecessário.

			$this -> assertEquals(
				2, 
				$calc -> soma(1, 1)
			);
		}

		public function testSoma2() {
			$calc = new Calculadora();
			// $proc = ); // Também pode ser criado variável, mas é desnecessário.

			$this -> assertEquals(
				-5, 
				$calc -> soma(-10, 5)
			);
		}

		public function testSoma3() {
			$calc = new Calculadora();
			// $proc = ); // Também pode ser criado variável, mas é desnecessário.

			$this -> assertEquals(
				59, 
				$calc -> soma(50, 9)
			);
		}
	}