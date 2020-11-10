<?php

    require 'exercicio_final.php';

    $listar = new Blog();
    $arrayListar = $listar->listarPost();

    foreach ($arrayListar as $list)
    {
        echo
          '<br>'.
          'Id: '. $list['id']. '<br>'
        . 'Autor: '. $list['autor'] . '<br>'
        . 'Conteúdo: '. $list['conteudo'] . '<br>'
        . 'Data da Criação: '. $list['datacriacao'] . '<br>'
        . 'Data da Útilma Modificação: '. $list['dataatualizacao']
        . '<br>';
    }

