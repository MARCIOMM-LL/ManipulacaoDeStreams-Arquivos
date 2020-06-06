<?php

class MeuFiltro extends \php_user_filter
{
    public $stream;

    public function onCreate()
    {
        #Stream temporário para escrever na memória e depois 
        #ser ignorado quando não for mais usado 
        $this->stream = fopen('php://temp', 'w+');
        return $this->stream !== false;
    }

    public function filter($in, $out, &$consumed, $closing)
    {
        #Variável que contém a saída dos dados que ainda se encontra vazia
        $saida = '';

        #Aqui estamos pegando cada linha de entrada do stream/fluxoDados
        while ($bucket = stream_bucket_make_writeable($in)) {
           $linhas = explode("\n", $bucket->data);

           #Aqui vamos exibir cada linha que contém a palavra parte no stream
           foreach ($linhas as $linha) {
               if(stripos($linha, 'parte') !== false){
                   $saida = $saida . $linha . "\n";
               }
           }
        }

        #Aqui é criado o stream de saída 
        $bucketSaida = stream_bucket_new($this->stream, $saida);
        #Aqui nessa função stream_bucket_append($out, $bucketSaida),
        #foi necessário atribuir uma variável $out que precisou de um 
        #dado que foi criado a partir de um outro stream do php
        stream_bucket_append($out, $bucketSaida);

        #Informando que correu tudo tudo bem e que o filtro pode continuar
        return PSFS_PASS_ON;
    }
}