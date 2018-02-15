<?php
require_once '../model/DB.php';
require_once '../model/UserDB.php';
$base_url = "http://localhost:8080/mesProjets/tp_gestion_user/";
//Ajout
if(isset($_POST['valider'])){
    extract($_POST);
    $ok = addUser($nom, $prenom, $login, $password);//MAJ 0 ou 1
    header("location:$base_url?page=adduser&ok=$ok");
}
//Suppression
if(isset($_GET['id'])){
    deleteUser($_GET['id']);
    header("location:$base_url?page=listeuser");
}
//Modification
if(isset($_POST['modifier'])){
    extract($_POST);
    $resultat = updateUser($id, $nom, $prenom, $login, $password);
    //die($id.$nom. $prenom. $login. $password);
    //die($resultat);
    if($resultat == 1){
        echo "<script language ='JavaScript'>
                    alert('Données modifiées, Cliquer pour retourner à la liste');
                    window.location = 'http://localhost/mesProjets/tp_gestion_user/?page=listeuser';
                </script>";
    }
}
?>