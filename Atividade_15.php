<?php

    $preco_base = $_GET["a"];
    $taxa_imposto = $_GET["b"];

    $valor_imposto = $preco_base * ($taxa_imposto / 100);
    $preco_final = $preco_base + $valor_imposto;

    echo "Preço base: R$$preco_base <br>";
    echo "Taxa de imposto: $taxa_imposto% <br>";
    echo "Valor do imposto: R$$valor_imposto <br>";
    echo "Preço final com imposto: R$$preco_final <br>";
 