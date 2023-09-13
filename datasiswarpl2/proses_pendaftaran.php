<?php
include("config.php");
//cek apakah tombol simpan sudah diklik atau belum
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        //ambil data dari form
        $id = $_POST['id'];
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $jk = $_POST['jenis_kelamin'];
        $no_telepon = $_POST['no_telepon'];
        $alamat = $_POST['alamat'];
        $berat_badan = $_POST['berat_badan'];
        $tinggi_badan = $_POST['tinggi_badan'];
        //buat query
        $sql = "INSERT INTO siswa(id, nis, nama, jenis_kelamin, no_telepon, alamat, berat_badan, tinggi_badan)
        VALUE('$id','$nis','$nama','$jk','$no_telepon','$alamat', '$berat_badan', '$tinggi_badan')";
    $query = mysqli_query($db, $sql) or die(mysqli_error($db));
    //apakah query update berhasil
        if($query){
        //kalau berhasil, alihkan ke halaman index.php dengan status=sukses
            header('location:index.php?status=sukses');
    }else{
                //kalau gagal, alihkan ke halaman index.php dengan status=gagal
                header('location:index.php?status=gagal');
    }
}else{

    die("Akses dilarang ...");
}
?>