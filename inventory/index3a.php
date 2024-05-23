<?php
include '../includes/header.php';
require_once '../login/session.php';
checkLogin();
?>

<style>
    #tambahdata {
    border: 2px solid #007a7a;
    width: fit-content;
    margin: 20px auto; 
    padding: 20px;
    border-radius: 10px;
    background-color: #fff;
}

#tambahdata form {
    display: flex;
    flex-direction: column;
}

#tambahdata label {
    margin-bottom: 10px;
}

#tambahdata input[type="text"],
#tambahdata input[type="number"] {
    padding: 8px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#tambahdata input[type="submit"],
#tambahdata button {
    padding: 10px 20px;
    background-color: #007a7a;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}

#tambahdata input[type="submit"]:hover,
#tambahdata button:hover {
    background-color: #005f5f;
}

#backButton {
    margin-top: 10px;
    padding: 8px 15px;
    background-color: #ccc;
    color: #333;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

    #backButton:hover {
    background-color: #bbb;
}

</style>

<div id="tambahdata">
    <form action="add.php" method="post">

        <label for="id">Id Obat:</label>
        <input type="Number" name="id" placeholder="Id Obat" required><br>

        <label for="drug_name">Nama Obat:</label>
        <input type="text" name="drug_name" placeholder="Nama Obat" required><br>

        <label for="number">Jumlah:</label>
        <input type="number" name="quantity" placeholder="Jumlah" required><br>

        <input type="submit" value="Tambah Obat">

        <button id="backButton" onclick="window.location.href='index3.php'">Kembali ke Data Obat</button>
    </form>
</div>