<?php
include '../includes/header.php';
include '../includes/data.php';

require_once '../login/session.php';
checkLogin();

$file = '../data/doctors.txt';
$doctors = readData($file);
?>

<style>
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

table th,
table td {
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

#hapusItem{
    background-color: #e74c3c;
    color: white;
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    margin-right: 5px;
}

#hapusItem:hover{
    opacity: 0.8;
}

#tambahdata {
    border: 2px solid #007a7a;
    width: fit-content;
    margin: 20px auto; /* Membuat div berada di tengah halaman */
    padding: 10px;
    border-radius: 10px;
    background-color: #fff;
}
</style>

<h2>Jadwal Dokter</h2>

<h4>Tambah jadwal dokter:</h4>
<button onclick="window.location.href='index2a.php'">Tambah Jadwal Dokter</button>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Spesialis</th>
        <th>Jadwal</th>
        <th>Waktu</th>
        <th>Action</th>
    </tr>
    <?php foreach ($doctors as $id => $doctor) { ?>
        <tr id="patientInput">
            <td><?php echo $doctor->getId(); ?></td>
            <td><?php echo $doctor->getname(); ?></td>
            <td><?php echo $doctor->getspecialty(); ?></td>
            <td><?php echo $doctor->getschedule(); ?></td>
            <td><?php echo $doctor->gettime(); ?></td>
            <td>
                <form action="delete.php" method="post" style="display:inline">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <input id="hapusItem" type="submit" name="delete" value="Hapus">
                </form>
            </td>
        </tr>
    <?php } ?>
</table>

<?php include '../includes/footer.php'; ?>
