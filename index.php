<?php
require_once 'model/DB.php';
require_once 'model/RolesDB.php';
require_once 'model/UserDB.php';
require_once 'model/Roles_UserDB.php';
if(isset($_GET['page'])){
    switch($_GET['page']){
        case 'adduser':
            require_once 'view/user/add.php';
            break;
        case 'listeuser':
            $liste = listeUser();
            require_once 'view/user/liste.php';
            break;
        case 'addroles':
            require_once 'view/roles/add.php';
            break;
        case'listeroles':
            $liste = listeRoles();
            require_once 'view/roles/liste.php';
            break;
        case 'edituser':
            $user = getUserById($_GET['id']);
            $user = mysqli_fetch_object($user);
            require_once 'view/user/edit.php';
            break;
        case 'editroles':
            $role = getRolesById($_GET['id']);
            $role = mysqli_fetch_object($role);
            require_once 'view/roles/edit.php';
            break;
        case 'addrolesuser':
            $users = listeUser();
            $roles = listeRoles();
            require_once 'view/user_roles/add.php';
            break;
        case'listerolesuser':
            $list = getRolesByIdU($_GET['id']);
            require_once 'view/user_roles/liste.php';
            break;
        default:
            header('location:index.php');
            break;
    }
}else{
    require_once 'menu.php';
}
?>