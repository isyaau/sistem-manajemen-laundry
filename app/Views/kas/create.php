<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">MH Laundry </h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Kas</h6>

        </div>
        <div class="card-body">
            <div>
                <form action="/kas/save" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="no_akun" class="col-sm-2 col-form-label">No Akun</label>
                        <div class="col-sm-5">
                            <select id="no_akun" name="no_akun" class="form-control">
                                <option selected>Pilih...</option>
                                <?php foreach ($akun->getResult() as $p) : ?>
                                <option value="<?= $p->no_akun; ?>"> <?= $p->no_akun; ?> - <?= $p->nama_akun; ?>
                                </option>
                                <?php endforeach ?>
                            </select>
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
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-5">
                            <input name="keterangan" type="text"
                                class="form-control <?= ($validation->hasError ('keterangan')) ? 'is-invalid' : '';?>"
                                id="keterangan">
                            <div class="invalid-feedback">
                                <?= $validation->getError('keterangan'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="total" class="col-sm-2 col-form-label">Total</label>
                        <div class="col-sm-5">
                            <input name="total" type="text"
                                class="form-control <?= ($validation->hasError ('total')) ? 'is-invalid' : '';?>"
                                id="no_hp">
                            <div class="invalid-feedback">
                                <?= $validation->getError('total'); ?>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-warning  ml-2 float-right">Simpan</button>
                        <a href="/akun" class="btn btn-success  float-right">Kembali</a>

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