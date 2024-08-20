<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login HH</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, rgb(48, 47, 47), #1a1919);
        }
        .maindiv{
            background-color: rgba(0, 0, 0, 0.1);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #61e786;
            box-shadow:  20px 20px 40px #0b0a0a,
             -20px -20px 40px #474646;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 10px;
        }
        .inputSubmit{
            background-color: #61e786;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }
        .inputSubmit:hover{
            background-color: #1fbe4c;
            cursor: pointer;
        }
        h1{
            text-align: center;
        }
        .back{
            color: white;
            text-decoration: none;
        }
        .backdiv{
            background-color: rgba(0, 0, 0, 0.1);
            position: absolute;
            left: 2%;
            top: 2%;
            padding: 10px;
            border-radius: 5px;
            box-shadow:  5px 5px 40px #0b0a0a,
             -5px -5px 40px #474646;
        }
    </style>
</head>
<body>
    <div class="backdiv">
    <a href="home.php" class="back">Voltar</a>
    </div>
    <div class="maindiv">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name="senha"placeholder="Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>
</html>