<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <link rel="shortcut icon" href="favicon.png">
        <title>Sobre nós</title>

        <!-- METATAGS -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Cadastre-se no Solidarity e ajude ONGs de todo país." />

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- STYLESHEETS -->
        <link rel="stylesheet" href="./dist/css/bundle.min.css" />

        <!-- FONT AWESOME -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"
        integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
    </head>

    <body class="body-cadastro">
        <header>
            <?php require("./src/components/header/navbar.php"); ?>
        </header>

        <main>
            <?php require("./src/components/parallax/parallax-sobre.php"); ?>
              <?php require("./src/components/texto-principal/texto-principal-sobre.php"); ?>
        </main>

        <footer>
            <?php require("./src/components/footer/footer.php"); ?>
            <?php require("./src/components/footer/footer-scripts.php"); ?>
        <footer>
    </body>
</html>
