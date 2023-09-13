<?php
include("config.php");
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //ambil data dari form
        $id = $_POST['id'];
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $jk = $_POST['jenis_kelamin'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        $berat_badan = $_POST['berat_badan'];
        $tinggi_badan = $_POST['tinggi_badan'];
        //buat query update
        $sql = "UPDATE t_siswa SET id='$id', nis='$nis',
        nama='$nama', jenis_kelamin='$jk' no_telp='no_telp',alamat='$alamat' WHERE 
        berat_badan = '$berat_badan', tinggi_badan='$tinggi_badan'";
        $query = mysqli_query($db,$sq) or die(mysqli_error($db));
        //apakah update berhasil
        if($query){
        //kalau berhasil, alihkan ke halaman index.php dengan status=sukses
            header('location:index.php?status=sukses');
        }else{
        //kalau gagal, alihkan ke halaman index.php dengan status = gagal
            header('Location:index.php?status=gagal');
        }
    }else{
        die("Akses dilarang ...");
    }
?>