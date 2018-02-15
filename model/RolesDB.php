<?php
function addRoles($libR){
    $sql = "INSERT INTO roles VALUES (NULL , '$libR')";
    return executeSQL($sql);
}
function deleteRoles($idR){
    $sql = "DELETE FROM roles WHERE idR = $idR";
    return executeSQL($sql);
}
function updateRoles($idR , $libR){
    $sql = "UPDATE roles SET libR = '$libR' WHERE idR = $idR";
    return executeSQL($sql);
}
function listeRoles(){
    $sql = "SELECT * FROM roles";
    return executeSQL($sql);
}
function getRolesById($idR){
    $sql = "SELECT * FROM roles WHERE idR = $idR";
    return executeSQL($sql);
}
?>