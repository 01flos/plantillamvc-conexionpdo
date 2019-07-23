<?php

    require_once 'Model.php';

    class modelController
    {
        public function inicio()
        {
            //instanciar el metodo 
            $conectar = new Conectar_Database();
            //llamar el la funcion
            $conectar->getconection();
            //Llamar la vista que se necesita
            require __DIR__ . '/templates/modelView.php';
        }
    }   

?>