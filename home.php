<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home HH</title>
    <style>
        body{
            font-family: arial, helvetica, sans-serif;
            text-align: center;
            color: white;
            background-image: linear-gradient(45deg, rgb(48, 47, 47), #1a1919);
            background-attachment: fixed;
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 10px;
            box-shadow:  10px 10px 40px #0b0a0a,
             -10px -10px 40px #474646;
        }
        a{
            text-decoration: none;
            color: white;
            background-color: #62e786;
            border-radius: 10px;
            padding:10px; 
        }
        a:hover{
            border: 3px solid #62e786;
        }
        h1{
            margin-top: 10%;
            color: #62e786;
        }
    </style>
</head>
<body>
    <h1>Seja bem-vindo, visitante do meu github</h1>
    <h2>faça seu login, ou cadastre-se abaixo</h2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>    
</body>
</html>