<?php

   $restaurante = "Chefe Cruz";
   $partida = array(207, 175);
   $destino = array(253, 144);
   $preco_inicial = 8.0;
   $img_veiculo = 
   $estado = "aceito";

    $tempo_de_entrega = array(
        "restaurante" => $restaurante,
        "partida" => $partida,
        "destino" => $destino,
        "preco_inicial" => $preco_inicial,
        "estado" => $estado,

    );

    foreach($tempo_de_entrega as $item){
        echo $item."<br/>";
    }
?>