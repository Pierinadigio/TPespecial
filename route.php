<?php
require_once "./Controller/logincontroller.php";
require_once "./Controller/consultascontroller.php";
require_once "./Controller/clientescontroller.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$action = 'home'; 

if (!empty($_GET['action'])) { 
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'home':
        $consultascontroller= new consultasController();
        $consultascontroller->ShowHome();
        break;
    case 'formaltaconsulta':
        $consultascontroller= new consultasController();
        $consultascontroller->registroconsulta();
        break;
    case 'vermas':
        $consultascontroller= new consultasController();
        $consultascontroller->detalleItem($params[1]);
        break;
    case 'vacunacion':
        $consultasccontroller= new consultasController();
        $consultasccontroller->historicoVacunacion($params[1]);
        break;
    case 'login':
        $logincontroller = new loginController();
        $logincontroller->Showformlogin();
        break;
    case 'validacion':
        $logincontroller = new loginController();
        $logincontroller->controlingreso();
        break;
    case 'logout':
        $logincontroller = new loginController();
        $logincontroller->logout();
        break;
    case 'altaconsulta':
        $consultascontroller = new consultasController();
        $consultascontroller->altaConsulta();
        break;
    case 'eliminarconsulta':
        $consultascontroller = new consultasController();
        $consultascontroller->eliminarConsulta($params[1]);
        break;
    case 'editarconsulta':
        $consultascontroller = new consultasController();
        $consultascontroller->editarconsulta($params[1]);
        break;
    case 'confirmaredicion':
        $consultascontroller = new consultasController();
        $consultascontroller->edicionconfirmada($params[1]);
        break;
    case 'vercategorias':
        $clientescontroller = new clientesController();
        $clientescontroller->listarCategorias();
        break;
    case 'verconsultasporcliente':
        $clientescontroller = new clientesController();
        $clientescontroller->listadoconsultaporcliente($params[1]);
        break;
    case 'altacliente':
        $clientescontroller = new clientesController();
        $clientescontroller->registrarcliente();
        break;
    case 'eliminarcliente': 
        $clientescontroller = new clientesController();
        $clientescontroller->eliminarcliente($params[1]);
        break;
    case 'confirmareliminar': 
        $clientescontroller = new clientesController();
        $clientescontroller->borrardefinitivamente($params[1]);
        break;
    case 'editarcliente':
        $clientescontroller = new clientesController();
        $clientescontroller->editarcliente($params[1]);
        break;
    case 'edicioncategoria':
        $clientescontroller = new clientesController();
        $clientescontroller->confirmaredicion($params[1]);
        break;        
    default:
        echo('404 Page not found');
        break;
}