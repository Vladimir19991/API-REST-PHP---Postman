<?php

    require_once "models/Cliente.php";


    switch ($_SERVER['REQUEST_METHOD']){
    case 'GET':
            if (isset($_GET['id'])) {
            echo json_encode(Cliente::getWhere($_GET['id']));
            }//end if
            else {
            echo json_encode(Cliente::getAll());
             }//end else 
             break;

    }



?>