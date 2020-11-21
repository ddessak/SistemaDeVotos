<?php 
$voto = $_POST['votar'];
try {
    $pdo = new PDO('mysql:host=localhost;dbname=dados','root', null);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ($voto == 15){
        $stmt = $pdo->prepare('INSERT INTO votos VALUES(:voto, :id )');
        $stmt->execute(array(
            ':voto' => 'Iris',
            ':id' => null
           
          ));
          $alerta = "Voto resgistrado com sucesso";
          echo ("<script>alert('$alerta');</script>");    
    }
    elseif ($voto == 55){
        $stmt = $pdo->prepare('INSERT INTO votos VALUES(:voto, :id )');
        $stmt->execute(array(
            ':voto' => 'Vanderlan',
            ':id' => null
          ));
          $alerta = "Voto resgistrado com sucesso";
          echo ("<script>alert('$alerta');</script>");    
    }
    elseif ( $voto == 25){
        $stmt = $pdo->prepare('INSERT INTO votos VALUES(:voto, :id )');
        $stmt->execute(array(
            ':voto' => 'Maguito',
            ':id' => null
          ));
          $alerta = "Voto resgistrado com sucesso";
          echo ("<script>alert('$alerta');</script>");    
    }
    else{
        $stmt = $pdo->prepare('INSERT INTO votos VALUES(:voto, :id )');
        $stmt->execute(array(
            ':voto' => 'Branco',
            ':id' => null
          ));
          $alerta = "Voto resgistrado com sucesso";
          echo ("<script>alert('$alerta');</script>");    
    }
    echo ("<script>window.location.assign('../pagina/resultado.php');</script>");
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

?> 