<?php
    session_start();
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema HH</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, rgb(48, 47, 47), #1a1919);
            background-attachment: fixed;
            color: white;
        }
        div{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        h1{
            color: #61e786;
        }
        .exit{
            text-decoration: none;
        }
        .link{
            text-decoration: none;
            color: #61e786;
        }
        .exit{
            color: white;
            text-decoration: none;
        }
        .exitdiv{
            background-color: rgba(0, 0, 0, 0.1);
            position: absolute;
            left: 5%;
            top: 5%;
            padding: 10px;
            border-radius: 5px;
            box-shadow:  5px 5px 40px #0b0a0a,
             -5px -5px 40px #474646;
        }
    </style>
</head>
<body>
    <div>
        <h1>Muito bem, você acessou o sistema</h1> 
        <h3>Agora você pode voltar ao <a href="https://github.com/Hidarick" class="link">GitHub</a>, ou conhecer meu <a href="https://www.linkedin.com/in/henrique-minozzo-hida-952851304/" class="link">Linkedin</a></h3>
    </div>
    <div class="exitdiv">
        <a href="sair.php" class="exit">Sair</a>
    </div>
</body>
</html>