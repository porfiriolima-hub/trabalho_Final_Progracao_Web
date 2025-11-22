<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nextron Informática | Soluções em Tecnologia</title>
    </head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilizacao.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <body>
        <?php include_once "topo.php"; ?>

        <div>
            <section>
                <?php include_once "menu.php"; ?>
            </section>
            
            <section>
                <?php
                    if(empty($_SERVER['QUERY_STRING'])){
                        include_once "conteudo.php";
                    }elseif($_GET['pg']) {
                        if(isset($_GET['pg'])){
                            include_once "$_GET[pg].php";
                        } else {
                            echo "Chave \"pg\" da query string não definida.";
                        }
                    }else{
                        echo "Página não encontrada.";
                    }
                ?>
            </section>

            <?php include_once "rodape.php"; ?>
        </div>
    </body>
</html>

<?php
    exit;
