<?php

/*
 * r: leitura
 * x: escrita no inicio
 * a: escrita no final
 * r+/w+/a+: leitura e escrita
 * x/x+: leitura e escrita apenas para novos arquivos
 */

$arquivo = fopen('../cursos-php.txt', 'a');

$curso = PHP_EOL . 'Design Patterns PHP II';

fwrite($arquivo, $curso);

fclose($arquivo);