<?php

class Query
{
    public function rodarQuery($qry)
    {
        $dsn = "mysql:host=localhost;dbname=bdteste";
        $user = "root";
        $pass = "123123";

        try {
            $pdo = new PDO($dsn, $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stm = $pdo->prepare($qry);

            $stm->execute();

           return 200;
        } catch (PDOException $e) {
            return "Erro:" . $e->getMessage();
        }
    }
}
