<?php
    $velocidadepista =$_POST['velopista'];
    $velocidadedoautomovel = $_POST['veloautomovel'];

    if($velocidadedoautomovel<=$velocidadepista){
        echo"Motorista respeitando a velocidade";
    }
    elseif($velocidadedoautomovel<=$velocidadepista*1.1){
        echo"Sua multa será de R$50";
    }
    elseif($velocidadedoautomovel<=$velocidadepista*1.2){
        echo"Sua multa será de R$100";
    }
    else{
        echo"Sua multa será de R$200";
    }
?>