<?php 

include ('config.php');
include ('functions.php');

if (isset($_GET['tickets']) && $_GET['tickets'] != null) {
    include ('controllers/ticketController.php');
    echo "<br>Controlleur Ticket avec la valeur: ". $_GET['tickets']."";
}
else if  (isset($_GET['users']) && $_GET['users'] != null) {
    include ('controllers/userController.php');
    echo "<br>Controlleur User avec la valeur: ". $_GET['users']."";
}
else if  (isset($_GET['manage']) && $_GET['manage'] != null) {
    include ('controllers/manageController.php');
    echo "<br>Controlleur Manage avec la valeur: ". $_GET['manage']."";
}
else {
    include ('views/default.php');
}