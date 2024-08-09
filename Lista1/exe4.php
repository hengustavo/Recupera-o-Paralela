<?php
    $preco = $_POST['preco'];
    $desconto = $preco - ($preco*0.1);
    echo "O valor com 10% de desconto para pagamento à vista será: ".$desconto."<br>";
    $pre = $preco/5;
    echo "O valor da prestação para parcelamento sem juros, em 5x será: ".$pre."<br>";
    $pretacao = ($preco +  ($preco*0.2))/10;
    echo "O valor da prestação para parcelamento com juros, em 10x, com 20% de acréscimo no valor do produto será: ".$pretacao."<br>";
?>