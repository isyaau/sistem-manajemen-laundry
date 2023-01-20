<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">MH Laundry </h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data User</h6>

        </div>
        <div class="card-body">
            <div>
                <form action="/datauser/save" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="nama_user" class="col-sm-2 col-form-label">Nama User</label>
                        <div class="col-sm-5">
                            <input name="nama_user" type="text"
                                class="form-control <?= ($validation->hasError ('nama_user')) ? 'is-invalid' : '';?>"
                                id="nama_user" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_user'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_user" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-5">
                            <input name="alamat_user" type="text"
                                class="form-control <?= ($validation->hasError ('alamat_user')) ? 'is-invalid' : '';?>"
                                id="alamat_user">
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat_user'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="rule" class="col-sm-2 col-form-label">Sebagai</label>
                        <div class="col-sm-5">
                            <select class="custom-select mr-sm-2" id="rule" name="rule">
                                <option selected>Pilih...</option>
                                <option value="1"> Pemilik</option>
                                <option value="2"> Karyawan</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('rule'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-5">
                            <input name="username" type="text"
                                class="form-control <?= ($validation->hasError ('username')) ? 'is-invalid' : '';?>"
                                id="username">
                            <div class="invalid-feedback">
                                <?= $validation->getError('username'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-5">
                            <input name="password" type="password"
                                class="form-control <?= ($validation->hasError ('password')) ? 'is-invalid' : '';?>"
                                id="password">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password2" class="col-sm-2 col-form-label">Ulangi Password</label>
                        <div class="col-sm-5">
                            <input name="password2" type="password"
                                class="form-control <?= ($validation->hasError ('password2')) ? 'is-invalid' : '';?>"
                                id="password2">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password2'); ?>
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
                        <a href="/datauser" class="btn btn-success  float-right">Kembali</a>

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