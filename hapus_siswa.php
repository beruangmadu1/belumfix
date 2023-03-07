<?php

include "koneksi.php";

//Ambil id dari Hasil Link Hapus

$id = $_GET['id'];

$hapus = "DELETE FROM tbl_siswa WHERE id_siswa = '$id' ";
$hasil = mysqli_query($koneksi,$hapus);

if($hasil){

    echo "
        <script>
        alert('Data Berhasil di Hapus');
        document.location.href='tampil_siswa.php';
        </script>

    ";
}
?>        
        
