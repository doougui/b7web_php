<?php 
	namespace Controllers;

	use \Core\Controller;
	
	class NotfoundController extends Controller {
		public function index() {
			$this -> loadTemplate('404');
		}
	}