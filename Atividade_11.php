 <?php
    
    $preco_produto1 = $_GET["a"];
    $quantidade_produto1 = $_GET["b"]; 
    $preco_produto2 = $_GET["c"];
    $quantidade_produto2 = $_GET["d"];

    $totalproduto1 = $preco_produto1 * $quantidade_produto1;
    $totalproduto2 = $preco_produto2 * $quantidade_produto2;

    $valorcarrinho = $totalproduto1 + $totalproduto2;

    echo "Valor produto 1: R$$totalproduto1 <br>";
    echo "Valor produto 2: R$$totalproduto2 <br>";
    echo "Valor total do carrinho: R$$valorcarrinho <br>";