<?php
session_start();

if(!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

// Include your database connection here

// Get schedule details based on ID from $_GET['id']
// $schedule_id = $_GET['id'];
// $schedule_details = getScheduleDetails($schedule_id);

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Proses update jadwal rekaman ke database
    // include your database connection here
    // updateRecordingSchedule($_POST['id'], $_POST['date'], $_POST['time'], $_POST['type']);
    // Redirect to dashboard or display success message
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Schedule</title>
</head>
<body>
    <h2>Edit Schedule</h2>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $schedule_id; ?>">
        <label>Date:</label><br>
        <input type="date" name="date" value="<?php echo $schedule_details['date']; ?>" required><br>
        <label>Time:</label><br>
        <input type="time" name="time" value="<?php echo $schedule_details['time']; ?>" required><br>
        <label>Type:</label><br>
        <input type="text" name="type" value="<?php echo $schedule_details['type']; ?>" required><br><br>
        <input type="submit" value="Update Schedule">
    </form>
</body>
</html>