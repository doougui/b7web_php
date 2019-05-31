<?php 

	class Tempo {
		static public function diferenca($t) {
			$now = time();
			$time = strtotime($t);

			$dif = $now - $time;

			if ($dif > ((24 * 60) * 60)) {
				$dif = (($dif / 60) / 60);

				$t = floor($dif / 24);
				return $t.' dia'.(($t == 1) ? '' : 's');
			} else {
				$dif = (($dif / 60) / 60);

				if (floor($dif * 60 * 60) < 60) {
					$t = floor($dif * 60 * 60);
					return $t.' segundo'.(($t == 1) ? '' : 's');
				} elseif ($dif < 1) {
					$t = floor($dif * 60);
					return $t.' minuto'.(($t == 1) ? '' : 's');
				} else {
					$t = floor($dif);
					return $t.' hora'.(($t == 1) ? '' : 's');
				}
			}
		}
	}