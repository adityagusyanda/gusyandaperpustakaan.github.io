<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
</head>
<body>
<center><h1>NAVIGASI MENU</h1></center>

<!-- Buka Navigasi Bar -->
<div class="container">
<div class="row">
<div class="col">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=menu">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=user">User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="?page=buku">Buku</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<br>
<br>
</div>
</div>
</div>
<!-- Tutup Navigasi Bar -->

<div class="container">
<div class="row">
<div class="col">
<?php
include ("koneksi.php");
  if (isset($_GET['page'])) {
    if ($_GET['page'] == 'buku') {
      include ('buku.php');
    }elseif ($_GET['page'] == 'user') {
      include ('user.php');
    }
  }
?>
</div>
</div>
</div>
<!-- Footer -->
<footer><h3 class="text-center mt-3 mb-3">ADITYA GUSYANDA</h3><footer>
<!-- Tutup Footer -->
</body>
<script src="bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>
</html>