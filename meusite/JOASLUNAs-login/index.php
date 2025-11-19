<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Projeto Barbearia</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            body {
            background-color: #0b1220;
            color: #e5e7eb;
            font-family: "Inter", sans-serif;
            }
            .navbar {
            background-color: #0f172a !important;
            }
            .navbar-brand span {
            color: #38bdf8;
            font-weight: 700;
            font-size: 1.2rem;
            }
            .card {
            background-color: #0f172a;
            border: 1px solid #1f2a44;
            color: #e5e7eb;
            border-radius: 12px;
            transition: transform 0.2s ease;
            }
            .card:hover {
            transform: translateY(-5px);
            border-color: #38bdf8;
            }
            .card-title {
            color: #38bdf8;
            }
            .price {
            font-weight: 700;
            color: #34d399;
            }
        </style>
    </head>
    <body>
        <?php include_once "../topo.php";?>

        <div>
            <?php
                include_once "menu.php";
                
                // CONTEÚDO DINÂMICO
                if($_SERVER["REQUEST_METHOD"] == "GET"){    
                    if(empty($_SERVER['QUERY_STRING'])){
                        include_once "opcoes-de-login.php";
                    }elseif($_GET['pg']) {
                        include "$_GET[pg].php";
                    }else{
                        echo "Página não encontrada";
                    }
                }else{
                    echo "<h1>REQUISIÇÃO INVÁLIDA</h1>";
                }
            ?>
        </div>
        
        <?php include_once "../rodape.php";?>
    </body>
</html>

<?php
    exit;
