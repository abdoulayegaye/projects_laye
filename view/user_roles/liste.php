<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste Roles User</title>
    <link rel="stylesheet" href="public/bootstrap-cerulean.min.css"/>
    <script type="text/javascript" language="JavaScript" src="public/js/script.js"></script>
</head>
<body>
<?php require_once "menu.php";?>

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Liste Roles User</div>
        <div class="panel-body">
            <table class="table table-bordered table-responsive table-striped">
                <tr class="active">
                    <td colspan="3">Role(s)</td>
                </tr>
                <?php
                while($lign = mysqli_fetch_object($list)){
                    echo "<tr class='info'>                                   
                                   <td>".$lign->libR."</td>
                          </tr>";
                }
                ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>