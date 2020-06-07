<?php

#O ponto em qualquer sistema operacional indica
#o diretório atual
$diretorioAtual = dir('.');

echo $diretorioAtual->path . "<br />";

while ($arquivo = $diretorioAtual->read()) {
    echo $arquivo . "<br />";
}