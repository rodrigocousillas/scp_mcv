<?php 

function conectarDB() : mysqli {
    $db = new mysqli('localhost', 'scp_com_ar', 'vf5jxLytbzMxsg7', 'scp_com_ar');

    if(!$db) {
        echo "Error no se pudo conectar";
        exit;
    } 

    return $db;
    
}