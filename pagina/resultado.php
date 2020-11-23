<?php
    $pdo = new PDO('mysql:host=localhost;dbname=dados', 'root', Null);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $iris = 0;
    $vanderlan = 0;
    $maguito = 0;
    $branco = 0;
   
    $consulta = $pdo->query("SELECT voto FROM votos;");
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        if ($linha["voto"] == "Iris"){$iris++;}
        if ($linha["voto"] == "Vanderlan"){$vanderlan++;}
        if ($linha["voto"] == "Maguito"){$maguito++;}
        if ($linha["voto"] == "Branco"){$branco++;}
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="SHORTCUT ICON" href="../image/vote.png">
        <link rel="stylesheet" href="../css/resultado.css">
        <link rel="stylesheet" href="../css/menu.css">
        <title>Resultado</title>
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
        
            google.charts.load("current", {packages:["corechart"]});
            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([

                    ["Element", "Density", { role: "style" } ],
                    ['Iris Resende   ',<?php echo("$iris");?>, "#0a0036"],
                    ['Vanderlan Cardoso   ',<?php echo("$vanderlan");?>,"#0c059c"],
                    ['Maguito Vilela   ',<?php echo("$maguito");?>,"#0015ff"],
                    ['Branco   ',<?php echo("$branco");?>,"#0385ff"]
                ]);

                    var view = new google.visualization.DataView(data);
                    view.setColumns([0, 1,
                        { calc: "stringify",
                            sourceColumn: 1,
                            type: "string",
                            role: "annotation" },
                        2]);
                
                var options = {
                    title: 'Eleições 2020',
                    width: 600,
                    height: 400,
                    bar: {groupWidth: "95%"},
                    legend: { position: "none" },
                };

                var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
                chart.draw(view, options);
            }
        </script>

    </head>

    <body>
        <div class="menu">
            <img src="../image/vote.png" alt="vote">
            <ul>
                <li> <a href="../pagina/candidatos.html">Candidatos</a></li>
            </ul>
        </div><!--menu-->
        <div class="back">
            <a href="../index.php">
                <img src="../image/icons8-go-back-64.png" alt="">
            </a>
        </div> <!--back-->
        <h1>Resultado</h1>
        <div class="image">
            <img src="../image/data-x1.png" alt="">
        </div><!--image-->
        <div id = "barchart_values" style = "width: 900px; height: 300px;"> </div>

    </body>
</html>
