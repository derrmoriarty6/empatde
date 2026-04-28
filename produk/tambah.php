<?php 
 // jika tombol simpan diklik
 if (isset($_POST['simpan'])) {
    // seluruh inputan pada form dikirim ke variabel
    $kode_produk = $_POST['kode_produk'];
    $nama_produk = $_POST['nama_produk'];
    $harga       = $_POST['harga'];
    $stok        = $_POST['stok'];
    $kategori    = $_POST['kategori'];
    // setelah dikirim ke variabel maka diproses ke tabel melalui query inputan pada form dikirim ke variabel
    $query = mysqli_query($koneksi, "INSERT INTO produk VALUES('', '$kode_produk', '$nama_produk', '$harga', '$stok', '$kategori', 'noimage.jpg')");
    // jika query berhasil
    if ($query) {
        echo "<script> alert('Data berhasil disimpan');
        window.location='?page=tampil-produk&pesan=berhasil'</script>";
    } else{
         echo "<script> alert('Data gagal disimpan');
        window.location='?page=tambah-produk'</script>";
    }
 }
 ?>

<div class="card shadow mb-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0"><i class="fa fa-plus"></i> Tambah Data</h5>
            <a href="?page=tampil-produk" class="btn btn-md btn-primary"><i class="fa fa-eye"></i> Lihat Data</a>
        </div>
    <div class="card-body">
        
<!-- form tambah  -->
 <form action="" method="POST">
                <!-- Kode Produk -->
                <div class="form-group">
                    <label>Kode Produk</label>
                    <input type="text" name="kode_produk" class="form-control" placeholder="Masukkan kode produk" maxlength="6" required>
                </div>

                <!-- Nama Produk -->
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" placeholder="Masukkan nama produk" required>
                </div>

                <!-- Harga -->
                <div class="form-group">
                    <label>Harga</label>
                    <input type="number" name="harga" class="form-control" placeholder="Masukkan harga" required>
                </div>

                <!-- Stok -->
                <div class="form-group">
                    <label>Stok</label>
                    <input type="number" name="stok" class="form-control" placeholder="Masukkan stok" required>
                </div>

                <!-- Kategori -->
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori" class="form-control" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Elektronik">Elektronik</option>
                        <option value="Aksesoris">Aksesoris</option>
                        <option value="Storage">Storage</option>
                    </select>
                </div>

                <!-- Tombol -->
                <button type="submit" name="simpan" class="btn btn-primary">
                     Simpan
                </button>

                <button type="reset" class="btn btn-secondary">
                    Reset
                </button>

            </form>
          
        </div>
        </div>
        </div>


