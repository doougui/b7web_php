<?php

class Usuario {

	// Pode ser acessada por todo o c�digo
	public function trocarSenha($senhaAtual, $novaSenha) {
		// Conectar ao banco de dados. (conectarAoBanco())
		// Verificar se a senha atual est� correta. (Outra fun��o, por�m privada)
		// Trocar a senha (Aqui, pois este � o prop�sito desta fun��o)
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
		// Fun��o auxiliar
	}
}

$laila = new Cachorro();
$laila -> latir();

$nick = new Cachorro();
$nick -> latir();

Cachorro::latir(); // Somente com fun��o p�blica

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
	

	public function setTitulo($t) { // Setter � um intermedi�rio para valida��es
		if (strlen($t) > 5 && is_string($t)) {
			$this -> titulo = $t;
		}
	}
	
	public function getTitulo() { // Precisa ter um Getter pois a vari�vel � privada
		return $this -> titulo;
	}

	public function setCorpo($c) {
		$this -> corpo = $c;
	}

	public function getCorpo() {
		return $this -> corpo;
	}

	// Fun��es auxiliares
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

echo "Quantidade de coment�rios: ".$post -> getQuantosComentarios();
?>