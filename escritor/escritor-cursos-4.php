<?php

$curso = 'Design Patterns PHP II';

// file_put_contents: Adiciona uma string no arquivo
file_put_contents('../cursos-php.txt', $curso . PHP_EOL, FILE_APPEND);
