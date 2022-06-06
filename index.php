<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD sem Banco de Dados</title>
    <!--CSS-->
    <link rel="stylesheet" href="css/style.css">
    <!--CSS Bootstrap only-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet"> 


</head>
    <body class="container pt-5" style="background-color: #EFEFEF">
        <div class="main-content">
            <?php

                $url = explode('?', $_SERVER['REQUEST_URI']);
                
                include 'telas/menu.php';
                include 'acoes.php';

                match ($url[0]) {
                    '/' => home(),
                    '/cadastro' => cadastro(),
                    '/login' => login(),
                    '/listar' => listar(),
                    '/relatorio' => relatorio(),
                    '/excluir' => excluir(),
                    '/editar' => editar(),
                    default => admin(),
                }
            ?>
        </div>
    </body>
</html>