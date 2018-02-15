<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Users</title>
    <link rel="stylesheet" href="public/bootstrap-cerulean.min.css"/>
    <script type="text/javascript" language="JavaScript" src="public/js/script.js"></script>
</head>
<body>
<?php require_once "menu.php";?>
<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Liste des Users</div>
        <div class="panel-body">
            <table class="table table-bordered table-responsive table-striped">
                <tr class="success">
                    <td>Identifiant de l'User</td>
                    <td>Nom de l'User</td>
                    <td>Prenom de l'User</td>
                    <td>Action</td>
                    <td>Action</td>
                    <td>Action</td>
                </tr>
                <?php
                while($ligne = mysqli_fetch_object($liste)){
                    echo "<tr class='danger'>
                                            <td>".$ligne->idU."</td>
                                            <td>".$ligne->nom."</td>
                                            <td>".$ligne->prenom."</td>
                                            <td><a href='?page=edituser&id=".$ligne->idU."'>Editer</a></td>
                                            <td><a href='controller/UserController.php?id=".$ligne->idU."' onClick='return confirmation();'>Supprimer</a></td>
                                            <td><a href='?page=listerolesuser&id=".$ligne->idU."'>Role(s) attribué(s)</a></td>
                                        </tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>