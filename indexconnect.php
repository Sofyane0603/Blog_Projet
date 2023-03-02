<?php
session_start();
if (isset($_SESSION['is-connected']) && $_SESSION['is-connected'])  {
    require 'template/header-connec.php';
    require 'template/allPost.php';
}
else {
    header('location: index.php');
}
?>

