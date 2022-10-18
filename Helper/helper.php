<?php

class Helper {
    private $smarty;

    function __construct(){
        $this->smarty= new Smarty();
        }
 
    public function check(){
     
        if (!isset($_SESSION ['IS_LOGGED'])){
            $this->smarty->assign('control', "Usted no esta autorizado para esta accion");
            $this->smarty->display ('controlLogin.tpl');
            die();
        }
   }
    
}
