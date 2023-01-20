<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">MH Laundry </h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Data User</h6>

        </div>
        <div class="card-body">
            <div>
                <form action="/datauser/update/<?= $user['id_user']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id_user"
                        value="<?= (old('id_user')) ? old('id_user') : $user['id_user'];?>">
                    <div class="form-group row">
                        <label for="nama_user" class="col-sm-2 col-form-label">Nama User</label>
                        <div class="col-sm-5">
                            <input name="nama_user" type="text" id="nama_user" class="form-control"
                                value="<?= (old('nama_user')) ? old('nama_user') : $user['nama_user'];?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_user'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat_user" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-5">
                            <input name="alamat_user" type="text" class="form-control" id="alamat_user"
                                value="<?= (old('alamat_user')) ? old('alamat_user') : $user['alamat_user'];?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat_user'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-5">
                            <input name="username" type="text" class="form-control" id="username"
                                value="<?= (old('username')) ? old('username') : $user['username'];?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('username'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-5">
                            <input name="password" type="password" class="form-control" id="password"
                                value="<?= (old('password')) ? old('password') : $user['password'];?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password2" class="col-sm-2 col-form-label">Password2</label>
                        <div class="col-sm-5">
                            <input name="password2" type="password" class="form-control" id="password2"
                                value="<?= (old('password')) ? old('password') : $user['password'];?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('password2'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-2 col-form-label">No Hp</label>
                        <div class="col-sm-5">
                            <input name="no_hp" type="text" class="form-control" id="no_hp"
                                value="<?= (old('no_hp')) ? old('no_hp') : $user['no_hp'];?>">
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