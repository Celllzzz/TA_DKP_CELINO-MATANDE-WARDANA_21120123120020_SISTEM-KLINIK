<?php
include '../includes/data.php';

$file = '../data/patients.txt';
$patients = readData($file);

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    unset($patients[$id]);
    $patients = array_values($patients); // Re-index array after deletion
    writeData($file, $patients);
}

header("Location: index1.php");
?>
