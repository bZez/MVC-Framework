<?php
include ('models/users.php');
include ('views/headers/default.php');
?>
<h3>Ajouter un Utilisateur</h3>
<form id='usercreate' class="form-inline" method="POST">
    <label>Prénom:</label><br>
    <input class="form-control" type="text" name='firstname' placeholder="Votre prénom..."><br><br>
    <label>Nom:</label><br>
    <input class="form-control" type="text" name='lastname' placeholder="Votre nom..."><br><br>
    <label>Type:</label><br>
    <select class="form-control" name='id_user_type'></select><br><br>
    <label>Mail:</label><br>
    <input class="form-control" type="email" name='email' placeholder="Votre mail..."><br><br>
    <label>Pseudo:</label><br>
    <input class="form-control" type="text" name='login' placeholder="Votre pseudo..."><br><br>
    <label>Mot de passe:</label><br>
    <input class="form-control" type=password name='password' placeholder="Votre mot de passe..."><br><br>
    <input class="btn btn-primary" type="submit" value="Ajouter !">
</form>

<?php
include ('views/footers/default.php');
?>