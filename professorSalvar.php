<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        include ('conexao_bd.php');

        $nomeP = $_POST['nomeP'];
        $formacao = $_POST['formacao'];
        $tempoE = $_POST['tempoE'];
        $escola = $_POST['escola'];
        $turnoD = $_POST['turnoD'];

        $sql = "INSERT INTO professor(nomeP,formacao,tempoE,escola,turnoD) VALUES('$nomeP','$formacao','$tempoE','$escola','$turnoD')";

        if(executarComando($sql)){
            echo "<h2> Professor Registrado! </h2>";
        }else{
            echo "<h2> Falha ao registrar o professor. </h2>";
        }
    ?>
</body>
</html>