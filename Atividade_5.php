<?php
   
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $n3 = $_GET["c"];

    $resultado_soma = $n1 + $n2 + $n3;
    $resultado_media = $resultado_soma / 3;
    $resultado_media = number_format($resultado_media, 2, '.', '');

    echo "O resultado da soma de A = $n1, B = $n2 e C = $n3 é: $resultado_soma <br>";
    echo "A média é: $resultado_soma / 3 = $resultado_media <br>";
    echo "A média final do aluno é: $resultado_media <br>";