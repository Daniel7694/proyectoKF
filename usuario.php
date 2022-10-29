<?php

class usuario extends conexion{

    private $Nombre;
    private $Contraseña;

    public function userExists($usuario, $contra){
        $md5contra=md5($contra);

        $query=$this->connect()->prepare('SELECT * FROM datos WHERE Nombre=:usuario AND password=:contra');
        $query->execute(['usuario'=>$usuario, 'contra'=>$md5contra]);

        if($query->rowCount()){
            return true;
        }
        else{
            return false;
        }
    }

    public function setUser($usuario){
        $query=$this->connect()->prepare('SELECT*FROM datos WHERE Nombre=:usuario');
        $query->executr(['usuario=>$usuario']);

        foreach ($query as $currentUsuario){
            $this->nombre = $currentUsuario['Nombre'];
            $this->usuario= $currentUsuario['usuario'];
        }


    }

    public function getNombre(){
        return $this->Nombre;
    }
}



?>