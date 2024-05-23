<?php
include '../includes/data.php';

$file = '../data/inventory.txt';
$inventorydata = readData($file);

if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    unset($inventorydata[$id]);
    $inventorydata = array_values($inventorydata); // Re-index array after deletion
    writeData($file, $inventorydata);
}

header("Location: index3.php");
?>