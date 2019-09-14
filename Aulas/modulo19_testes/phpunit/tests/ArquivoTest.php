<?php 
	# Error types: Error, Warning, Notice.
	
	use PHPUnit\Framework\TestCase;
	use PHPUnit\Framework\Error\Error;
	
	class ArquivoTest extends TestCase {
		# Se der erro vai retornar OK, se não der erro vai retornar FAILURE (pois espera um erro)
		// public function testFalhaNoInclude() {
		// 	$this -> expectException(Error::class);
		// 	include 'config.php';
		// }

		# Se der erro vai retornar FAILURE, se não der erro vai retornar OK (pois espera true)
		public function testInclude() {
			$this -> assertTrue(
				file_exists('config.php')
			);
		}
	}

