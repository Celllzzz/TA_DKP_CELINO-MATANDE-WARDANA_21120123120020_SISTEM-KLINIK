<?php
require_once 'session.php';

session_unset();
session_destroy();

header('Location: /TA_DKPCelino/login.php');
exit();
?>
