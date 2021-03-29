<?php
    $id = 01;
    $uri = "./imagens/user.png";
    $name = "Marcelo Maia";
    $quantidade = 3;
    $produto = array("id" => "2341", "img_produto" => "./imagens/cocacola.png", "preco" => 5.21);

    $pedidos = array(
        "id" => $id,
        "imagem" => $uri,
        "nome" => $name,
        "hora" => time(),
        "produto" => $produto,
        "quantidade" => $quantidade
    );

    foreach($pedidos as $item){
        echo $item."<br/>";
    }
?>