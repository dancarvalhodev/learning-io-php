<?php

require 'MeuFiltroEncoding.php';

$listaCursos = fopen('../cursos.csv', 'r');

stream_filter_register('alura.csv', MeuFiltroEncoding::class);
stream_filter_append($listaCursos, 'alura.csv');

echo fread($listaCursos, filesize('../cursos.csv'));