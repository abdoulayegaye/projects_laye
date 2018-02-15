<?php
require_once '../model/DB.php';
require_once '../model/RolesDB.php';
$base_url = "http://localhost:8080/mesProjets/tp_gestion_user/";
//Ajout
if(isset($_POST['valider'])){
    extract($_POST);
    $ok = addRoles($libelle);//MAJ 0 ou 1
    header("location:$base_url?page=addroles&ok=$ok");
}
//Suppression
if(isset($_GET['id'])){
    deleteRoles($_GET['id']);
    header("location:$base_url?page=listeroles");
}
//Modification
if(isset($_POST['modifier'])){
    extract($_POST);
    $resultat = updateRoles($id, $lib);
    //die($id.$lib);
    if($resultat){
        echo "<script language ='JavaScript'>
                    alert('Données modifiées, Cliquer pour retourner à la liste');
                    window.location = 'http://localhost/mesProjets/tp_gestion_user/?page=listeroles';
                </script>";
    }
}
?>