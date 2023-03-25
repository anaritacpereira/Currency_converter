<?php

require_once("funcoes.php");

$euro;
$moeda = "";
$resultado;

$form = isset($_GET["euro"]) && isset($_GET["moeda"]);

if($form){
    $euro = floatval($_GET["euro"]);
    $moeda = $_GET["moeda"];
    if($moeda == "dolar"){
        $resultado = converterDolar($euro);
    }
    elseif($moeda == "libra"){
        $resultado = converterLibra($euro);
    }
    elseif($moeda == "real"){
        $resultado = converterReal($euro);
    }
    elseif($moeda == "iene"){
        $resultado = converterIene($euro);
    }
    else{
        $resultado = "ERRO!";
    }
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>

    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CSS LOCAL -->
    <link rel="stylesheet" href="estilo.css">
</head>
<body class="bg-black text-warning">

    <div class="container text-center">
        
        <div class="row my-4">
            <div class="col">
                <h3>CONVERSOR MONETÁRIO</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-7 mx-auto border border-white rounded quadro p-4">
                <form>

                    <h5 class="">VALOR EM EUROS</h5>
                    <input type="number" name="euro" step="0.01" class="rounded" value="<?= ($form) ? $euro : ""; ?>" required="required">

                    <br><br>

                    <h5>CONVERTER PARA</h5>
                    <div class="d-flex justify-content-center gap-3">
                        <div>
                            <label for="text-warning">DÓLAR</label>
                            <br>
                            <input type="radio" name="moeda" value="dolar" <?= ($moeda == "dolar") ? "checked" : ""; ?> required="required" >
                        </div>
                        <div>
                            <label for="text-warning">LIBRAS</label>
                            <br>
                            <input type="radio" name="moeda" value="libra" <?= ($moeda == "libra") ? "checked" : ""; ?> required="required">
                        </div>
                        <div>
                            <label for="text-warning">REAIS</label>
                            <br>
                            <input type="radio" name="moeda" value="real" <?= ($moeda == "real") ? "checked" : ""; ?> required="required">
                        </div>
                        <div>
                            <label for="text-warning">IENES</label>
                            <br>
                            <input type="radio" name="moeda" value="iene" <?= ($moeda == "iene") ? "checked" : ""; ?> required="required">
                        </div>
                    </div>

                    <br>

                    <input type="submit" value="CALCULAR!" class="rounded text-white">

                </form>
            </div>
        </div>

        <br><br>

        <?php if($form): ?>

            <div class="row">
                <div class="col-7 mx-auto border border-white rounded quadro p-4 resultado">
                    (<?= number_format($euro, 2) ?> €) = (<?= $resultado; ?>)
                    <br>
                    <a href="index.php">
                        <button class="reset rounded">RESET</button>
                    </a>
                </div>
            </div>

        <?php endif; ?>

    </div>
    
    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>