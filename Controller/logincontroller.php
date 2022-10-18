<?php
require_once "./Model/modellogin.php";
require_once "./View/view.php";


class loginController{
    private $modellogin;
    private $view;
    
    public function __construct(){
        $this->modellogin= new Modellogin();
        $this->view= new View();
        
    }
    
    public function Showformlogin(){
        $this->view->mostrarformlogin();
    }

    public function controlingreso(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $usuario = $this->modellogin->traeremail($email);

        if ($usuario && password_verify($password, $usuario->password)) {
            session_start();
            
            $_SESSION['ID_admin'] = $usuario->ID_admin;
            $_SESSION['email'] = $usuario->email;
            $_SESSION['IS_LOGGED'] = true;
            
            header("Location:".BASE_URL."home");
        } else {
            $this->view->mostrarformlogin("Verifique los datos ingresados.Usuario o contraseña incorrectos");
        } 
    }
    
    public function logout() {
        session_start();
        session_destroy();
        header("Location:".BASE_URL."home");
    }

}

