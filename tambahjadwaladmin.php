<?php
session_start();

// if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
//     header("Location: login.php");
//     exit;
// }

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses tambah jadwal rekaman ke database
    // include your database connection here
    // addRecordingSchedule($_POST['date'], $_POST['time'], $_POST['type']);
    // Redirect to dashboard or display success message
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Schedule</title>
</head>
<body>
    <h2>Add New Schedule</h2>
    <form method="post">
        <label>Date:</label><br>
        <input type="date" name="date" required><br>
        <label>Time:</label><br>
        <input type="time" name="time" required><br>
        <label>Type:</label><br>
        <input type="text" name="type" required><br><br>
        <input type="submit" value="Add Schedule">
    </form>
</body>
</html>