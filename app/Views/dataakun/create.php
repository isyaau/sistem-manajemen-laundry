<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">MH Laundry </h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Akun</h6>

        </div>
        <div class="card-body">
            <div>
                <form action="/dataakun/save" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="nama_akun" class="col-sm-2 col-form-label">Nama Akun</label>
                        <div class="col-sm-5">
                            <input name="nama_akun" type="text"
                                class="form-control <?= ($validation->hasError ('nama_akun')) ? 'is-invalid' : '';?>"
                                id="nama_akun" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_akun'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_akun" class="col-sm-2 col-form-label">No Akun</label>
                        <div class="col-sm-5">
                            <input name="no_akun" type=" text"
                                class="form-control <?= ($validation->hasError ('no_akun')) ? 'is-invalid' : '';?>"
                                id="no_akun">
                            <div class=" invalid-feedback">
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