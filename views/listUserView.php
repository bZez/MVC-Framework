<?php
include ('views/headers/default.php');
?>

Affiche la liste des utilisateurs

<?php messageFlash(); ?>
<table style="text-align:center">
<?php
include ('models/users.php');
foreach (getAllUsers($bdd) as $key => $value) {
    echo '<th>'.$key.'</th><tr><td> '.$value.'</td></tr>';
}
?>

</table>

<?php
include ('views/footers/default.php');
?>