<?php
require "controller/homeController.php";
require "controller/passageiroController.php";
require "controller/pagamentoController.php";

$pagina = explode('/', $_SERVER['REQUEST_URI']);
$ctrl = new homeController();
$pass = new passageiroController();
$pagar = new pagamentoController();

if (isset($pagina[2])) {
  $page = $pagina[1] . "/" . $pagina[2];
} else {
  $page = $pagina[1];
}

switch ($page) {
  case "index":
    $ctrl->index();
    break;
  case "login":
    $ctrl->login();
    break;
  case "passageiro":
    $pass->cadastro();
    break;
  case "passageiro/save":
    $pass->save($_POST);
    break;
  case "pagamento":
    $pagar->cadastro();
    break;
  case "pagamento/pagar":
    $pagar->pagar($POST);
    break;
  default:
    $ctrl->index();
    break;
}
