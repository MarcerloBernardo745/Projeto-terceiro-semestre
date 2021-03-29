<?php

    $id = 01;
    $uri = "./imagens/banner.png";
    $name = "Natal Restaurante Marques";
    $produtos = array(array("id" => "6342", "nome" => "coca cola", "uri" => "./imagens/cocacola.png", "preco" => 3,75), array("id" => 2311, "nome" => "pizza", "uri" => "./imagens/pizza.png","preco" => 12,50));


    $pedidos = array(
        "id" => $id,
        "imagem" => $uri,
        "nome" => $name,
        "hora" => time(),
        "produtos" => $produto,
        "quantidade" => $quantidade
    );

    foreach($pedidos as $item){
        echo $item."<br/>";
    }
?>