<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">MH Laundry </h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Transaksi Pemasukan</h6>

        </div>
        <div class="card-body">
            <div>
                <form action="/pemasukan/save" method="post" enctype="multipart/form-data">
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
                        <label for="nama_pelanggan" class="col-sm-2 col-form-label">Nama Pelanggan</label>
                        <div class="col-sm-5">
                            <input name="nama_pelanggan" type="text"
                                class="form-control <?= ($validation->hasError('nama_pelanggan')) ? 'is-invalid' : ''; ?>"
                                id="nama_pelanggan">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_pelanggan'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-5">
                            <input name="alamat" type="text"
                                class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>"
                                id="alamat">
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                        <div class="col-sm-5">
                            <input name="no_hp" type="text"
                                class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>"
                                id="no_hp">
                            <div class="invalid-feedback">
                                <?= $validation->getError('no_hp'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_laundry" class="col-sm-2 col-form-label">Jenis Laundry</label>
                        <div class="col-sm-5">
                            <select class="custom-select mr-sm-2" id="id_laundry" name="id_laundry">
                                <option selected>Pilih...</option>
                                <?php foreach ($laundry->getResult() as $j) : ?>
                                <option value="<?= $j->id_laundry; ?>"> <?= $j->tipe; ?> - <?= $j->jenis_laundry; ?>
                                </option>
                                <?php endforeach ?>
                            </select>
                            <div class="invalid-feedback">
                                <?= $validation->getError('id_laundry'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-5">
                            <input name="jumlah" type="text"
                                class="form-control <?= ($validation->hasError('jumlah')) ? 'is-invalid' : ''; ?>"
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
                    <div class="form-group row">
                        <label for="diskon" class="col-sm-2 col-form-label">Diskon %</label>
                        <div class="col-sm-5">
                            <input name="diskon" type="text"
                                class="form-control <?= ($validation->hasError('diskon')) ? 'is-invalid' : ''; ?>"
                                id="diskon">
                            <div class="invalid-feedback">
                                <?= $validation->getError('diskon'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="transaksi" class="col-sm-2 col-form-label">Transaksi</label>
                        <div class="col-sm-5">
                            <select id="transaksi" name="transaksi" class="form-control">
                                <option selected>Pilih...</option>
                                <option>Lunas</option>
                                <option>DP</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="form-group row">
                            <label for="dp_trx" class="col-sm-2 col-form-label">DP Transaksi</label>
                            <div class="col-sm-5">
                                <input name="dp_trx" type="text"
                                    class="form-control <?= ($validation->hasError('dp_trx')) ? 'is-invalid' : ''; ?>"
                                    id="dp_trx">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('dp_trx'); ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning  ml-2 float-right">Simpan</button>
                        <a href="/pemasukan" class="btn btn-success  float-right">Kembali</a>

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