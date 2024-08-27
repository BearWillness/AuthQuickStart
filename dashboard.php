<?php
include('config.php');

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
        <h2>Dashboard</h2>
        <div class="alert alert-info mt-4" role="alert">
            Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!
        </div>
        <p class="mt-4">Here’s your recent activity:</p>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Logged in at <?php echo date('Y-m-d H:i:s'); ?></li>
            <li class="list-group-item">Visited the dashboard</li>
        </ul>
        <a href="logout.php" class="btn btn-secondary w-100 mt-3">Logout</a>
    </div>
</body>
</html>
