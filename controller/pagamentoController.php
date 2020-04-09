<?php

class pagamentoController {

    public function pagar($request) {
        $qry = "INSERT INTO passageiros(nome, cpf) VALUES (";
        $qry .= "'" . $request['nome'] . "'";
        $qry .= ",";
        $qry .= "'" . $request['CPF'] . "'";
        $qry .= ")";

        $pdo = new Query();
        $pdo->insert($qry);

        header("Location: /pagamento");
    }

    public function cadastro(){

        $qry = "SELECT * FROM passageiros"; 

        $pdo = new Query();

        $passageiros = $pdo->select($qry);

        include "view/pagamentos/cadastro.php";
    }
}