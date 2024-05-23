<?php
include '../includes/header.php';
require_once '../login/session.php';
checkLogin();
?>

<style>

    #tambahdata {
        border: 2px solid #007a7a;
        width: 80%;
        max-width: 600px;
        padding: 20px;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-top: 10px;
        font-weight: bold;
        color: #007a7a;
    }

    input, textarea {
        margin-top: 5px;
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        width: 100%;
        box-sizing: border-box;
    }

    input[type="radio"] {
        margin: 0 5px 0 0;
        width: auto;
    }

    input[type="submit"] {
        background-color: #007a7a;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        margin-top: 20px;
    }

    input[type="submit"]:hover {
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

        <label for="id">Id Pasien:</label>
        <input type="number" name="id" placeholder="Id Pasien" required><br>

        <label for="name">Nama Pasien:</label>
        <input type="text" name="name" placeholder="Nama Pasien" required><br>

        <label for="age">Umur:</label>
        <input type="number" name="age" placeholder="Usia" required><br>

        <label for="address">Alamat:</label>
        <input type="text" name="address" placeholder="Alamat" required><br>

        <label for="phoneNumber">No. Handphone:</label>
        <input type="number" name="phoneNumber" placeholder="No. Handphone" required><br>

        <label for="date">Tanggal Berobat:</label>
        <input type="date" name="date" placeholder="Tanggal" required><br>

        <label for="gender">Jenis Kelamin:</label>
        <input type="radio" id="male" name="gender" value="Laki-laki">
        <label for="male">Laki-laki</label>
        <input type="radio" id="female" name="gender" value="Perempuan">
        <label for="female">Perempuan</label><br>

        <label for="familyHistory">Riwayat Penyakit Keluarga:</label><br>
        <textarea id="familyHistory" name="familyHistory"></textarea><br>

        <label for="pastConditions">Penyakit atau Kondisi Medis Sebelumnya:</label><br>
        <textarea id="pastConditions" name="pastConditions"></textarea><br>

        <label for="surgicalHistory">Riwayat Operasi atau Prosedur Bedah:</label><br>
        <textarea id="surgicalHistory" name="surgicalHistory"></textarea><br>

        <label for="visitDateTime">Tanggal dan Waktu Kunjungan:</label><br>
        <input type="datetime-local" id="visitDateTime" name="visitDateTime"><br>

        <label for="chiefComplaint">Keluhan Utama saat Kunjungan:</label><br>
        <textarea id="chiefComplaint" name="chiefComplaint"></textarea><br>

        <label for="diagnosis">Diagnosis:</label><br>
        <textarea id="diagnosis" name="diagnosis"></textarea><br>

        <label for="treatmentPlan">Rencana Perawatan dan Tindak Lanjut:</label><br>
        <textarea id="treatmentPlan" name="treatmentPlan"></textarea><br>

        <label for="physicalExamResults">Hasil Pemeriksaan Fisik:</label><br>
        <textarea id="physicalExamResults" name="physicalExamResults"></textarea><br>

        <label for="prescribedMedications">Daftar Obat yang Diresapkan:</label><br>
        <textarea id="prescribedMedications" name="prescribedMedications"></textarea><br>

        <label for="medicationDosage">Dosis dan Cara Pemberian Obat:</label><br>
        <textarea id="medicationDosage" name="medicationDosage"></textarea><br>

        <label for="specialInstructions">Instruksi Khusus Terkait Pengobatan:</label><br>
        <textarea id="specialInstructions" name="specialInstructions"></textarea><br>

        <label for="medicalProcedures">Prosedur Medis yang Dilakukan:</label><br>
        <textarea id="medicalProcedures" name="medicalProcedures"></textarea><br>

        <input type="submit" value="Tambah Pasien">
        <button id="backButton" onclick="window.location.href='index1.php'">Kembali ke Data Pasien</button>
    </form>
</div>

<?php include '../includes/footer.php'; ?>