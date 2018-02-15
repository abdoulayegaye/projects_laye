<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>liste des Roles</title>
    <link rel="stylesheet" href="public/bootstrap-cerulean.min.css"/>
    <script type="text/javascript" language="JavaScript" src="public/js/script.js"></script>
</head>
<body>
<?php require_once "menu.php";?>
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Liste des Roles</div>
        <div class="panel-body">
            <table class="table table-bordered table-responsive table-striped">
                <tr class="warning">
                    <td>Identifiant du Role</td>
                    <td>Libelle du Role</td>
                    <td>Action</td>
                    <td>Action</td>
                </tr>
                <?php
                while($ligne = mysqli_fetch_object($liste)){
                    echo "<tr class='danger'>
                                            <td>".$ligne->idR."</td>
                                            <td>".$ligne->libR."</td>
                                            <td><a href='?page=editroles&id=".$ligne->idR."'>Editer</a></td>
                                            <td><a href='controller/RolesController.php?id=".$ligne->idR."' onClick='return confirmation();'>Supprimer</a></td>
                                        </tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>