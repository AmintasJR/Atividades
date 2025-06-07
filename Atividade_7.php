<?php
    
    $salario_base = $_GET["a"];
    $percentual_aumento = $_GET["b"];

    $valor_do_aumento = $salario_base * ($percentual_aumento / 100);
    $novo_salario = $salario_base + $valor_do_aumento;

    echo "Salário base de R$ $salario_base com aumento de $percentual_aumento%, tendo o aumento de R$$valor_do_aumento gerando novo salário de: R$$novo_salario<br>";