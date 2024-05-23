<?php 
include 'includes/header.php';
include 'login/session.php';
checkLogin();
?>

<style>
    h1{
        display: flex;
        justify-content: center;
        color: white;
    }

    p {
        display: flex;
        justify-content: center;
        color: white;
    }

</style>

<h1>Sistem Klinik Medika Utama</h1>
<p>Kelola data pasien, jadwal dokter, dan inventaris obat.</p>

<?php include 'includes/footer.php'; ?>