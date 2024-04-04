<?php
session_start();

include 'database.php';
$conn = connectDB();

$sql = "SELECT nama, kontak, date, time, reservation_type FROM reservation";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="stylesDA.css">
</head>
<body>
    <div class="dashboard-container">
        <header>
            <h1>Admin Dashboard</h1>
        </header>
        <main>
            <a href="tambahjadwaladmin.php" class="btn btn-primary">Add New Schedule</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
            <br><br>
            <div class="schedule-table">
                <h2>Recording Schedule</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Reservasi</th>
                            <th>Kontak</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["nama"] . "</td>";
                                echo "<td>" . $row["date"] . "</td>";
                                echo "<td>" . $row["time"] . "</td>";
                                echo "<td>" . $row["reservation_type"] . "</td>";
                                echo "<td>" . $row["kontak"] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Tidak ada jadwal reservasi.</td></tr>";
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>