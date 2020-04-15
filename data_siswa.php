<?php
session_start();

if( ! isset($_SESSION['username']))
{
    header("location:\belajar-login\index.php");
}

$koneksi = mysqli_connect("localhost","root","","perpustakaan");

$query = mysqli_query($koneksi, "SELECT * FROM datasiswa ");



if(mysqli_connect_error()){
    echo"Koneksi database gagal : ". mysqli_connect_error();
}

if (isset($_POST["submit"]))
{
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $nis = $_POST["nis"];
    $kelas = $_POST["kelas"];
    $jurusan= $_POST["jurusan"];
    $email = $_POST["email"];
    
    $query =("INSERT INTO datasiswa VALUES ('$id' , '$nama' , '$nis' , '$kelas' , '$jurusan' , '$email')");
    
    $siswa =  mysqli_query($koneksi,$query);

    header("location:data_siswa.php");
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
<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#staticBackdrop">Tambah Data Siswa</button>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form action="" method="post">
    <table>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">ID</span>
                </div>
                <input name="id" type="text" class="form-control" placeholder="id" aria-label="id" aria-describedby="basic-addon1" required>
                </div>
                </td>
                <td>

                </td>

            </tr>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Nama</span>
                </div>
                <input name="nama" type="text" class="form-control" placeholder="nama" aria-label="nama" aria-describedby="basic-addon1" required>
                </div>
                </td>
                <td>

                </td>

            </tr>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">NIS</span>
                </div>
                <input name="nis" type="text" class="form-control" placeholder="nis" aria-label="nis" aria-describedby="basic-addon1" required>
                </div>
                </td>
                <td>

                </td>

            </tr>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Kelas</span>
                </div>
                <input name="kelas" type="text" class="form-control" placeholder="kelas" aria-label="kelas" aria-describedby="basic-addon1" required>
                </div>
                </td>
                <td>

                </td>

            </tr>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Jurusan</span>
                </div>
                <input name="jurusan" type="text" class="form-control" placeholder="jurusan" aria-label="jurusan" aria-describedby="basic-addon1" required>
                </div>
                </td>
                <td>

                </td>

            </tr>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Email</span>
                </div>
                <input name="email" type="text" class="form-control" placeholder="email" aria-label="email" aria-describedby="basic-addon1" required>
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

<table  border="1" width="1350px" style="text-align:center" >
<tr>
    <th width="200px">
        Action
    </th>
    <th width="150px">
        ID
    </th>
    <th width="200px">
        Nama
    </th>
    <th width="200px">
        NIS
    </th>
    <th width="200px"> 
        Kelas
    </th>
    <th width="200px">
        Jurusan
    </th>
    <th width="200px">
        Email
    </th>
</tr>

        <?php $i=1;?>
        <?php while($siswa = mysqli_fetch_assoc($query)) : ?>

        <tr style="text-align: center"> 
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-secondary"><a href="ubah_data_siswa.php?id=<?= $siswa['id'];?>" class="" style="color:white">Ubah</button>
                    <button type="button" class="btn btn-secondary"><a href="hapus_data_siswa.php?id=<?= $siswa['id'];?>" class="" style="color:white">Hapus</button>
                </div></td>
            <td><?php echo $siswa ["id"] ?></td>
            <td><?php echo $siswa ["nama"] ?></td>
            <td><?php echo $siswa ["nis"] ?></td>
            <td><?php echo $siswa ["kelas"] ?></td>
            <td><?php echo $siswa ["jurusan"] ?></td>
            <td><a href="#" class="" href="#"><?php echo $siswa ["email"] ?></a></td>
        </tr>
        
        <?php $i++ ?>
        <?php endwhile; ?>
</table>
</center>  
  
    
</body>
</html>