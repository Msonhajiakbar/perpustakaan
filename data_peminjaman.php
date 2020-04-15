<?php
session_start();

if( ! isset($_SESSION['username']))
{
    header("location:\belajar-login\index.php");
}

$koneksi = mysqli_connect("localhost","root","","perpustakaan");

$q = mysqli_query($koneksi, "SELECT * FROM datapeminjaman");

if(mysqli_connect_error()){
    echo"Koneksi database gagal : ". mysqli_connect_error();
}



if (isset($_POST["submit"]))
{
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $judul = $_POST["judul"];
    $tgl_pinjam = $_POST["tgl_pinjam"];
    $hari = $_POST["hari_pinjam"];

    $tgl_kembali = date('Y-m-d', strtotime("+$hari Day", strtotime(date($tgl_pinjam))));

    
    $query =("INSERT INTO datapeminjaman VALUES ('' , '$nama' , '$judul' , '$tgl_pinjam' , '$tgl_kembali')");
    
    $peminjaman =  mysqli_query($koneksi,$query);

    header("location:data_peminjaman.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>



    <title>Data Siswa</title>
</head>
<body>
<center>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"  style="margin:auto">
             <img src="logo.png" width="80" height="80" class="d-inline-block align-top" alt="">
                 <h3> PERPUSTAKAAN SMK TELKOM MALANG</h3>
        </a>
        </nav>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="margin:auto">
            <li class="nav-item active">
                <a class="nav-link" href="data_buku.php">Data Buku<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="data_siswa.php">Data Siswa<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="data_peminjaman.php">Data Peminjaman<span class="sr-only">(current)</span></a>
            </li>
            <li>
                <button type="button" class="btn btn-outline-danger"><a href="\belajar-login\" style="color: #d60000"> Back To Home</a></button>
            </li>
            </ul>
        </div>
        </nav>
</center>

<center>
</br>
<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#staticBackdrop">Tambah Data Peminjaman</button>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Peminjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="" method="post">
    <table>
            </tr>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Nama</label>
                </div>
                <select  name="nama" class="custom-select" id="inputGroupSelect01">
                    <?php 
                    $query = mysqli_query($koneksi, "SELECT * FROM datasiswa ");
                    while ($siswa = mysqli_fetch_assoc($query)): ?>

                    <option>

                    <?php
                    echo $siswa["nama"];
                    ?>

                    </option>
                    <?php endwhile; ?>
                </select>
                </div>
                </td>
                <td>

                </td>

            </tr>
            <tr>
            <td colspan="2">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Judul</label>
                </div>
                <select  name="judul" class="custom-select" id="inputGroupSelect01">
                    <?php 
                    $query2 = mysqli_query($koneksi, "SELECT * FROM databuku ");
                    while ($buku = mysqli_fetch_assoc($query2)): ?>

                    <option>

                    <?php
                    echo $buku["judul"];
                    ?>

                    </option>
                    <?php endwhile; ?>
                </select>
                </div>
                </td>
                <td>

                </td>

            </tr>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Tanggal Pinjam</span>
                </div>
                <input name="tgl_pinjam" type="date" class="form-control" placeholder="tgl_pinjam" aria-label="tgl_pinjam" aria-describedby="basic-addon1" value="<?php echo date("Y-m-d")?>" required>
                </div>
                </td>
                <td>

                </td>

            </tr>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Pinjam Untuk</span>
                </div>
                <input name="hari_pinjam" type="text" class="form-control" placeholder="hari_pinjam" aria-label="hari_pinjam" aria-describedby="basic-addon1" required>
                </div>
                </td>
                <td>

                </td>

            </tr>
        
            <tr style="text-align:center">
            <td>
                <button type="submit" name="submit" class="btn btn-primary">Tambah
                </button>
            </td>
    </table>
    </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>



</br>
</br>

<table  border="1" width="1200px" style="text-align:center" >
<tr>
    <th width="200px">
        Action
    </th>
    <th width="200px">
        Nama
    </th>
    <th width="200px">
        Judul
    </th>
    <th width="200px">
        Tanggal Pinjam
    </th>
    <th width="200px">
        Tanggal Kembali
    </th>
</tr>
        <?php $i=1;?>                
        <?php while($peminjaman = mysqli_fetch_assoc($q)) : ?>

        <tr style="text-align: center"> 
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary" ><a href="ubah_data_peminjaman.php?id=<?= $peminjaman["id"];?>" style="color: white">Ubah</a></button>
                    <button type="button" class="btn btn-secondary"><a href="hapus_data_peminjaman.php?id=<?= $peminjaman["id"];?>" style="color: white">Hapus</a></button>
                </div></td>
            <td><?php echo $peminjaman ["nama"] ?></td>
            <td><?php echo $peminjaman ["judul"] ?></td>
            <td><?php echo $peminjaman ["tgl_pinjam"] ?></td>
            <td><?php echo $peminjaman ["tgl_kembali"] ?></td>

        </tr>
        <?php $i++ ?>
        <?php endwhile; ?>
</table>
</center>  
  
    
</body>
</html>