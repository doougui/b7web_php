<?php 

class Language {

	private $l;
	private $ini;
	private $db;

	public function __construct() {
		$this -> l = "en-us";

		if (!empty($_SESSION['lang']) && file_exists('lang/'.$_SESSION['lang'].'.ini')) {
			$this -> l = $_SESSION['lang'];
		}

		$this -> ini = parse_ini_file('lang/'.$this -> l.".ini");

		global $pdo;
		$sql = "SELECT * FROM language WHERE lang = :lang";
		$sql = $pdo -> prepare($sql);
		$sql -> bindValue(":lang", $this -> l);
		$sql -> execute();

		if ($sql -> rowCount() > 0) {
			foreach ($sql -> fetchAll() as $item) {
				$this -> db[$item['name']] = $item['value'];
			}
		}
	}

	public function getLanguage() {
		return $this -> l;
	}

	public function get($word, $return = false) {
		$text = $word;

		if (isset($this -> ini[$word])) {
			$text = $this -> ini[$word];
		} 
		elseif ($this -> db[$word]) {
			$text = $this -> db[$word];
		}

		if ($return) {
			return $text;
		} else {
			echo $text;
		}
	}

}