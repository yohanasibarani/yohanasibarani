<?php 
// mengaktifkan session
session_start();



// mengalihkan halaman sambil mengirim pesan logout
header("location:../index.php?pesan=logout");
?><!DOCTYPE html>
<html>
<head></head>
<body>
    <h2>Tabel Penumpang</h2>
    <?php
include "koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM penumpang ORDER BY id_penumpang DESC");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>id_penumpang</th>
            <th>nama_penumpang</th>
            <th>no_telp</th>
            <th>password</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data["id_penumpang"];?></td>
            <td><?php echo $data["nama_penumpang"];?></td>
            <td><?php echo $data["no_telp"];?></td>
            <td><?php echo $data["password"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
<h2>Tabel Supir</h2>
<?php
include "koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM supir ORDER BY id_supir DESC");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>id_supir</th>
            <th>id_mobil</th>
            <th>id_nilai</th>
            <th>namasupir</th>
            <th>tujuan</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data["id_supir"];?></td>
            <td><?php echo $data["id_mobil"];?></td>
            <td><?php echo $data["id_nilai"];?></td>
            <td><?php echo $data["nama_supir"];?></td>
            <td><?php echo $data["tujuan"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>

<h2>Tabel Mobil</h2>
<?php
include "koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM mobil ORDER BY id_mobil DESC");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>id_mobil</th>
            <th>id_supir</th>
            <th>id_tujuan</th>
            <th>nama_penumpang</th>
            <th>tujuan</th>
            <th>waktu_keberangkatan</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data["id_mobil"];?></td>
            <td><?php echo $data["id_supir"];?></td>
            <td><?php echo $data["id_tujuan"];?></td>
            <td><?php echo $data["nama_penumpang"];?></td>
            <td><?php echo $data["tujuan"];?></td>
            <td><?php echo $data["waktu_keberangkatan"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>

<h2>Tabel Pembayaran</h2>
<?php
include "koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM pembayaran ORDER BY id_bayar DESC");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>id_bayar</th>
            <th>id_penumpang</th>
            <th>id_tujuan</th>
            <th>nama_penumpang</th>
            <th>waktu_keberangkatan</th>
            <th>tanggal_bayar</th>
            <th>jlh_bayar</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data["id_bayar"];?></td>
            <td><?php echo $data["id_penumpang"];?></td>
            <td><?php echo $data["id_tujuan"];?></td>
            <td><?php echo $data["nama_penumpang"];?></td>
            <td><?php echo $data["waktu_keberangkatan"];?></td>
            <td><?php echo $data["tanggal_bayar"];?></td>
            <td><?php echo $data["jlh_bayar"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>

<h2>Tabel Penilaian</h2>
<?php
include "koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM penilaian ORDER BY id_nilai DESC");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>id_nilai</th>
            <th>id_penumpang</th>
            <th>id_supir</th>
            <th>nama_penumpang</th>
            <th>tujuan</th>
            <th>tanggal</th>
            <th>deskripsi</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data["id_nilai"];?></td>
            <td><?php echo $data["id_penumpang"];?></td>
            <td><?php echo $data["id_supir"];?></td>
            <td><?php echo $data["nama_penumpang"];?></td>
            <td><?php echo $data["tujuan"];?></td>
            <td><?php echo $data["tanggal"];?></td>
            <td><?php echo $data["deskripsi"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>

<h2>Tabel Tujuan</h2>
<?php
include "koneksi.php";
$query = mysqli_query($koneksi,"SELECT * FROM tujuan ORDER BY id_tujuan DESC");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>id_tujuan</th>
            <th>id_supir</th>
            <th>id_penumpang</th>
            <th>tujuan</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data["id_tujuan"];?></td>
            <td><?php echo $data["id_supir"];?></td>
            <td><?php echo $data["id_penumpang"];?></td>
            <td><?php echo $data["tujuan"];?></td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>