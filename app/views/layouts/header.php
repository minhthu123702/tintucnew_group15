<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRANG TIN TỨC NEWS 24H</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    /* Header với hiệu ứng 3D */
    .header-container {
      background: linear-gradient(145deg, #9cf1e2, #a1e3d8);
      padding: 10px 20px;
      height: 170px;
      display: flex;
      align-items: center;
      box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2), -4px -4px 10px rgba(255, 255, 255, 0.7);
      border-radius: 10px;
    }

    .logo {
      margin-left: 10px;
      display: flex;
      align-items: center;
      gap: 350px;
    }

    .logo img {
      height: 150px;
    }

    /* Navbar với hiệu ứng 3D */
    .navbar {
      background: linear-gradient(145deg, #f5eb83, #f1f5d4);
      border-bottom: 1px solid #ddd;
      box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.1), -4px -4px 8px rgba(255, 255, 255, 0.6);
      border-radius: 10px;
    }

    .navbar .navbar-brand {
      font-weight: bold;
    }

    .nav-link {
      font-size: 16px;
      color: #555;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      text-decoration: underline;
      color: #333;
      transform: translateY(-2px);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .form-control {
      border-radius: 30px;
      box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
    }

    .btn-outline-secondary {
      border-radius: 30px;
      font-size: 15px;
      padding: 5px 10px 5px 8px;
      width: 150px;
      background: #e0f7fa;
      border: none;
      transition: all 0.3s ease;
    }

    .btn-outline-secondary:hover {
      background: #00acc1;
      color: white;
    }

    .header-text {
      font-size: 50px;
      font-weight: bold;
      color: #333;
      text-transform: uppercase;
      text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.1), -3px -3px 5px rgba(255, 255, 255, 0.7);
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header class="header-container">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="header-text">
        TIN TỨC MỚI
      </div>

      <!-- Liên kết ĐĂNG NHẬP -->
      <a href="../admin/login.php" class="nav-link mx-2" style="color:gray">ĐĂNG NHẬP</a>
    </div>
  </header>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="w-100 px-4">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-around w-100">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">TRANG CHỦ</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              THỂ LOẠI
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Đời sống</a></li>
              <li><a class="dropdown-item" href="#">Giáo dục</a></li>
              <li><a class="dropdown-item" href="#">Chính trị</a></li>
              <li><a class="dropdown-item" href="#">Kinh tế</a></li>
            </ul>
          </li>
          <form class="d-flex" role="search" action="#" method="POST" style="width: 350px">
            <input class="form-control me-2" type="search" name="text" placeholder="Tìm kiếm" aria-label="Search" required>
            <button class="btn btn-outline-secondary" type="submit">TÌM KIẾM</button>
          </form>
          <li class="nav-item">
            <a class="nav-link active" aria-disabled="false" href="#">LIÊN HỆ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>

</html>
