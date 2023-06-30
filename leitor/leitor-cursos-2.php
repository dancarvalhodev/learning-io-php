<?php

$arquivo = fopen('../lista-cursos.txt', 'r');

// fread: Lê o arquivo completo
// filesize: Tamanho do arquivo
$tamanhoDoArquivo = filesize('../lista-cursos.txt');
$cursos = fread($arquivo, $tamanhoDoArquivo);

echo $cursos;

fclose($arquivo);