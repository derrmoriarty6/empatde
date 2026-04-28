<h1 class="h3 mb-4 text-gray-880">Daftar Inventaris Produk</h1>

<div class="card shadow mb-4">
    <div class="card">
        <div class="card-header">
            <h3><i class="fa fa-database mt-3"></i> Daftar Inventaris Produk</h3>
            <a href="?page=tambah-produk" class="btn btn-md btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle text-center" width="100%" cellspacing="0">
                <thead class="table-dark">
                    <tr>
                    <th>No</th>
                    <th>ID</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Kategori</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
            <tbody>
                <?php
                $no =1;
                $query = mysqli_query($koneksi, "SELECT * FROM produk");
                foreach ($query as $row) :
                // while ($row = mysqli_fetch_assoc($query)):
                ?>
                    <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['kode_produk']; ?></td>
                    <td><?= $row['nama_produk']; ?></td>
                    <td>Rp <?= number_format($row['harga'], 0, ',', '.'); ?></td>
                    <td><?= $row['stok']; ?></td>
                    <td><?= $row['kategori']; ?></td>
                    <td><img src="assets/img/uploads/produk/<?= $row['gambar']?>" alt="" class="img-rounded" width="60"></td>
                    <td>
                        <a href="?page=upload-produk&id=<?= $row['id']?>"
                            class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> Upload
                        </a>
                        <a href="?page=ubah-produk&id=<?= $row['id']?>"
                            class="btn btn-sm btn-warning"><i class="fa fa-edit"></i> Ubah
                        </a>
                        <a href="?page=hapus-produk&id=<?= $row['id']; ?>" onclick="return confirm('Yakin hapus data ini?')"
                            class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Hapus
                        </a>
                    </td>
                    </tr>
                <?php // endwhile; ?>
                <?php endforeach; ?>
            </tbody>
            </table>
        </div>
        </div>
        </div>


