<?php
require_once __DIR__ . './vendor/autoload.php';

require_once 'Clases/DescripcionDePaises.php';
require_once 'Clases/DetalleDePais.php';

$pais = new DetalleDePais("argentina");

echo $pais->MostrarTodo();

?>