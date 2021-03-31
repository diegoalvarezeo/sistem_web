<?php

include_once 'modelo/conexion.php';

class User extends DB{

    private $nombre;
    

    public function userExists($user, $pass){
        //$md5pass = md5($pass);
        // utilizar $md5pass como 'pass'

        
        
        $query = $this->conexion()->prepare('SELECT * FROM clientes WHERE nombreemp = :user AND contrasena = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->conexion()->prepare('SELECT * FROM clientes WHERE nombreemp = :user');
        $query ->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombreemp'];
            
        }
    }

    public function getNombre(){
        return $this->nombre;
    }

}

?>