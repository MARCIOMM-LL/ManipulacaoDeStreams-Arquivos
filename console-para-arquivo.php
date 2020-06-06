<?php

// $teclado = fopen('php://stdin', 'r');

#Aqui a constante STDIN está fazendo o mesmo que a variável $teclado
$novoCurso = fgets(STDIN);

file_put_contents('cursos-php.txt', "\n$novoCurso", FILE_APPEND);