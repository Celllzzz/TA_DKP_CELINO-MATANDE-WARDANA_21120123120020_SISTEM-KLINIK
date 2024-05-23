<?php
include '../includes/header.php';
include '../includes/data.php';

require_once '../login/session.php';
checkLogin();

$file = '../data/patients.txt';
$patients = readData($file);
?>


<style>
    

    #rekamMedis {
        width: 80%;
        max-width: 800px;
        padding: 20px;
        margin: 20px auto;
        background-color: #fff;
        border: 2px solid #007a7a;
        border-radius: 10px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    h2 {
        color: #007a7a;
        text-align: center;
        margin-bottom: 20px;
    }

    p {
        font-size: 16px;
        line-height: 1.5;
        margin: 10px 0;
    }

    #backButton {
        display: block;
        margin: 20px auto;
        padding: 10px 20px;
        background-color: #007a7a;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
    }

    #backButton:hover {
        background-color: #005f5f;
    }
</style>

<div id="rekamMedis">
    <?php
    // Mendapatkan ID pasien dari inputan form sebelumnya
    $id = $patient->getId();

    // Tampilkan rekam medis pasien sesuai dengan ID
    echo "<h2>Rekam Medis</h2>";
    
    // Ambil data pasien dari variabel $patients berdasarkan ID
    $patient = $patients[$id];
    
    // Tampilkan data pasien
    echo "<p>ID: " . $patient->getId() . "</p>";
    echo "<p>Nama: " . $patient->getName() . "</p>";
    echo "<p>Usia: " . $patient->getAge() . "</p>";
    echo "<p>Alamat: " . $patient->getAddress() . "</p>";
    echo "<p>Nomor Telepon: " . $patient->getPhoneNumber() . "</p>";
    echo "<p>Tanggal: " . $patient->getDate() . "</p>";
    echo "<p>Jenis Kelamin: " . $patient->getGender() . "</p>";
    echo "<p>Riwayat Keluarga: " . $patient->getFamilyHistory() . "</p>";
    echo "<p>Kondisi Masa Lalu: " . $patient->getPastConditions() . "</p>";
    echo "<p>Riwayat Bedah: " . $patient->getSurgicalHistory() . "</p>";
    echo "<p>Tanggal & Waktu Kunjungan: " . $patient->getVisitDateTime() . "</p>";
    echo "<p>Keluhan Utama: " . $patient->getChiefComplaint() . "</p>";
    echo "<p>Diagnosis: " . $patient->getDiagnosis() . "</p>";
    echo "<p>Rencana Perawatan: " . $patient->getTreatmentPlan() . "</p>";
    echo "<p>Hasil Pemeriksaan Fisik: " . $patient->getPhysicalExamResults() . "</p>";
    echo "<p>Obat yang Diresepkan: " . $patient->getPrescribedMedications() . "</p>";
    echo "<p>Dosis Obat: " . $patient->getMedicationDosage() . "</p>";
    echo "<p>Instruksi Khusus: " . $patient->getSpecialInstructions() . "</p>";
    echo "<p>Prosedur Medis: " . $patient->getMedicalProcedures() . "</p>";
    ?>
    <button id="backButton" onclick="window.location.href='index1.php'">Kembali ke Data Pasien</button>
</div>



