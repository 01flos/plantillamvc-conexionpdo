<?php

require_once 'Config.php';

class Conectar_Database{
    
    private $hostname = HOST_NAME;
    private $database = DATABASE_NAME;
    private $user = USER;
    private $password = PASSWORD;
    private $charset = CHARSET;
    private $conexion;
    
    
    function getconection() 
    {
        try
        {    
            $opciones = array
            (
                PDO::ATTR_PERSISTENT=>true,
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION                
            );
            
            $this->conexion=new PDO('mysql:host='.$this->hostname.';dbname='.$this->database, $this->user, $this->password, $opciones);
            
            $this->conexion->exec('SET NAMES '.$this->charset.'');
            
            echo 'Conexión Exitosa';
            
        } catch (PDOException $error) 
        {    
            echo "¡ERROR: !".$error->getMessage();
            die();
        }
        return $this->conexion;
    }
    
}

?>
