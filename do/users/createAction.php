<?php

$_SESSION['flash'] = '<h1>C\'est tout bon</h1>';

header('Location:/'.$project_name.'/index.php?users=list');
