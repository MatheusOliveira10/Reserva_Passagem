<?php
require "controller/homeController.php";
require "controller/passageiroController.php";
require "controller/pagamentoController.php";
require "controller/reservaController.php";

$pagina = explode('/', $_SERVER['REQUEST_URI']);
$ctrl = new homeController();
$pass = new passageiroController();
$pagar = new pagamentoController();
$reserva = new reservaController();

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
  case "pagamento/save":
    $pagar->pagar($_POST);
    break;
  case "pagamento/view":
    $pagar->view();
    break;
  case "reserva":
    $reserva->cadastro();
    break;
  case "reserva/save":
    $reserva->save($_POST);
    break;
  default:
    $ctrl->index();
    break;
}
