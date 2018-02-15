<?php
require_once '../model/DB.php';
require_once '../model/Roles_UserDB.php';
$base_url = "http://localhost:8080/mesProjets/tp_gestion_user/";
//Ajout
if(isset($_POST['valider'])){
    extract($_POST);
    $ok = addRoleUser($idU, $idR);//MAJ 0 ou 1
    header("location:$base_url?page=addrolesuser&ok=$ok");
}