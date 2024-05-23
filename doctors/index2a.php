<?php
include '../includes/header.php';
include '../login/session.php';
checkLogin();
?>

<style>

    #tambahdata {
    border: 2px solid #007a7a;
    width: 30%;
    margin: 20px auto; /* Mengatur margin atas dan bawah menjadi 20px, dan margin kiri dan kanan secara otomatis */
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
#tambahdata input[type="submit"] {
    margin-bottom: 15px;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

#tambahdata input[type="submit"] {
    background-color: #007a7a;
    color: white;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

#tambahdata input[type="submit"]:hover {
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

        <label for="id">Id Dokter:</label>
        <input type="number" name="id" placeholder="Id Dokter" required><br>


        <label for="name">Nama Dokter:</label>
        <input type="text" name="name" placeholder="Nama Dokter" required><br>

        <label for="specialty">Spesialisasi:</label>
        <input type="text" name="specialty" placeholder="Spesialis" required><br>

        <label for="schedule">Jadwal:</label>
        <input type="text" name="schedule" placeholder="Jadwal" required><br>

        <label for="time">Waktu:</label>
        <input type="text" name="time" placeholder="Waktu" required><br>
        
        <input type="submit" value="Tambah Dokter">

        <button id="backButton" onclick="window.location.href='index2.php'">Kembali ke Data Dokter</button>
    </form>
</div>