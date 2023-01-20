<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">MH Laundry </h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Data Pengeluaran</h6>

        </div>
        <div class="card-body">
            <div>
                <form action="/pengeluaran/update/<?= $pengeluaran['id_pengeluaran']; ?>" method="post"
                    enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id_pengeluaran"
                        value="<?= (old('id_pengeluaran')) ? old('id_pengeluaran') : $pengeluaran['id_pengeluaran'];?>">
                    <div class="form-group row">
                        <label for="no_akun" class="col-sm-2 col-form-label">Nama Akun</label>
                        <div class="col-sm-5">
                            <select class="custom-select mr-sm-2" id="no_akun" name="no_akun">
                                <option
                                    value="<?= (old('no_akun')) ? old('no_akun') :  $joinpengeluaran->getRow('no_akun'); ?>"
                                    selected><?= $joinpengeluaran->getRow('nama_akun'); ?></option>
                                <?php foreach ($akun->getResult() as $p) : ?>
                                <option value="<?= $p->no_akun; ?>"> <?= $p->no_akun; ?> - <?= $p->nama_akun; ?>
                                </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="satuan" class="col-sm-2 col-form-label">Satuan</label>
                        <div class="col-sm-5">
                            <input name="satuan" type="text" class="form-control" id="satuan"
                                value="<?= (old('satuan')) ? old('satuan') : $pengeluaran['satuan'];?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('satuan'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-5">
                            <input name="jumlah" type="text" class="form-control" id="jumlah"
                                value="<?= (old('jumlah')) ? old('jumlah') : $pengeluaran['jumlah'];?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('jumlah'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-5">
                            <input name="keterangan" type="text" class="form-control" id="keterangan"
                                value="<?= (old('keterangan')) ? old('keterangan') : $pengeluaran['keterangan'];?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('keterangan'); ?>
                            </div>
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


<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>