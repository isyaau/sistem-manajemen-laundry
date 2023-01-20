<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">MH Laundry </h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Data Akun</h6>

        </div>
        <div class="card-body">
            <div>
                <form action="/dataakun/update/<?= $dataakun['id_akun']; ?>" method="post"
                    enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id_akun"
                        value="<?= (old('id_akun')) ? old('id_akun') : $dataakun['id_akun'];?>">
                    <div class="form-group row">
                        <label for="nama_akun" class="col-sm-2 col-form-label">Nama Akun</label>
                        <div class="col-sm-5">
                            <input name="nama_akun" type="text" id="nama_akun" class="form-control"
                                value="<?= (old('nama_akun')) ? old('nama_akun') : $dataakun['nama_akun'];?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_akun'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_akun" class="col-sm-2 col-form-label">No Akun</label>
                        <div class="col-sm-5">
                            <input name="no_akun" type="text" class="form-control" id="no_akun"
                                value="<?= (old('no_akun')) ? old('no_akun') : $dataakun['no_akun'];?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('no_akun'); ?>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-warning  ml-2 float-right">Simpan</button>
                        <a href="/dataakun" class="btn btn-success  float-right">Kembali</a>

                    </div>
            </div>
        </div>
    </div>


</div>
</form>
</div>
</div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>