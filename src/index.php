<?php

    require 'Produto.php';
    $produto = new Produto();

    switch ($_GET['operacao']){
        case 'list':

            echo '<h3> Produtos: </h3>';

            foreach ($produto->list() as $value){
                echo 'Id: ' . $value['id']. '<br> Descricões: ' . $value['descricao'] . '<hr>';
            }

            break;

        case 'insert':

            $status = $produto->insert('Produto teste 02');
            if(!$status){
                echo 'Não foi possível executar a operação!';
                return false;
            }

            echo 'Registro inserido com sucesso!';

            break;

        case 'update':

            $status = $produto->update('Produto teste 02 atualizado', 3);
            if(!$status){
                echo 'Não foi possível executar a operação!';
                return false;
            }

            echo 'Registro atualizado com sucesso!';

            break;

        case 'delete':

            $status = $produto->delete( 3);
            if(!$status){
                echo 'Não foi possível executar a operação!';
                return false;
            }

            echo 'Registro removido com sucesso!';

            break;
        default:
            //
            break;
    }