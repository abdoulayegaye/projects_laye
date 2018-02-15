<?php
function addRoleUser($idR, $idU){
    $sql = "INSERT INTO user_roles VALUES ($idR , $idU)";
    return executeSQL($sql);
}
function getRolesByIdU($idU){
    $sql = "SELECT libR FROM user_roles ur, roles r WHERE ur.idR = r.idR AND ur.idU = $idU";
    return executeSQL($sql);
}
function getRolesByIdR($idR){
    $sql = "SELECT nom,prenom FROM user u, user_roles ur WHERE ur.idU = u.idU AND ur.idR = $idR";
    return executeSQL($sql);
}
