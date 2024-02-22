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

        $email = $_POST['email'];

        $sql = "INSERT INTO newsletter(email) VALUES('$email')";

        if(executarComando($sql)){
            echo "<h2> Email Registrado na Newsletter </h2>";
        }else{
            echo "<h2> Falha ao registrar o email. </h2>";
        }
    ?>
</body>
</html>