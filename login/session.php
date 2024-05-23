<?php
session_start();

function checkLogin() {
    if (!isset($_SESSION['username'])) {
        header('Location: /TA_DKPCelino/login.php');
        exit();
    }
}
?>
