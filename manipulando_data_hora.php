<?php
    //$data = new DateTime();
    //echo $data->format('d-m-y H:i:s');

    /*

    -> P - Representação de período: vem antes de dia, mês, ano e semana
    Y - anos
    M - meses
    D - dias
    W - semanas
    -> T - Representação de tempo: vem antes de hora, minuto e segundo
    H - horas
    M - minutos
    S - segundos

     */

    $data = new DateTime();

    //$intervalo = new DateInterval('PT5M'); // Adiciona um período de 5 minutos
    //$data->add($intervalo);
    //$intervalo = new DateInterval('P5Y10M5DT10H50M10S');
    //$data->sub($intervalo);

    // Exercício Final
    $intervalo = new DateInterval('P5DT10H50M');
    $data->sub($intervalo);
    $data->format('d-m-y H:i:s');
    var_dump($data);