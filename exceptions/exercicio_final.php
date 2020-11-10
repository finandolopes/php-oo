<?php

    function divisao(array $numeros){
        foreach ($numeros as $num){
            if($num == 0){
                throw new Exception("O número é igual a 0");
            }
        }
    }

    $numeros = [1,0];

    $status = false;

    try {
        $status = divisao($numeros);
    }catch (Exception $ex){
        echo $ex->getMessage();
        echo '<br>';
    } finally {
        echo "Status " .(int)$status; //Cast
        die();
    }

