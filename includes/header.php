<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Klinik Medika Utama</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background: rgb(140,220,200);
            background: linear-gradient(90deg, rgba(140,220,200,1) 17%, rgba(0,160,160,1) 49%, rgba(0,212,255,1) 97%);
            color: #333;
        }

        nav {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: whitesmoke;
            padding: 10px 20px;
            border-bottom: 2px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style: none;
            display: flex;
            align-items: center; /* Ensure all items are centered vertically */
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin-left: 20px;
            position: relative; /* Needed for dropdown positioning */
        }

        nav ul li a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s ease, border-radius 0.3s ease;
            padding: 5px 10px;
            display: flex; /* Ensure image and text are inline */
            align-items: center; /* Vertically center the content */
        }

        nav ul li a:hover {
            color: #007a7a;
            border: 2px solid rgba(140, 220, 200, 1);
            border-radius: 12px;
        }

        nav ul li img {
            vertical-align: middle;
            margin-left: 10px; /* Add some space between the text and the image */
        }

        nav ul li .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            min-width: 160px;
            top: 100%; /* Position the dropdown below the parent */
            left: 0; /* Align dropdown with the left edge of the parent */
        }

        nav ul li .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        nav ul li .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        nav ul li:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/TA_DKPCelino/index.php">Home</a></li>
            <li><a href="/TA_DKPCelino/patients/index1.php">Data Pasien</a></li>
            <li><a href="/TA_DKPCelino/doctors/index2.php">Jadwal Dokter</a></li>
            <li><a href="/TA_DKPCelino/inventory/index3.php">Inventaris Obat</a></li>
            <li class="dropdown">
                <a>
                    <img src="/TA_DKPCelino/user.png" alt="User Icon" width="30" height="30">
                </a>
                <div class="dropdown-content">
                    <a href="/TA_DKPCelino/login/logout.php">Log Out</a>
                </div>
            </li>
        </ul>
    </nav>
</body>
</html>
