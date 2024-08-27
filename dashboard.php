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
</head>
<body>
    <div class="container mt-5">
        <h2>Dashboard</h2>
        <div class="alert alert-info" role="alert">
            Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!
        </div>
        <a href="logout.php" class="btn btn-secondary">Logout</a>
    </div>
</body>
</html>
