<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout d'un Role</title>
    <link rel="stylesheet" href="public/bootstrap-cerulean.min.css"/>
</head>
<body>

<?php
require_once "menu.php";
if(isset($_GET['ok'])){
    if($_GET['ok'] == 1){
        echo '<div class="alert alert-success" style="text-align: center;">
                                        Donnees ajoutees avec succes
                                  </div>';
    }else{
        echo '<div class="alert alert-danger">Erreur serveur, Contactez l\'administrateur</div>';
    }
}
?>
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Formulaire d'ajout d'un role</div>
        <div class="panel-body">
            <form method="post" action="controller/RolesController.php">
                <div class="form-group">
                    <label class="control-label">Libelle</label>
                    <input class="form-control" type="text" name="libelle" id="libelle" required="required"/>
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="valider" value="Envoyer"/>
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>