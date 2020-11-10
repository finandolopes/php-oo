<?php

    require 'exercicio_final.php';

    $incluir = new Blog();

    $dateZone = new DateTimeZone('America/Sao_Paulo');
    $date = new DateTime();
    $date->setTimezone($dateZone);
    $dateFormat = $date->format('d/m/y H:i:s');
    $incluir->incluirPost('Alex','Primeiro post', $dateFormat);