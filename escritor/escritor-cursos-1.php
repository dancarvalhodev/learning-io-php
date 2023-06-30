<?php

/*
 * r: leitura
 * x: escrita no inicio
 * a: escrita no final
 * r+/w+/a+: leitura e escrita
 * x/x+: leitura e escrita apenas para novos arquivos
 */

$arquivo = fopen('../cursos-php.txt', 'w');

$curso = 'Design Patterns PHP I';

fwrite($arquivo, $curso);

fclose($arquivo);