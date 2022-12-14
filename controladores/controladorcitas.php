<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontrolador.php");

class ControladorCitas extends ConectarMysql {

    private $tabla = "citas";

    public function guardar($objeto){
        $sql = "call crudcitas(0,?,?,?,?,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("issssss", $objeto->identificador,$objeto->fecha, $objeto->hora, 
                                $objeto->Clientes_tipoidentificacion, $objeto->Clientes_identificacion,
                                $objeto->Profesionales_tipoidentificacion,$objeto->identificacionProfesional);
        $sentencia->execute();
        $result = $sentencia->get_result();
    }

    public function eliminar($objeto){
        $sql = "call crudcitas(1,?,?,?,?,?,?,?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param("issssss", $objeto->identificador,$objeto->fecha, $objeto->hora, 
                                $objeto->Clientes_tipoidentificacion, $objeto->Clientes_identificacion,
                                $objeto->Profesionales_tipoidentificacion,$objeto->identificacionProfesional);
        $sentencia->execute();
        $result = $sentencia->get_result();
    }

    public function listarCitasClientes($objeto){
        $sql = "Select ce.identificacion as identificacion, ce.tipoidentificacion as tipoidentificacion, 
        ce.nombres as nombres, ce.apellidos as apellidos, ce.estrato as estrato, co.telefonos as telefonos, ci.fecha as fecha, ci.hora as hora
        from clientes ce, citas ci, contactos co
        where (ce.identificacion = ci.Clientes_identificacion and ce.tipoidentificacion = ci.Clientes_tipoidentificacion)
        and (co.Clientes_identificacion = ce.identificacion and co.Clientes_tipoidentificacion = ce.tipoidentificacion)
        and (ci.fecha = ?)";
        $sentencia = $this->getconexion()->prepare($sql);
        $sentencia->bind_param('s',$objeto->fecha);
        $sentencia->execute();
        $result = $sentencia->get_result();
        return $result;
    }

    public function listar(){
        $sql = "select * from $this->tabla order by fecha asc";
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

?>