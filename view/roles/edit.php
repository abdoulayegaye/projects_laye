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
            <form method="post" action="controller/RolesController.php">
                <div class="form-group">
                    <label class="control-label">Nom</label>
                    <input class="form-control" type="text" name="lib" id="lib" value="<?php echo $role->libR; ?>" required="required"/>
                    <input type="hidden" name="id" value="<?php echo $role->idR; ?>">
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