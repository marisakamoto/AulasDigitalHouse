<?php
    $nome = 'Mariana';

    $data = '21/07/1994';
    $separado[] = explode('/', $data);

    echo '<pre>';
    var_dump($separado);
    $nomes=[
        'Joaquina',
        'Mariana',
        'Juliana',
        'Mario'
    ];
    $listaNomes = implode(' - ', $nomes);
    echo $listaNomes;
    $texto = 'Java é a melhor linguagem do mundo';
   
    echo '<br>'. str_replace("Java","PHP", $texto);
?>