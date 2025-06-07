<?php
    
    $valor_original = $_GET["a"];
    $percentual_desconto = $_GET["b"];

    $resultado = $valor_original * ($percentual_desconto / 100);
    $valor_final = $valor_original - $resultado;

    echo "Valor original de $valor_original - $percentual_desconto%, gerando valor total de: $valor_final<br>";
    echo "Valor de desconto: $resultado<br>";