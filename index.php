<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Welcome to the Home Page</h2>

        <?php if (isset($_SESSION['username'])): ?>
            <div class="alert alert-success" role="alert">
                Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>! You are logged in.
            </div>
            <a href="dashboard.php" class="btn btn-primary">Go to Dashboard</a>
            <a href="logout.php" class="btn btn-secondary">Logout</a>
        <?php else: ?>
            <div class="alert alert-warning" role="alert">
                You are not logged in.
            </div>
            <a href="login.php" class="btn btn-primary">Login</a>
            <a href="register.php" class="btn btn-secondary">Register</a>
        <?php endif; ?>
    </div>
</body>
</html>
