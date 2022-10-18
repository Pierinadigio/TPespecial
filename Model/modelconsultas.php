<?php


class Modelconsultas{
    private $db;


    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tp;charset=utf8', 'root', '');
    }


    public function VistaPrincipal(){
   
        $consulta= $this->db->prepare("SELECT * FROM consultas");
        $consulta->execute();
        $tablaconsultas= $consulta->fetchall(PDO::FETCH_OBJ);
        return $tablaconsultas;
    }
    public function Vistaclientes(){
        $consulta= $this->db->prepare("SELECT * FROM clientes");
        $consulta->execute();
        $tablaclientes= $consulta->fetchall(PDO::FETCH_OBJ);
        return $tablaclientes;
          
    }
    
    public function detalleItemBD($id){
        $consulta= $this->db->prepare("SELECT * FROM consultas  WHERE (id_consulta=?)");
        $consulta->execute(array($id));
        $fila= $consulta->fetchall(PDO::FETCH_OBJ);
        return $fila;
    }
   

    public function historicovacunas($id){
        $consulta= $this->db->prepare("SELECT fecha, vacunacion FROM consultas WHERE (cliente_id=?)");
        $consulta->execute(array($id));
        $vacunaciones= $consulta->fetchall(PDO::FETCH_OBJ);
        return $vacunaciones;
    }

    function insertConsulta($fecha, $cliente, $motivo, $vacunacion, $antiparasirario){
        $consulta= $this->db->prepare("INSERT INTO consultas (fecha,cliente_id,motivo, vacunacion, antiparasitario) VALUES (?,?,?,?,?)");
        $consulta->execute(array($fecha, $cliente, $motivo, $vacunacion, $antiparasirario));
    }

    function eliminarBD($id){
        $consulta= $this->db->prepare("DELETE FROM consultas  WHERE (id_consulta=?)");
        $consulta->execute(array($id));
    }
    
    function editarBD($id,$fecha,$motivo,$vacunacion,$antiparasirario){
        $consulta= $this->db->prepare("UPDATE consultas  SET fecha=?, motivo=?,vacunacion=?,antiparasitario=?  WHERE (id_consulta=?)");
        $consulta->execute(array($fecha,$motivo,$vacunacion,$antiparasirario,$id));
    }
    
    public function traerdatosconsulta($id){
        $consulta= $this->db->prepare("SELECT * FROM consultas where (id_consulta=?)");
        $consulta->execute(array($id));
        $fila= $consulta->fetchall(PDO::FETCH_OBJ);
        return $fila;
    }
    
}

