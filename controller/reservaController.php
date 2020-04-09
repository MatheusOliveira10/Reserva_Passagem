<?php
//require "model/query.php";

class reservaController {

    public function cadastro() {
        $qry = "SELECT id_passagem FROM assentos ORDER BY posicao, fileira";
       
        $pdo = new Query();

        $assentos = $pdo->select($qry);

        include "view/reservas/cadastro.php";
    }

    public function save($request) {
        $qry = "INSERT INTO passagens(id_passageiro, preco, pago, data) VALUES (";
        $qry .= "'" . $request['passageiro'] . "'";
        $qry .= ",";
        $qry .= "'" . $request['preco'] . "'";
        $qry .= ",";
        $qry .= "'N'";
        $qry .= ",";
        $qry .= "'" . date('yy-m-d') . "'";
        $qry .= ")";

        $pdo = new Query();
        $pdo->insert($qry);

        header("Location: /reserva");
    }
}