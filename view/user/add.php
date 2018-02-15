<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout d'un User</title>
    <link rel="stylesheet" href="public/bootstrap-cerulean.min.css"/>
</head>
<body>
<?php require_once "menu.php";?>
<?php
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
        <div class="panel-heading">Formulaire d'ajout d'un user</div>
        <div class="panel-body">
            <form method="post" action="controller/UserController.php">
                <div class="form-group">
                    <label class="control-label">Nom</label>
                    <input class="form-control" type="text" name="nom" id="nom" required="required"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Prenom</label>
                    <input class="form-control" type="text" name="prenom" id="prenom" required="required"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Login</label>
                    <input class="form-control" type="text" name="login" id="login" required="required"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Password</label>
                    <input class="form-control" type="password" name="password" id="password" required="required"/>
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