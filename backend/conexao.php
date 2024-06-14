<?php

class Conexao
{ 
    public static function conectar($caminho)
    {
        $config = parse_ini_file($caminho);

        $dsn = "mysql:host={$config['host']};" .
         "dbname={$config['dbname']}";

        $pdo = new PDO(
            $dsn,
            $config['user'],
            $config['password']
        );

        return $pdo;
    }
}



