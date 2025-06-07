<?php
    $nome = $_GET["a"];
    $sobrenome = $_GET["b"];
    $idade = $_GET["c"];
    $cidade = $_GET["d"];

    $nomecompleto = $nome . " " . $sobrenome;
    echo "Olá, meu nome é $nomecompleto, tenho $idade anos e moro em $cidade. <br>";