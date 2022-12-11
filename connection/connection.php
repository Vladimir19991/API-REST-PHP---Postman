<?php

    class Connection extends  Mysqli {
        function __construct(){
            parent::__construct('localhost', 'root', '', 'Apirest_video2');
            $this->set_charset('utf8');
            $this->connect_error == NULL ? 'Conexion exito a la BD': die ('Error al conectar a la BD');
        }//end de la fuction
        
    }// end class conection

?>