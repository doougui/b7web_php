<?php 
	interface OutputInterface {
		public function load($data);
	}

	class JsonOutput implements OutputInterface {
		public function load($data) {
			return json_encode($data);
		}
	}

	class ArrayOutput implements OutputInterface {
		public function load($data) {
			return $data;
		}
	}

	class Produtos {
		private $arr;
		private $output;

		public function getLista() {
			// SQL requisition
			$this -> arr = array(
				array('id' => 1, 'nome' => 'Douglas'), 
				array('id' => 2, 'nome' => 'Ricardo')
			);
		}

		public function setOutput(OutputInterface $outputType) {
			$this -> output = $outputType;
		}

		public function getOutput() {
			return $this -> output -> load($this -> arr);
		}
	}