<?php
// Bắt buộc người dùng phải đăng nhập
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Quản trị</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>
    <header class="header">
        <h1>Dashboard - Quản trị</h1>
        <nav class="navbar">
            <a href="../../index.php">Trang chủ</a>
            <a href="news/index.php">Quản lý bài viết</a>
            <a href="logout.php">Đăng xuất</a>
        </nav>
    </header>

    <main class="dashboard">
        <h2>Chào mừng bạn đến với bảng điều khiển!</h2>
        <div class="dashboard-links">
            <a href="news/index.php" class="btn">Quản lý bài viết</a>
            <a href="profile.php" class="btn">Quản lý tài khoản</a>
            <a href="settings.php" class="btn">Cài đặt</a>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2024 TLU News. All Rights Reserved.</p>
    </footer>
</body>
</html>
