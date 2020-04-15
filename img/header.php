<?php
session_start(); 
if(!isset($_SESSION["id_petugas"])){
  header("Location: http://localhost/siperpus/login/index.php");
  exit;
}
?>
<!DOCTYPE html>
<html>

<head>
  <script src="http://localhost/siperpus/asset/jquery.js"></script>
  <link rel="stylesheet" href="http://localhost/siperpus/asset/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/siperpus/asset/all.css">
  <link rel="stylesheet" href="http://localhost/siperpus/asset/fontawesome/css/all.min.css">
  <title>SIPERPUS</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><i class="fas fa-book-reader"></i> SIPERPUS | Hai, Admin</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="http://localhost/siperpus/index.php">Dashboard</a>
        <a class="nav-item nav-link" href="http://localhost/siperpus/buku/index.php">Buku</a>
        <a class="nav-item nav-link" href="http://localhost/siperpus/anggota/index.php">Anggota</a>
        <a class="nav-item nav-link" href="http://localhost/siperpus/transaksi/index.php">Peminjaman</a>
        <a class="nav-item nav-link" href="http://localhost/siperpus/login/logout.php">Logout</a>
      </div>
    </div>
  </nav>
</body>

</html>
