<?php

$arquivoCursos = new SplFileObject('cursos.csv');

while (!$arquivoCursos->eof()) {
    $linha = $arquivoCursos->fgetcsv(';');

    echo "<pre>";

    #A função utf8_encode($linha[0]) aplicado o unicode utf-8 nesse caso
    echo utf8_encode($linha[0]); 

    $date = new DateTime();
    $date->setTimestamp($arquivoCursos->getCTime());

    echo $date->format('d/m/Y');
}