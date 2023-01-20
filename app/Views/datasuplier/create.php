<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">MH Laundry </h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Kas MH Laundry</h6>

        </div>
        <div class="card-body">
            <div>
                <form action="/datasuplier/save" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="nama_suplier" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-5">
                            <input name="nama_suplier" type="text"
                                class="form-control <?= ($validation->hasError ('nama_suplier')) ? 'is-invalid' : '';?>"
                                id="nama_suplier" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_suplier'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_suplier" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-5">
                            <input name="alamat_suplier" type="text"
                                class="form-control <?= ($validation->hasError ('alamat_suplier')) ? 'is-invalid' : '';?>"
                                id="alamat_suplier">
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat_suplier'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-5">
                            <input name="email" type="text"
                                class="form-control <?= ($validation->hasError ('email')) ? 'is-invalid' : '';?>"
                                id="email">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-5">
                            <input name="no_hp" type="text"
                                class="form-control <?= ($validation->hasError ('no_hp')) ? 'is-invalid' : '';?>"
                                id="no_hp">
                            <div class="invalid-feedback">
                                <?= $validation->getError('no_hp'); ?>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-warning  ml-2 float-right">Simpan</button>
                        <a href="/datasuplier" class="btn btn-success  float-right">Kembali</a>

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