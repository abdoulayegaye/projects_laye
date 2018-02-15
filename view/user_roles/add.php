<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Attribution d'un role à un user</title>
    <link rel="stylesheet" href="public/bootstrap-cerulean.min.css"/>
</head>
<body>
<?php
require_once 'menu.php';
if(isset($_GET['ok'])){
    if($_GET['ok'] == 1){
        echo '<div class="alert alert-success" style="text-align: center;">
                                        Donnees ajoutees avec succes
                                  </div>';
    }else{
        echo '<div class="alert alert-danger">Erreur service, Contactez l\'administrateur</div>';
    }
}
?>
<div class="container" style="margin-top: 75px;">
    <div class="panel panel-info">
        <div class="panel-heading">Formulaire d'attribution d'un role à un user</div>
        <div class="panel-body">
            <form method="post" action="controller/Roles_UserController.php">
                <div class="form-group">
                    <label class="control-label">Users</label>
                    <select class="form-control" name="idU">
                        <option value="">Choisissez un User</option>
                        <?php
                        while($usr = mysqli_fetch_object($users)){
                            echo "<option value='".$usr->idU."'>".$usr->nom."  ".$usr->prenom."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">Roles</label>
                    <select class="form-control" name="idR">
                        <option value="">Choisissez un Role</option>
                        <?php
                        while($role = mysqli_fetch_object($roles)){
                            echo "<option value='".$role->idR."'>".$role->libR."</option>";
                        }
                        ?>
                    </select>
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