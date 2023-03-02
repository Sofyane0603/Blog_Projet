<?php
session_start();
$_SESSION['is-connected'] = false;

// Redirection
header('location: Connexion.php');