<?php
$koneksi = mysqli_connect("localhost" , "root" , "" , "perpustakaan");

$id = $_GET["id"];

$query = mysqli_query($koneksi, "SELECT * FROM datapeminjaman where id=$id");
$scan = mysqli_fetch_assoc($query);

$peminjaman = mysqli_fetch_assoc($query);


if (isset($_POST["submit"]))
{
    $nama = $_POST["nama"];
    $judul = $_POST["judul"];
    $tkembali = $_POST["tkembali"];
     $hari = $_POST["hari"];

    $tgl_kembali = date('Y-m-d', strtotime("+$hari Day", strtotime(date($tkembali))));


    $query =("UPDATE datapeminjaman SET id = '$id', nama = '$nama', judul = '$judul', tgl_kembali = '$tgl_kembali' WHERE id=$id");

    $peminjaman =  mysqli_query($koneksi,$query);

    var_dump($peminjaman);

    if ($peminjaman>0)
         {
             echo 
            "
             <script>
                 alert('Data Berhasil Dirubah');
                 document.location.href='data_peminjaman.php';
            </script>
             ";
         }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data</title>
</head>
<center>
<body>

<br/>
<br/>
<br/>
<br/>
    <h1>Ubah Data Anda</h1>
    <br/>


    <form action="" method="post">
    <table >
            </tr>
            <tr>
                <td colspan="2">
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01">Nama</label>
                </div>
                <select  name="nama" class="custom-select" id="inputGroupSelect01" value="<?= $peminjaman["nama"]; ?>">
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
                <select  name="judul" class="custom-select" id="inputGroupSelect01" value="<?= $peminjaman["judul"]; ?>">
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
                     <span class="input-group-text" id="basic-addon1">Tanggal Kembali</span>
                </div>
                <input name="tkembali" type="date" class="form-control" placeholder="tkembali" aria-label="tkembali" aria-describedby="basic-addon1" value="<?php echo $scan['tgl_kembali']?>">
                </div>
                </td>
                </tr>
            <tr>
            
                <td colspan="2">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                     <span class="input-group-text" id="basic-addon1">Ubah Waktu Pinjam</span>
                </div>
                <input name="hari" type="text" class="form-control" placeholder="hari" aria-label="hari" aria-describedby="basic-addon1" value="" required>
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

    
</body>
</center>
</html>
    
</body>
</html>
