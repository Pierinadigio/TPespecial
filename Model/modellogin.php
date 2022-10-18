<?php


class Modellogin{
    private $db;


    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tp;charset=utf8', 'root', '');
    }

    public function traeremail($email){
        $consulta= $this->db->prepare("SELECT * FROM administradores WHERE email=?");
        $consulta->execute(array($email));
        $usuario =$consulta->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }
}