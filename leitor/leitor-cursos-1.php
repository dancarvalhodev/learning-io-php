<?php

// fopen: Abre o arquivo
$arquivo = fopen('../lista-cursos.txt', 'r');

// feof: Fim do arquivo
while (!feof($arquivo)){
    // fgets: Ler uma linha e posiciona o curso no final da linha
    $curso = fgets($arquivo);

    echo $curso;
}

// fclose: Fecha o arquivo
fclose($arquivo);