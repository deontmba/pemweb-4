<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Submitted</title>
</head>
<body>
    <h1>Data yang Dimasukkan:</h1>

    <?php
    $npm = $_POST['npm'];
    $nama = strtoupper($_POST['nama']); 
    $alamat = strtoupper($_POST['alamat']); 
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $hobi = $_POST['hobi'];

    echo "<strong>NPM:</strong> " . htmlspecialchars($npm) . "<br>";
    echo "<strong>Nama:</strong> " . htmlspecialchars($nama) . "<br>";
    echo "<strong>Alamat:</strong> " . htmlspecialchars($alamat) . "<br>";
    echo "<strong>Tempat Lahir:</strong> " . htmlspecialchars($tempat_lahir) . "<br>";
    echo "<strong>Tanggal Lahir:</strong> " . htmlspecialchars($tanggal_lahir) . "<br>";
    echo "<strong>Jenis Kelamin:</strong> " . htmlspecialchars($jenis_kelamin) . "<br>";
    echo "<strong>Hobi:</strong> " . htmlspecialchars($hobi) . "<br>";
    ?>

</body>
</html>
