<?php
require "model/query.php";

class passageiroController
{
    public function index()
    {
        include "view/index.php";
    }

    public function save($request)
    {
        $qry = "INSERT INTO passageiros(nome, cpf) VALUES (";
        $qry .= "'" . $request['nome'] . "'";
        $qry .= ",";
        $qry .= "'" . $request['CPF'] . "'";
        $qry .= ")";

        $pdo = new Query();
        $pdo->rodarQuery($qry);

        header("Location: /passageiro");
    }
}
