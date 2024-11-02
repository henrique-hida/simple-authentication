<?php

    $dbHost = 'dpg-csiojmlsvqrc73ehbrbg-a'; 
    $dbPort = '5432'; 
    $dbUsername = 'postgre_database_yo4j_user'; 
    $dbPassword = 'sarBM9vOD5xMxt3Pa6HdkLZwNcXckL8m'; 
    $dbName = 'postgre-database'; 


    $connectionString = "host=$dbHost port=$dbPort dbname=$dbName user=$dbUsername password=$dbPassword";

    $conexao = pg_connect($connectionString);

    if (!$conexao) {
        die("Falha na conexão: " . pg_last_error());
    } else {
        echo "Conexão bem-sucedida!";
    }
?>
