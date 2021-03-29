<?php
    $id = 01;
    $uri = "./imagens/pizza.png";
    $name = "Marcelo Maia";
    $quantidade = 3;
    $produto = "Pizza";
    $forma_de_pagamento = "Cartão de Crédito";
    $concluido = true;

    $compras= array(
        "id" => $id,
        "imagem" => $uri,
        "nome" => $name,
        "hora" => time(),
        "produto" => "pizza",
        "quantidade" => $quantidade,
        "forma_de_pagamento" => $forma_de_pagamento,
        "concluido" => $concluido,
    );

    foreach($compras as $item){
        echo $item."<br/>";
    }
?>