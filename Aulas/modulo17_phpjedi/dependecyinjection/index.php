<?php 
	interface videoServiceInterface {
		public function getEmbed();
	}

	class Youtube implements videoServiceInterface {
		private $url;

		public function __construct($url) {
			$this -> url = $url;
		}

		public function getEmbed() {
			return '<iframe>'.$this -> url.'</iframe>';
		}
	}

	class Vimeo implements videoServiceInterface {
		private $url;

		public function __construct($url) {
			$this -> url = $url;
		}

		public function getEmbed() {
			return '<video>'.$this -> url.'</video>';
		}
	}

	class Wistia implements videoServiceInterface {
		private $url;

		public function __construct($url) {
			$this -> url = $url;
		}

		public function getEmbed() {
			return '<coisa>'.$this -> url.'</coisa>';
		}
	}

	class Xyz implements videoServiceInterface {
		private $url;

		public function __construct($url) {
			$this -> url = $url;
		}

		public function getEmbed() {
			return '<xyz>'.$this -> url.'</xyz>';
		}
	}

	class Aula {
		private $video;

		public function __construct(videoServiceInterface $video) {
			$this -> video = $video;
		}

		public function getVideoHtml() {
			return $this -> video -> getEmbed();
		}
	}

	$aula = new Aula(new Xyz('123'));

	echo "HTML: ".$aula -> getVideoHtml();