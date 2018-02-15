<?php
function addUser($nom , $prenom, $login , $password){
    $sql = "INSERT INTO user VALUES (NULL , '$nom' , '$prenom' , '$login' , '$password')";
    return executeSQL($sql);
}
function deleteUser($idU){
    $sql = "DELETE FROM user WHERE idU = $idU";
    return executeSQL($sql);
}
function updateUser($id ,$nom , $prenom, $login , $password){
    $sql = "UPDATE user SET nom = '$nom' ,prenom = '$prenom' ,login = '$login', password = '$password' WHERE idU = '$id'";
    return executeSQL($sql);
}
function listeUser(){
    $sql = "SELECT * FROM user";
    return executeSQL($sql);
}
function getUserById($idU){
    $sql = "SELECT * FROM user WHERE idU = $idU";
    return executeSQL($sql);
}
?>