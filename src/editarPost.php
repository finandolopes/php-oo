<?php

    require 'exercicio_final.php';

    $dateZone = new DateTimeZone('America/Sao_Paulo');
    $date = new DateTime();
    $date->setTimezone($dateZone);
    $dateFormat = $date->format('d/m/y H:i:s');

    $editar = new Blog();

    echo $editar->editarPost('Primeiro Post Editado', $dateFormat, 6);

