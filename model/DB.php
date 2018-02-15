<?php
function getConnexion(){
    $connexion = mysqli_connect(
        'localhost',
        'root',
        '',
        'tp_gestion_user'
    );
    return $connexion;
}
function executeSQL($sql){
    return mysqli_query(getConnexion(), $sql);
}