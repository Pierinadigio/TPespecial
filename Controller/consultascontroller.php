<?php
require_once "./Model/modelconsultas.php";
require_once "./View/view.php";


class consultasController{
    private $modelconsultas;
    private $view;
    private $helper;

    public function __construct(){
      $this->modelconsultas= new Modelconsultas();
      $this->view= new View();
      $this->helper = new Helper();
      if (session_status()!= PHP_SESSION_ACTIVE){
        session_start();
      }
      
    }
    public function ShowHome(){
        $tablaconsultas=$this->modelconsultas->VistaPrincipal();
        $tablaclientes=$this->modelconsultas->Vistaclientes();
        $this->view->tablaitems($tablaconsultas, $tablaclientes);
        
     }

     public function registroconsulta(){
      $tablaclientes=$this->modelconsultas->Vistaclientes();
      $this->view->formAltaconsulta($tablaclientes);
     }

     function detalleItem($id){
      $tablaclientes=$this->modelconsultas->Vistaclientes(); 
      $fila=$this->modelconsultas->detalleItemBD($id);
      $this->view->Vistafila($fila, $tablaclientes); 
     }

     public function historicoVacunacion($id){
        $vacunaciones=$this->modelconsultas->historicovacunas($id);
        $this->view->Vistahistoricovacunas($vacunaciones); 
     }
     
     function altaConsulta(){
        $this->helper->check();
        if (isset($_POST['fecha']) && !empty ($_POST['fecha']) && isset($_POST['cliente_id']) && !empty ($_POST['cliente_id'])&& isset($_POST['motivo']) && !empty ($_POST['motivo']) && isset($_POST['vacunacion']) && isset($_POST['antiparasitario']) ){
        $fecha= $_POST['fecha'];
        $cliente= $_POST['cliente_id'];
        $motivo= $_POST['motivo'];
        $vacunacion= $_POST['vacunacion'];
        $antiparasirario= $_POST['antiparasitario'];
      
        $this->modelconsultas->insertConsulta($fecha, $cliente, $motivo, $vacunacion, $antiparasirario);
        header("Location: home");
        }
        else {
        $this->view->controlAltaconsulta();
        }
      }

      function eliminarConsulta($id){
        $this->helper->check();
        $this->modelconsultas->eliminarBD($id);
        header("Location:".BASE_URL."home");
      }

      public function editarconsulta($id){
        $this->helper->check();
        $fila=$this->modelconsultas->traerdatosconsulta($id);
        $this->view->formulario($fila);
       }
       
       public function edicionconfirmada($id){
        $this->helper->check();
        if (isset($_POST['id']) && isset($_POST['fecha']) && isset($_POST['motivo'])&&isset($_POST['vacunacion']) && isset($_POST['antiparasitario']) ){
        $id=$_POST['id'];
        $fecha= $_POST['fecha'];
        $motivo= $_POST['motivo'];
        $vacunacion= $_POST['vacunacion'];
        $antiparasirario= $_POST['antiparasitario'];
       
        $this->modelconsultas->editarBD($id,$fecha,$motivo,$vacunacion,$antiparasirario);
        header("Location:".BASE_URL."home");
       }
    
      }
            
    }