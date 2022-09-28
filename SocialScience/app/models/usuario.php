<?php

class usuario{

    private $db;

    public function __construct(){

        $this->db = new Base;
    }

    public function getUsuario($usuario){

        $this->db->query('SELECT * FROM usuarios WHERE usuario = :user');
        $this->db->bind(':user', $usuario);
        return $this->db->register();
    }

    public function verificarContrasena($datosUsuario , $contrasena)
    {
        if(password_verify($contrasena , $datosUsuario->contrasena)){
            return true;
        } else{
            return false;
        }
    }

    public function verificarUsuario($datosUsuario)
    {
        $this->db->query('SELECT usuario FROM usuarios where usuario = :user');
        $this->db->bind(':user', $datosUsuario['usuario']);
        $this->db->register();
        if($this->db->rowCount()){
            return false;
        } else {
            return true;
        }
    }

    public function register($datosUsuario)
    {
        var_dump($datosUsuario);
        $this->db->query('INSERT INTO usuarios (idPrivilegio , correo , usuario , contrasena) VALUES (:idPrivilegio , :correo , :usuario , :contrasena)');
        $this->db->bind(':idPrivilegio' , $datosUsuario['idPrivilegio']);
        $this->db->bind(':correo' , $datosUsuario['correo']);
        $this->db->bind(':usuario' , $datosUsuario['usuario']);
        $this->db->bind(':contrasena' , $datosUsuario['contrasena']);

        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
}

