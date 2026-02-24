<div class="w-100">
    <h1 class="mt-4">Kategori Buku</h1>

    <!-- button add kategori -->
    <div class="mb-3clearfix">
        <a href="?page=kategori_tambah" class="btn btn-primary">Tambah Kategori</a>
    </div>  
    <!-- table kategori -->
    <div class="clearfix"> 
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">    
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php


                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM kategori");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $data['kategori']; ?></td>
                    <td>
                        <a href="?page=kategori_edit&id=<?= $data['id_kategori']; ?>" class="btn btn-sm btn-info">Edit</a>
                        <a href="?page=kategori_hapus&id=<?= $data['id_kategori']; ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>