<?php

// $cursos = file_get_contents('lista-cursos.txt');
// 
// echo "<pre>";
// echo "\n" . $cursos;

echo "<pre>";

echo file_get_contents('https://swapi.dev/api/films/4/');

// $arquivo = fopen('lista-cursos.txt', 'r');

// $tamanhoDoArquivo = filesize('lista-cursos.txt');

// $cursos = fread($arquivo, $tamanhoDoArquivo);

// echo "$cursos <br />";

//Dica a memória padrão do php é de 128MB por isso, se 
// estivermos a trabalhar com arquivos grandes a 
// melhor abordagem a ser usada é a do loop while
// while (!feof($arquivo)) {
//     $curso = fgets($arquivo);
//     echo "$cursos <br />";
// }

// fclose($arquivo);