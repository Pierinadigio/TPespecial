<?php
require_once "libs/libs/Smarty.class.php";

class View {
    private $smarty;

    function __construct(){
    $this->smarty= new Smarty();
    }

    public function mostrarformlogin($error=null){
      $this->smarty->assign('error', $error);
      $this->smarty->display ('formlogin.tpl');
    }
       
    public function tablaitems($tablaconsultas, $tablaclientes){
      $this->smarty->assign('tablaconsultas', $tablaconsultas);
      $this->smarty->assign('tablaclientes', $tablaclientes);
      $this->smarty->display ('tablaitems.tpl');
    } 
    public function controlAltaconsulta(){
      $this->smarty->assign('cartel', "Falta completar campos");
      $this->smarty->display ('controlAltaconsulta.tpl');
    }
    public function formAltaconsulta($tablaclientes){
      $this->smarty->assign('tablaclientes', $tablaclientes);
      $this->smarty->display ('formAltaconsulta.tpl');
    }   
  
    public function Vistafila($fila, $tablaclientes) {
      $this->smarty->assign('fila', $fila);
      $this->smarty->assign('tablaclientes', $tablaclientes);
      $this->smarty->display ('detalleconsulta.tpl');
    }

    public function Vistahistoricovacunas( $vacunaciones){
      $this->smarty->assign('vacunaciones', $vacunaciones);
      $this->smarty->display ('historicovacunacion.tpl');
    }
    

    public function VistaCategorias($categorias){
      $this->smarty->assign('categorias', $categorias);
      $this->smarty->display ('tablacategorias.tpl');
    }

    public function VistaconsultasporCliente($consultacliente, $datocliente){
      $this->smarty->assign('consultacliente', $consultacliente);
      $this->smarty->assign('datocliente', $datocliente);
      $this->smarty->display ('consultasporcliente.tpl');
    }
    
    public function controlAltacliente(){
      $this->smarty->assign('cartel', "Falta completar campos");
      $this->smarty->display ('controlAltacliente.tpl');
    }
    public function eliminarcategoria($id){
      $this->smarty->assign('id', $id);
      $this->smarty->display ('controleliminacion.tpl');
    }
    
    public function formulario($fila){
      $this->smarty->assign('fila', $fila);
      $this->smarty->display ('formEdicionconsulta.tpl');
    }

    public function formulariocategoria($datocliente){
      $this->smarty->assign('datocliente', $datocliente);
      $this->smarty->display ('formedicioncliente.tpl');
    }
       
}
