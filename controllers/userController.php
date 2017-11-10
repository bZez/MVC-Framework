<?php

switch ($_GET['users']) {
    case "create":
    include ('views/createUserView.php');
    break;

    case "edit":
    include ('views/editUserView.php');
    break;

    case "list":
        include ('views/listUserView.php');
        break;

    case "createAction":
        include ('views/createAction.php');
        break;
    default:
        echo 'Problème de controller user';
}