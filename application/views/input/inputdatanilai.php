<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Input data nilai</h1>

    <!-- Page Heading -->
    <div class="row">
        <div class="col">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col">
            <form action="http://localhost/SPB/home/searchBook" method="post">
                <div class="input-group">
                    <div class="input-group-prepend bg-light">
                        <label class="input-group-text bg-light font-weight-light small" for="kategori">Cari
                            Berdasarkan</label>
                    </div>
                    <select name="kategori" id="kategori" style="width: 150px;" class="custom-select">
                        <option value="tahun">Tahun</option>
                        <option value="jurusan">Jurusan</option>
                        <option value="kelas">Kelas</option>
                    </select>
                    <input name="keyword" id="keyword" autocomplete="off" type="text" class="w-50 form-control" placeholder="Kata Kunci">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-2 row">
        <div class="col">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead style="background: #4e73df;" class="text-light">
                            <!-- judul	penulis	tahun	penerbit	kota_terbit	sub_judul	jumlah_halaman	letak_buku	jumlah -->
                            <tr style="text-align: center;">
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Tempat Magang</th>
                                <th scope="col">Tahun</th>
                                <th scope="col">Aksi</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody style="text-align: center;">

                            <?php $i = 0;
                            foreach ($data as $d) {
                                $i++; ?>
                                <tr>
                                    <th schope="row"><?= $i ?></th>
                                    <td><?= $d['nama'] ?></td>
                                    <td><?= $d['kelas'] ?></td>
                                    <td><?= $d['jurusan'] ?></td>
                                    <td><?= $d['tempat_magang'] ?></td>
                                    <td><?= $d['tahun'] ?></td>
                                    <td>
                                        <a href="<?= base_url('' . $d['id']); ?>" class="badge badge-success">update</a>
                                        <a href="<?= base_url('' . $d['id']); ?>" class="badge badge-danger">delete</a>
                                        <a href="<?= base_url('' . $d['id']); ?>" class="badge badge-primary">cari</a>
                                        <a href="<?= base_url('' . $d['id']); ?>" class="badge badge-secondary">download</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row mt-3">
        <div class="col">
            <!--Tampilkan pagination-->
    <!-- <?php echo $pagination; ?> -->
    <!-- </div> -->
    <!-- </div> -->

    <!-- </div> -->
    <!-- /.container-fluid -->

</div>
<!-- /.container-fluid -->

</div>