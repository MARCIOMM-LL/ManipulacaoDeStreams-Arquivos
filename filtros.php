<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>

<?php

require_once "MeuFiltro.php";

$arquivoCursos = fopen('lista-cursos.txt', 'r');

stream_filter_register('alura.partes', MeuFiltro::class);

stream_filter_append($arquivoCursos, 'alura.partes');

echo "<pre>";

echo fread($arquivoCursos, filesize('lista-cursos.txt'));

?>

</body>
</html>