<?php

$curso = "\n" . 'PHP e MySQL: Introdução a uma web';

// A flag/constante FILE_APPEND fala para não sobrescrever mas sim para acrescentar
file_put_contents('cursos-php.txt', $curso, FILE_APPEND);

//Diferentes formas para inserir conteúdo
// $arquivo = fopen('cursos-php.txt', 'a');

// $curso = "\n" . 'PHP e MySQL: Introdução a uma webapp';

// fwrite($arquivo, $curso);

// fclose($arquivo);