
<?php 

$cpf = $_POST['cpf'];
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "dados";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(empty($cpf)){
    $valida =("É necessario informar o  CPF");
    echo ("<script>alert('$valida');</script>");  
    echo ("<script>window.location.assign('../index.php');</script>");
}
else{
    $consulta = $conn->query("SELECT cpf FROM dado WHERE cpf = '$cpf'");
    $row = mysqli_fetch_row($consulta);
	if($row[0] > 0){
        $alerta =("O eleitor de CPF (".$cpf.") já votou.");
		echo ("<script>alert('$alerta');</script>");        
		echo ("<script>window.location.assign('../index.php');</script>");
	}else{
		$id = null; 
        $conn->query("INSERT into dado (cpf) values ('$cpf')");
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
        <link rel="SHORTCUT ICON" href="image/vote.png">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/candidato.css">
        <link rel="stylesheet" href="../css/menu.css">
        <script type="text/javascript"  src="../js/script.js" defer></script>
        <title>Votar</title>
    </head>
    <body>
        <div class="menu">
            <img src="../image/vote.png" alt="vote">
            <ul>
                <li> <a href="../pagina/resultado.php">Resultado | </a></li>
                <li><a href="../pagina/candidatos.html">Candidatos</a></li>
            </ul>
        </div><!--menu-->
        <fieldset id="two">
            <img src="../image/vota.png" alt="" id="img">
            <form action="../bd/voto.php" method="POST">
                <div class="votar input-icon" id="votar"> 
                    <h1>Vote com consciência!</h1>
                    <i class="fa fa-sign-in .input-icon"  aria-hidden="true"></i>
                    <input type="hidden" name="cpf" value="<?php echo $cpf; ?>">
                    <input type="number" name="votar" id="voto" placeholder="Insira o número do candidato" maxlength="2" >
                    <input type="button" value="Votar" onclick="vote()">

                </div><!--votar-->

                <div class="confirme" id="confirme">
                    <div class="iris">
                        <img src="../image/iris.jpg" alt="">
                    </div>
                    <h1>Deseja mesmo votar no <br> Iris Rezende?</h1>
                    <br>
                    <input type="submit" value="Sim"> 
                    <input type="button" value="Não" onclick="n()">
                </div>
                <div class="confirme" id="confirme1">
                    <div class="vanderlan">
                        <img src="../image/vandelan.jpg" alt="">
                    </div>
                    <h1>Deseja mesmo votar no <br> Vanderlan Cardoso?</h1>
                    <br>
                    <input type="submit" value="Sim"> 
                    <input type="button" value="Não" onclick="n()">
                </div>
                <div class="confirme" id="confirme2">
                    <div class="maguito">
                        <img src="../image/ma.jpg" alt="">
                    </div>
                    <h1>Deseja mesmo votar no <br> Maguito Vilela?</h1>
                    <br>
                    <input type="submit" value="Sim"> 
                    <input type="button" value="Não" onclick="n()">
                </div>
                <div class="confirme" id="confirme3">
                    <div class="branco">
                        <img src="../image/branco.png" alt="">
                    </div>
                    <h1>Deseja mesmo votar <br> Branco?</h1>
                    <br>
                    <input type="submit" value="Sim"> 
                    <input type="button" value="Não" onclick="n()">
                </div>
                <br>
            </form>
        </fieldset>

        <script type="text/javascript" src="../js/script.js"></script>
    </body>
</html>
<?php

}
}

?>