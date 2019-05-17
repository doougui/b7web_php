<?php

class Usuario {

	// Pode ser acessada por todo o código
	public function trocarSenha($senhaAtual, $novaSenha) {
		// Conectar ao banco de dados. (conectarAoBanco())
		// Verificar se a senha atual está correta. (Outra função, porém privada)
		// Trocar a senha (Aqui, pois este é o propósito desta função)
	}

	// Pode ser acessada pela classe
	private function conectarAoBanco() {

	}

	// Junta os que tem hierarquia
	protected function algumaCoisa() {

	}
}

class Cachorro {

	public static function latir() {
		echo "Au au"."<br/>";
	}

	private function algumaCoisa() {
		// Função auxiliar
	}
}

$laila = new Cachorro();
$laila -> latir();

$nick = new Cachorro();
$nick -> latir();

Cachorro::latir(); // Somente com função pública

class Post {
	private $titulo;
	private $data;
	private $corpo;
	private $comentarios;
	private $qtComentarios;

	// Construct
	public function __construct($t, $c) {
		$this -> setTitulo($t);
		$this -> setCorpo($c);
	}

	// Getter e Setter
	

	public function setTitulo($t) { // Setter é um intermediário para validações
		if (strlen($t) > 5 && is_string($t)) {
			$this -> titulo = $t;
		}
	}
	
	public function getTitulo() { // Precisa ter um Getter pois a variável é privada
		return $this -> titulo;
	}

	public function setCorpo($c) {
		$this -> corpo = $c;
	}

	public function getCorpo() {
		return $this -> corpo;
	}

	// Funções auxiliares
	public function addComentario($msg) {
		$this -> comentarios[] = $msg;
		$this -> contarComentarios();
	}

	public function getQuantosComentarios() {
		return $this -> qtComentarios;
	}

	private function contarComentarios() {
		$this -> qtComentarios = count($this -> comentarios);
	}
}

$post = new Post("Titulo original.<br/>", "Corpo original da postagem.<br/>");
echo "Titulo: ".$post -> getTitulo();
echo "Corpo: ".$post -> getCorpo();

$post -> setTitulo('Titulo da postagem.<br/>');
echo "Titulo: ".$post -> getTitulo();

$post -> addComentario("Teste");
$post -> addComentario("Teste 2");
$post -> addComentario("Teste 3");
$post -> addComentario("Teste 4");

echo "Quantidade de comentários: ".$post -> getQuantosComentarios();
?>