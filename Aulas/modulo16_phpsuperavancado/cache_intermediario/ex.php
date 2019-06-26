<?php 
	class Cache {
		private $cache;

		public function setVar($nome, $valor, $file) {
			$this -> readCache($file);
			$this -> cache -> $nome = $valor;
			$this -> saveCache($file);
		}

		public function getVar($nome, $file) {
			if (file_exists($file)) {
				$this -> readCache($file);
				return $this -> cache -> $nome;
			}
		}

		private function readCache($file) {
			$this -> cache = new stdClass();
			if (file_exists($file)) {
				$this -> cache = json_decode(file_get_contents($file));
			}
		}

		private function saveCache($file) {
			file_put_contents($file, json_encode($this -> cache));
		}
	}

	$cache = new Cache();
	$file = 'ex.cache';

	if (file_exists($file)) {
		echo $cache -> getVar('html', $file);
	} else {
		ob_start();
		require 'pagina.php';
		$html = ob_get_contents();
		ob_end_clean();

		$cache -> setVar('html', $html, $file);

		echo $cache -> getVar('html', $file);
	}

?>