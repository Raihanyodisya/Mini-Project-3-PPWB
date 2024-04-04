<?php
session_start();
include 'database.php';
$conn = connectDB();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "SELECT * FROM tabel_login WHERE username = ? AND password = ? AND role = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $role);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['logged_in'] = true;
        $_SESSION['role'] = $role;
        if($role === 'admin') {
            header("Location: dashboardadmin.php");
        } else {
            header("Location: dashboarduser.php");
        }
        exit;
    } else {
        $error = "Username, password, atau role salah!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h2 class="text-center">Login</h2>
                    </div>
                    <div class="card-body">
                        <?php if(isset($error)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>
                        <form method="post">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="form-group">
                                <label>Role:</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" id="adminRadio" value="admin" required>
                                    <label class="form-check-label" for="adminRadio">Admin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="role" id="userRadio" value="user" required>
                                    <label class="form-check-label" for="userRadio">User</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark btn-block">Login</button>
                        </form>
                        <div class="text-center mt-3">
                            <a href="registeruser.php" class="btn btn-link">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>