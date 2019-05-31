<?php 
	date_default_timezone_set('America/Sao_Paulo');

	class Pessoa {
		private $nome;
		private $idade;

		public function __construct($nome, $dt_nasc) {
			// setNome
			$this -> nome = $nome;

			// Data de nascimento formatada
			$dt_nasc = explode('/', $dt_nasc);
			list($dia, $mes, $ano) = $dt_nasc;
			$dt_nasc = $ano.'-'.$mes.'-'.$dia;

			$dt_nasc = new DateTime($dt_nasc);

			// Data atual
			$dt_atual = date('Y-m-d');
			$dt_atual = new DateTime($dt_atual);

			// Diferença
			$diferenca = $dt_nasc -> diff($dt_atual);

			// setIdade
			$this -> idade = $diferenca -> format('%y');
		}

		public function getNome() {
			return $this -> nome;
		}

		public function getIdade() {
			return $this -> idade;
		}
	}