<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Input Data</h1>

    <div class="row">

        <div class="col-lg-6">

            <?= form_error('nama', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('nisn', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('kelas', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('tempat_magang', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
            <?= form_error('tahun', '<div class="alert alert-danger" role="alert">', '</div>'); ?>


            <div class="card">
                <div class="card-header">
                    Input Data Siswa
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <form method="POST" action="http://localhost/SPSP/input/tambahsiswa">
                            <div class="form-group">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas">
                            </div>
                            <div class="form-group">
                                <select class="form-control" id="jurusan" name="jurusan" value="<?= $spj['jurusan'] ?>">
                                    <option>--Pilih Jurusan--</option>
                                    <option value="teknik komputer jaringan">Teknik Komputer Jaringan</option>
                                    <option value="teknik mesin">Teknik Mesin</option>
                                    <option value="teknik listrik industri">Teknik Listrik Industri</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="tempat_magang" name="tempat_magang" placeholder="Tempat Magang">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </form>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>