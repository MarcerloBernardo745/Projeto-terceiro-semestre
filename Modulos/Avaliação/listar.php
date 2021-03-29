<?php
    $id = 01;
    $uri = "./imagens/user.png";
    $name = "Marcelo Maia";
    $nota = 5;
    $texto = "Um ótimo lugar adorei o atendimento";

    $avaliacao = array(
        "id" => $id,
        "imagem" => $uri,
        "Nome" => $name,
        "nota" => $nota,
        "texto" => $texto,
    );

    foreach($avaliacao as $item){
        echo $item."<br />";
    }
?>