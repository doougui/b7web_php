<?php
	class homeController extends controller {
		public function index() {
			$data = array();

			$modulos = new Modulos();
			$data['modulos'] = $modulos -> getList();

			$this -> loadTemplate('home', $data);
		}

		public function pegar_aulas() {
			if (isset($_POST['modulo'])) {
				$id_modulo = $_POST['modulo'];
				$aulas = new Aulas();

				$materias = array();

				$dados = $aulas -> getAulas($id_modulo);

				foreach ($dados as $dado) {
					$materia = array(
						'id' => $dado['id'],
						'id_modulo' => utf8_encode($dado['id_modulo']),
						'titulo' => utf8_encode($dado['titulo']),
					);

					array_push($materias, $materia);
				}

				echo json_encode($materias);
				exit;
			}
		}
	}