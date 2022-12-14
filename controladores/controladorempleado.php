<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontrolador.php");
//Acá hay una herencia 
class ControladorEmpleado extends ConectarMysql {

    private $tabla = "empleados";

    public function guardar($objeto){
        $sql = "call crudempleados(0,?,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("ssss", $objeto->numeroidentificacion, $objeto->tipoIdentificacion, $objeto->nombres, $objeto->apellidos);
        $sentencia->execute();
        $result = $sentencia->get_result();
    }

    public function eliminar($objeto){
        $sql = "call crudcategorias(1,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("sss", $objeto->identificador, $objeto->nombre, $objeto->descripcion);
        $sentencia->execute();
        $result = $sentencia->get_result();
    }

    public function listar(){
        $sql = "select *
                from empleados as e, usuarios as u
                where e.tipoIdentificacion = u.Empleados_tipoIdentificacion and e.numeroidentificacion = u.Empleados_numeroidentificacion
                group by u.usuario, u.tipousuario";
        return $this->getDatos($sql);
    }

    public function getDatos($sql){
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado;
    }

    public function consultarRegistro($objeto){
    }

}

class ControladorUsuario extends ConectarMysql{
    private $tabla = "Usuarios";
    
    public function guardar($objeto){
        $sql = "call crudusuarios(0,?,?,?,?,?,?,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("sssssssss",$objeto->usuario,$objeto->contraseña,$objeto->tipousuario,$objeto->Clientes_tipoidentificacion,$objeto->Clientes_identificacion,$objeto->Empleados_numeroidentificacion,$objeto->Empleados_tipoIdentificacion,$objeto->Profesionales_tipoidentificacion,$objeto->Profesionales_Identificacion);
        $sentencia-> execute();
    }

    public function eliminar($objeto){
        $sql = "call crudusuarios(1,?,?,?,?,?,?,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("sssssssss",$objeto->usuario,$objeto->contraseña,$objeto->tipousuario,$objeto->Clientes_tipoidentificacion,$objeto->Clientes_identificacion,$objeto->Empleados_numeroidentificacion,$objeto->Empleados_tipoIdentificacion,$objeto->Profesionales_tipoidentificacion,$objeto->Profesionales_Identificacion);
        $sentencia-> execute();
    }
    
    public function listar(){
        $sql = "select codigo, concat(nombres,' ',apellidos) nombres from ".$this->tabla;
        return $this->getDatos($sql);
    }
    
    public function consultarRegistro($objeto){}

    public function getDatos($sql){
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado;
    }

    public function listarDatosClientes(){
        $sql = "select * from ".$this->tabla;
        return $this->getDatos($sql);
    }
}

?>