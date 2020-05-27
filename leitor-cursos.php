<?php

$cursos = file_get_contents('lista-cursos.txt');

echo "$cursos <br />";

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