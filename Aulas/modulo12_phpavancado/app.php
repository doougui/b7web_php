<?php
require "Sobre1.php";
require "Sobre2.php";

$sobre = new \aplicacao\v2\Sobre();

echo "Versão: ".$sobre -> getVersion();


?>