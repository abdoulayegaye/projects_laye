<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout d'un User</title>
    <link rel="stylesheet" href="public/bootstrap-cerulean.min.css"/>
</head>
<body>
<?php require_once "menu.php";?>
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Formulaire d'édition d'un user</div>
        <div class="panel-body">
            <form method="post" action="controller/UserController.php">
                <div class="form-group">
                    <label class="control-label">Nom</label>
                    <input class="form-control" type="text" name="nom" id="nom" value="<?php echo $user->nom; ?>" required="required"/>
                    <input type="hidden" name="id" value="<?php echo $user->idU; ?>">
                </div>
                <div class="form-group">
                    <label class="control-label">Prenom</label>
                    <input class="form-control" type="text" name="prenom" id="prenom" value="<?php echo $user->prenom; ?>" required="required"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Login</label>
                    <input class="form-control" type="text" name="login" id="login" value="<?php echo $user->login; ?>" required="required"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Password</label>
                    <input class="form-control" type="text" name="password" id="password" value="<?php echo $user->password; ?>" required="required"/>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" name="modifier" value="Modifier"/>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>