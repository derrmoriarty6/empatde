<?php
include "koneksi.php";

$id = $_GET['id'] ?? '';

if ($id != '') {

    $hapus = mysqli_query($koneksi, "DELETE FROM produk WHERE id='$id'");

    if ($hapus) {
        echo "<script>
                alert('Data berhasil dihapus');
                window.location='?page=tampil-produk';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menghapus data');
                window.location='?page=tampil-produk';
              </script>";
    }

} else {
    echo "<script>
            alert('ID tidak ditemukan');
            window.location='?page=tampil-produk';
          </script>";
}
?>