<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="SHORTCUT ICON" href="image/vote.png">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
        <script type="text/javascript"  src="js/script.js" defer></script>
        <title>Votar</title>
    </head>
    <body>
        <div class="menu">
            <img src="image/vote.png" alt="vote">
            <ul>
                <li> <a href="pagina/resultado.php">Resultado | </a></li>
                <li><a href="pagina/candidatos.html">Candidatos</a></li>
            </ul>
        </div><!--menu-->
        <fieldset id="one">
            <img src="image/icons8-elections-64.png" alt="">
            <form action="pagina/votar.php" method="POST">
                <div class="cpf input-icon" id="cpf"> 
                    <h1>Bem Vindo!</h1>
                    <i class="fa fa-sign-in .input-icon"  aria-hidden="true"></i>
                    <input type="number" name="cpf"  placeholder="Insira seu CPF" minlength="11" maxlength="11" required >
                    <input type="submit" value="Iniciar">
                    <div class="text"> 
                        <p>Não sabe em quem votar? <a href="pagina/candidatos.html">Conheça os candidatos</a></p>
                    </div>
                </div><!--cpf-->
                
                <br>

            </form>
        </fieldset>
    </body>
</html>