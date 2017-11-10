<?php
include ('views/headers/default.php');
?>

    <h3>Ajouter un ticket</h3>
    <form id='addticket' class="form-inline" method="POST">
        <label>Description:</label><br>
        <input class="form-control" type="text" name='description' placeholder="Détails..."><br><br>
        <label>User:</label><br>
        <select class="form-control" type="email" name='email'></select><br><br>
        <label>Skills:</label><br>
        <select class="form-control" type="text" name='login' ></select><br><br>

        <input class="btn btn-primary" type="submit" value="Ajouter !">
    </form>

<?php
include ('views/footers/default.php');
?>