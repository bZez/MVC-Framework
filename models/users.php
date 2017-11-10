<?php

function getAllUsers($bdd) {
	$result = $bdd->query('SELECT * FROM users');
	return $result->fetch_assoc();
	}

