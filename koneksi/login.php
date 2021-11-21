<?php
	require 'tampil.php';


/*cek login
user menginput data -> input diambil -> cek di database
if data ada maka langsung ke halaman home
else-> gagal dan login ulang*/
if(isset($_POST['login'])){
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    

    //pencocokan dengan database apakah ada data atau tidak
    $cekdb = mysqli_query($koneksi, "SELECT * FROM penumpang WHERE nama = '$nama' AND password = '$password'");
    //untuk menghitung banyak data yang ada di database jumlah data 
    $jlh = mysqli_num_rows($cekdb);

    if($jlh > 0){
        //cek apakah akun sudah pernah login atau belum
        $_SESSION['log'] = 'True'; 
        header('location:index.php');
    }else {
        header('location:login.php');
    }

}

if (!isset($_SESSION['login'])){

}else {
    header('location:index.php');
}
?>
