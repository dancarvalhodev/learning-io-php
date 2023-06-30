<?php

$cursos = fopen('zip://../arquivo.zip#cursos-php.txt', 'r');
stream_copy_to_stream($cursos, STDOUT);