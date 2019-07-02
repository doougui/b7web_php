<?php 
	$xml = simplexml_load_file('ondas.xml');

	echo "<pre>";
	echo "Cidade: ".$xml -> nome.'<br>';
	echo "Manhã: ".$xml -> manha -> vento.'<br>';
	echo "Tarde: ".$xml -> tarde -> vento.'<br>';
	echo "Noite: ".$xml -> noite -> vento.'<br>';
	echo "</pre>";

	function array_to_xml($data, &$xml_data) {
		foreach ($data as $key => $value) {
			if (is_array($value)) {
				if (is_numeric($key)) {
					$key = 'item'.$key;
				}

				$subnode = $xml_data -> addChild($key);
				array_to_xml($value, $subnode);
			} else {
				if (is_numeric($key)) {
					$key = 'item'.$key;
				}
				
				$xml_data -> addChild($key, htmlspecialchars($value));
			}
		}
	}

	$data = array(
		'nome' => 'Douglas',
		'sobrenome' => 'Pinheiro Goulart',
		'idade' => 16,
		'caracteristicas' => array(
			'legal',
			'fiel',
			'estudioso'
		),
	);

	$xml_data = new SimpleXMLElement('<data/>');

	array_to_xml($data, $xml_data);

	$result = $xml_data -> asXML();
	echo $result;