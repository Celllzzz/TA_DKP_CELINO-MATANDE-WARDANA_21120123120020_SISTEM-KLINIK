<?php
include '../includes/header.php';
include '../includes/data.php';

require_once '../login/session.php';
checkLogin();

$file = '../data/patients.txt';
$patients = readData($file);
?>

<style>
    body {
        font-family: 'Roboto', sans-serif;
        background: rgb(140,220,200);
        background: linear-gradient(90deg, rgba(140,220,200,1) 17%, rgba(0,160,160,1) 49%, rgba(0,212,255,1) 97%);
        color: #333;
        margin: 0;
        padding: 0;
    }

    h2 {
        margin: 20px;
        color: #007a7a;
    }

    h4 {
        margin-left: 20px;
    }

    button {
        margin: 20px;
        padding: 10px 20px;
        background-color: #007a7a;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    button a {
        text-decoration: none;
        color: white;
        display: block;
    }

    button:hover {
        background-color: #005f5f;
    }

    table {
        margin: 20px;
        width: 90%;
        border-collapse: collapse;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }

    table th, table td {
        padding: 15px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    table th {
        background-color: #007a7a;
        color: white;
    }

    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    table tr:hover {
        background-color: #f1f1f1;
    }

    #patientInput {
        text-align: center;
    }

    #hapusItem, #tampilkanRekamMedis {
        background-color: #e74c3c;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        margin-right: 5px;
    }

    #tampilkanRekamMedis {
        background-color: #3498db;
    }

    #hapusItem:hover, #tampilkanRekamMedis:hover {
        opacity: 0.8;
    }

    #tambahdata {
        border: 2px solid #007a7a;
        width: fit-content;
        margin: 20px;
        padding: 10px;
        border-radius: 10px;
        background-color: #fff;
    }
</style>

<h2>Data Pasien</h2>

<h4>Tambah data pasien:</h4>
<button onclick="window.location.href='index1a.php'">Tambah Pasien Baru</button>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Usia</th>
        <th>Alamat</th>
        <th>No. Handphone</th>
        <th>Tanggal Berobat</th>
        <th>Jenis Kelamin</th>
        <th>Action</th>
    </tr>
    <?php foreach ($patients as $id => $patient) { ?>
        <tr id="patientInput">
            <td><?php echo $patient->getId() ; ?></td>
            <td><?php echo $patient->getName() ; ?></td>
            <td><?php echo $patient->getAge(); ?></td>
            <td><?php echo $patient->getAddress(); ?></td>
            <td><?php echo $patient->getPhoneNumber(); ?></td>
            <td><?php echo $patient->getDate() ; ?></td>
            <td><?php echo $patient->getGender(); ?></td>
            <td>
                <form action="delete.php" method="post" style="display:inline">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input id="hapusItem" type="submit" name="delete" value="Hapus">
                </form>

                <form action="record.php" method="post" style="display:inline">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input id="tampilkanRekamMedis" type="submit" name="show" value="Rekam Medis">
                </form>
            </td>
        </tr>
    <?php } ?>
</table>

<?php include '../includes/footer.php'; ?>
