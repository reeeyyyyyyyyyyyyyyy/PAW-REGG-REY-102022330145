<?php
include 'connect.php';

// Cek Apakah ada data yang dikirim
if (isset($_POST['update'])) {
    $id = $_GET['id'];

    $judulBuku = $_POST['judul'];
    $penulisBuku = $_POST['penulis'];
    $tahunTerbit = $_POST['tahun_terbit'];

    $query = "UPDATE tb_buku SET 
            judul = '$judulBuku', 
            penulis = '$penulisBuku', 
            tahun_terbit = '$tahunTerbit' 
            WHERE id = $id";

    $test = mysqli_query($conn, $query);

    if (mysqli_affected_rows($conn) > 0) {
        header("location: katalog_buku.php");
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>