<?php


class Modelclientes{
    private $db;


    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=db_tp;charset=utf8', 'root', '');
    }

    function Listadoclientes(){
        $consulta= $this->db->prepare("SELECT * FROM clientes ");
        $consulta->execute();
        $categorias= $consulta->fetchall(PDO::FETCH_OBJ);
        return $categorias;
    }
    public function listarconsultasBD($id){
        $consulta= $this->db->prepare("SELECT * FROM consultas where (cliente_id=?)");
        $consulta->execute(array($id));
        $consultacliente= $consulta->fetchall(PDO::FETCH_OBJ);
        return $consultacliente;
        
    }
    function altaCliente($nombre, $direccion, $telefono, $mascota){
        $consulta= $this->db->prepare("INSERT INTO clientes(nombre,direccion,telefono, mascota) VALUES (?,?,?,?)");
        $consulta->execute(array($nombre, $direccion, $telefono, $mascota));
    }
    
    function eliminarBDcategorias($id){
        $consulta= $this->db->prepare("DELETE FROM clientes  WHERE (id_cliente=?)");
        $consulta->execute(array($id));
    }
    
    public function traerdatoscliente($id){
        $consulta= $this->db->prepare("SELECT * FROM clientes WHERE (id_cliente=?)");
        $consulta->execute(array($id));
        $datocliente= $consulta->fetchall(PDO::FETCH_OBJ);
        return $datocliente;
    }
    public function editarcategoria($nombre,$direccion,$telefono,$mascota,$id){
        $consulta= $this->db->prepare("UPDATE clientes  SET nombre=?, direccion=?, telefono=?, mascota=?  WHERE (id_cliente=?)");
        $consulta->execute(array($nombre,$direccion,$telefono,$mascota,$id));
    }
}