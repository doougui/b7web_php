<?php 
	abstract class Video {
		abstract public function render();
	}

	abstract class AbstractFactory {
		abstract public function createPlayer($url);
	}

	// Fabricada para o player em Html
	class HtmlFactory extends AbstractFactory {
		public function createPlayer($url) {
			return new HtmlPlayer($url);
		}
	}

	class HtmlPlayer extends Video {
		private $url;

		public function __construct($url) {
			$this -> url = $url;
		}

		public function render() {
			echo "<video>".$this -> url."</video>";
		}
	}

	// Fabricada para o player em Flash
	class FlashFactory extends AbstractFactory {
		public function createPlayer($url) {
			return new FlashPlayer($url);
		}
	}

	class FlashPlayer extends Video {
		private $url;

		public function __construct($url) {
			$this -> url = $url;
		}

		public function render() {
			echo "<object>".$this -> url."</object>";
		}
	}

	// $fac = new FlashFactory();
	$fac = new HtmlFactory();
	$player = $fac -> createPlayer("123");
	$player -> render();