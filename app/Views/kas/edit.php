<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">MH Laundry </h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Kas</h6>

        </div>
        <div class="card-body">
            <div>
                <form action="/kas/update/<?= $kas['id_kas']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id_kas" value="<?= (old('id_kas')) ? old('id_kas') : $kas['id_kas'];?>">
                    <div class="form-group row">
                        <label for="no_akun" class="col-sm-2 col-form-label">Akun</label>
                        <div class="col-sm-5">
                            <input name="no_akun" type="text" id="no_akun" class="form-control"
                                value="<?= (old('no_akun')) ? old('no_akun') : $kas['no_akun'];?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('no_akun'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="akun" class="col-sm-2 col-form-label">Akun</label>
                        <div class="col-sm-5">
                            <select id="akun" name="akun" class="form-control">
                                <option selected>Pilih...</option>
                                <option>Kredit</option>
                                <option>Debit</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="total" class="col-sm-2 col-form-label">Total</label>
                        <div class="col-sm-5">
                            <input name="total" type="text" class="form-control" id="total"
                                value="<?= (old('total')) ? old('total') : $kas['total'];?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('total'); ?>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-warning  ml-2 float-right">Simpan</button>
                        <a href="/kas" class="btn btn-success  float-right">Kembali</a>

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