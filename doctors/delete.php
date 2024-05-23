<?php
include '../includes/data.php';

$file = '../data/doctors.txt';
$doctors = readData($file);

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    unset($doctors[$id]);
    $doctors = array_values($doctors); // Re-index array after deletion
    writeData($file, $doctors);
}

header("Location: index2.php");
?>