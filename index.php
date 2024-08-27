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
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome to the Home Page</h2>
        <?php if (isset($_SESSION['username'])): ?>
            <div class="alert alert-success mt-4" role="alert">
                Good <?php echo (date("H") < 12) ? "morning" : ((date("H") < 18) ? "afternoon" : "evening"); ?>, <?php echo htmlspecialchars($_SESSION['username']); ?>! You are logged in.
            </div>
            <a href="dashboard.php" class="btn btn-primary w-100 mt-3">Go to Dashboard</a>
            <a href="logout.php" class="btn btn-secondary w-100 mt-3">Logout</a>
        <?php else: ?>
            <div class="alert alert-warning mt-4" role="alert">
                You are not logged in.
            </div>
            <a href="login.php" class="btn btn-primary w-100 mt-3">Login</a>
            <a href="register.php" class="btn btn-secondary w-100 mt-3">Register</a>
        <?php endif; ?>
    </div>
</body>
</html>
