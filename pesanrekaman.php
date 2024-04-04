<?php
session_start();

// Proses reservasi rekaman
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Logika reservasi rekaman
    // Redirect ke halaman dashboard atau tampilkan pesan sukses
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reservasi Rekaman</title>
    <link rel="stylesheet" type="text/css" href="../styles.css">
</head>
<body>
    <header>
        <h1>Studio Rekaman - Reservasi Rekaman</h1>
    </header>
    <nav>
        <a href="dashboarduser.php">Dashboard</a>
        <a href="pesanlatihan.php">Reservasi Latihan</a>
        <a href="logout.php">Logout</a>
    </nav>
    <div class="container">
        <h2>Reservasi Rekaman</h2>
        <form method="post">
            <!-- Form reservasi rekaman -->
            <input type="submit" value="Reservasi">
        </form>
    </div>
</body>
</html>