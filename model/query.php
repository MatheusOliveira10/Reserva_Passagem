<?php

class Query
{
    public function insert($qry)
    {
        $dsn = "mysql:host=localhost;dbname=reservas";
        $user = "root";
        $pass = "123123";

        try {
            $pdo = new PDO($dsn, $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stm = $pdo->prepare($qry);

            $stm->execute();

            echo 200;
        } catch (PDOException $e) {
            echo "Erro:" . $e->getMessage();
        }
    }

    public function select($qry)
    {
        $dsn = "mysql:host=localhost;dbname=reservas";
        $user = "root";
        $pass = "123123";

        try {
            $pdo = new PDO($dsn, $user, $pass);

            $result = $pdo->query($qry);
            $rows = $result->fetchAll();

            return $rows;
        } catch (PDOException $e) {
            echo "Erro:" . $e->getMessage();
        }
    }
}
