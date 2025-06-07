 <?php
    
    $peso = $_GET["a"];
    $altura = $_GET["b"];

    $imc = $peso / ($altura * $altura);
    $imc = number_format($imc, 2, '.', '');
    echo "Seu IMC é: $imc <br>";