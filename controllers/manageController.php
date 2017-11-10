<?php

switch ($_GET['manage']) {
    case "add":
        include ('views/newManageView.php');
        break;

    case "edit":
        include ('views/editManageView.php');
        break;

    default:
        echo 'Problème de controller manage';
}