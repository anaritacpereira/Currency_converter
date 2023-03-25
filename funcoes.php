<?php

function converterDolar($valor){
    $cotacao = 1.06;
    return "$ " . number_format($valor * $cotacao, 2);
}

function converterLibra($valor){
    $cotacao = 0.88;
    return "£ " . number_format($valor * $cotacao, 2);
}

function converterReal($valor){
    $cotacao = 5.48;
    return "R$ " . number_format($valor * $cotacao, 2);
}

function converterIene($valor){
    $cotacao = 140.26;
    return "¥ " . number_format($valor * $cotacao, 0);
}


?>