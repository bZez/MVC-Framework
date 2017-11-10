<?php

switch ($_GET['tickets']) {
    case "add":
        include ('views/addTicketView.php');
        break;

    case "edit":
        include ('views/editTicketView.php');
        break;

    default:
        echo 'Problème de controller ticket';
}