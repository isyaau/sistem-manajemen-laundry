<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">MH Laundry </h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Transaksi Pengeluaran</h6>

        </div>
        <div class="card-body">
            <div>
                <form action="/pengeluaran/save" method="post" enctype="multipart/form-data">
                    <div class="form-group row">
                        <label for="no_akun" class="col-sm-2 col-form-label">Nama Akun</label>
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
                        <label for="jenis" class="col-sm-2 col-form-label">Nama Pengeluaran</label>
                        <div class="col-sm-5">
                            <input name="jenis" type="text"
                                class="form-control <?= ($validation->hasError ('jenis')) ? 'is-invalid' : '';?>"
                                id="jenis">
                            <div class="invalid-feedback">
                                <?= $validation->getError('jenis'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
                        <div class="col-sm-5">
                            <input name="satuan" type="text"
                                class="form-control <?= ($validation->hasError ('satuan')) ? 'is-invalid' : '';?>"
                                id="satuan">
                            <div class="invalid-feedback">
                                <?= $validation->getError('satuan'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-5">
                            <input name="jumlah" type="text"
                                class="form-control <?= ($validation->hasError ('jumlah')) ? 'is-invalid' : '';?>"
                                id="jumlah">
                            <div class="invalid-feedback">
                                <?= $validation->getError('jumlah'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-5">
                            <select id="keterangan" name="keterangan" class="form-control">
                                <option selected>Pilih...</option>
                                <option>Kredit</option>
                                <option>Debit</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-warning  ml-2 float-right">Simpan</button>
                        <a href="/pengeluaran" class="btn btn-success  float-right">Kembali</a>

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