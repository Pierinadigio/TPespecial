<?php

require_once "./Helper/helper.php";
require_once "./Model/modelclientes.php";
require_once "./View/view.php";


class clientesController{
    private $modelclientes;
    private $view;
    private $helper;

    public function __construct(){
      $this->modelclientes= new Modelclientes();
      $this->view= new View();
      $this->helper = new Helper();
      if (session_status()!= PHP_SESSION_ACTIVE){
        session_start();
      }
      
    }

    public function listarCategorias(){
        $categorias= $this->modelclientes->Listadoclientes();
        $this->view->VistaCategorias($categorias); 
        
    }
      
    public function listadoconsultaporcliente($id){
        $consultacliente= $this->modelclientes->listarconsultasBD($id);
        $datocliente=$this->modelclientes->traerdatoscliente($id);
        $this->view->VistaconsultasporCliente($consultacliente, $datocliente);
    }
      
    public function registrarcliente(){
        $this->helper->check();
        if (isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['direccion']) && !empty($_POST['direccion']) && isset($_POST['telefono']) && !empty($_POST['telefono']) &&isset($_POST['mascota']) && !empty($_POST['mascota'])){
       
        $nombre= $_POST['nombre'];
        $direccion= $_POST['direccion'];
        $telefono= $_POST['telefono'];
        $mascota= $_POST['mascota'];
        $this->modelclientes->altaCliente($nombre, $direccion, $telefono, $mascota);
        header("Location:".BASE_URL."vercategorias");
        }
        else {
          $this->view->controlAltacliente();
        }
        
      }
      public function eliminarcliente($id){
        $this->helper->check();
        $this->view->eliminarcategoria($id);
      }

      function borrardefinitivamente($id){
        $this->helper->check();
        $this->modelclientes->eliminarBDcategorias($id);
        header("Location:".BASE_URL."vercategorias");
       }


      public function editarcliente($id){
        $this->helper->check();
        $datocliente= $this->modelclientes->traerdatoscliente($id);
        $this->view->formulariocategoria($datocliente);
      }
      
      public function confirmaredicion($id){
        $this->helper->check();
        if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['direccion']) && isset($_POST['telefono']) && isset($_POST['mascota'])){
      
        $id=$_POST['id'];
        $nombre= $_POST['nombre'];
        $direccion= $_POST['direccion'];
        $telefono= $_POST['telefono'];
        $mascota= $_POST['mascota'];
    
        $this->modelclientes->editarcategoria($nombre,$direccion,$telefono,$mascota,$id);
        header("Location:".BASE_URL."vercategorias");
        }
      }
    }