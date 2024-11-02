<?php

    $dbHost = 'dpg-csiojmlsvqrc73ehbrbg-a'; // Hostname do Render
    $dbPort = '5432'; // Porta padrão do PostgreSQL
    $dbUsername = 'postgre_database_yo4j_user'; // Nome do usuário
    $dbPassword = 'sarBM9vOD5xMxt3Pa6HdkLZwNcXckL8m'; // Senha
    $dbName = 'postgre-database'; // Nome do banco de dados

    // Montando a string de conexão
    $connectionString = "host=$dbHost port=$dbPort dbname=$dbName user=$dbUsername password=$dbPassword";

    // Conectando ao banco de dados
    $conexao = pg_connect($connectionString);

    // Verificando a conexão
    if (!$conexao) {
        die("Falha na conexão: " . pg_last_error());
    } else {
        echo "Conexão bem-sucedida!";
    }
?>
