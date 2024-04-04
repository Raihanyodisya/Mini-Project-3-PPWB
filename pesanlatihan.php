<?php
session_start();

include 'database.php';
$conn = connectDB();

$date = $time = $nama = $kontak = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = $_POST['date'];
    $time = $_POST['time'];
    $nama = $_POST['nama'];
    $kontak = $_POST['kontak']; 

    $sql = "INSERT INTO reservation (nama, date, time, kontak, reservation_type) VALUES (?, ?, ?, ?, 'latihan')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nama, $date, $time, $kontak);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Reservasi latihan berhasil.');</script>";
    } else {
        echo "<script>alert('Gagal melakukan reservasi latihan.');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Latihan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Studio Rekaman - Reservasi Latihan</h1>
    </header>
    <nav>
        <a href="dashboarduser.php">Dashboard</a>
        <a href="pesanrekaman.php">Reservasi Rekaman</a>
        <a href="logout.php">Logout</a>
    </nav>
    <div class="container">
        <h2>Reservasi Latihan</h2>
        <form method="post">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="date">Tanggal:</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="time">Waktu:</label>
                <input type="time" class="form-control" id="time" name="time" required>
            </div>
            <div class="form-group">
                <label for="kontak">Kontak:</label>
                <input type="text" class="form-control" id="kontak" name="kontak" required>
            </div>
            <button type="submit" class="btn btn-primary">Reservasi</button>
        </form>
    </div>
</body>
</html>