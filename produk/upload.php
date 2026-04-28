<?php 
 // query tampil untuk mengisi inputan
 $id = $_GET['id'];
 $tampil = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = '$id'");
 $data = mysqli_fetch_assoc($tampil);

 // jika tombol simpan diklik
 if (isset($_POST['simpan'])) {
    // seluruh inputan pada form dikirim ke variabel
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error_file = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];


    // cek validasi apakah user sudah memilih file/gambar
    if($error_file === 4){ 
        echo "<script>alert('Pilih Gambar Dulu Ya')</script>"; return false;
    }

    // validasi ekstensi file
    $ekstensiValid = ['jpg', 'jpeg', 'png', 'docs'];
    $ekstensi_file = strtolower(pathinfo ($nama_file, PATHINFO_EXTENSION));

    // jika ekstensi tidak valid
    if(!in_array($ekstensi_file, $ekstensiValid)){
         echo "<script>alert('Format File Tidak Diizinkan.')</script>"; return false;
    }

    // jika ukuran tidak sesuai
    if($ukuran_file > 2000000){
         echo "<script>alert('Ukuran File terlalu besar! Maksimal 2MB')</script>"; return false;
    }
    
    // jika seluruh validasi sudah sesuai, upload gambar dengan nama
    $nama_baru = $id."_".uniqid().".".
    $ekstensi_file; //cth. 1_cacewqsx.jpg

    // hapus foto lama jika sudah ada 
    if(!empty($data['gambar']) && file_exists("assets/img/uploads/produk/".$data['gambar'])){
        unlink("assets/img/uploads/produk/".$data['gambar']);
    }

    // proses upload (pindahkan file) ke folder assets/img/uploads/produk/
    if(move_uploaded_file($tmp_file, 'assets/img/uploads/produk/'.$nama_baru)){
        $query = mysqli_query($koneksi, "UPDATE produk SET gambar='$nama_baru' WHERE id='$id'");
        echo "<script> alert('Gambar berhasil diupload');
        window.location='?page=tampil-produk&pesan=berhasil'</script>";
    } else{
         echo "<script> alert('Gambar gagal diupload');
        window.location='?page=upload-produk'</script>";
    }

 }
 ?>

<h1 class="h3 mb-4 text-gray-880">Master Data Produk</h1>

<div class="card shadow mb-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Upload Gambar</h5>
            <a href="?page=tampil-produk" class="btn btn-md btn-primary"><i class="fa fa-plus"></i>Lihat Data</a>
        </div>
    <div class="card-body">
                <!-- form upload -->
                 <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Kode Produk</label>
                    <h4><?= $data['kode_produk']?></h4>

                <!-- Nama Produk -->
                <div class="form-group">
                    <label>Nama Produk</label>
                    <h4><?= $data['nama_produk']?></h4>
                </div>

                <!-- Gambar -->
                <div class="form-group">
                    <label>Gambar</label>
                    <input type="file" name="gambar" class="form-control" placeholder="Pilih Gambar" required>
                </div>

                <!-- Tombol -->
                <button type="submit" name="simpan" class="btn btn-primary">
                     Simpan
                </button>

                <button type="reset" name="reset" class="btn btn-secondary">
                    Reset
                </button>

            </form>
          
        </div>
        </div>
        </div>


