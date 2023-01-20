<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">MH Laundry </h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Ubah Laundry Meteran</h6>

        </div>
        <div class="card-body">
            <div>
                <form action="/meter/update/<?= $meter['id_laundry']; ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id_laundry"
                        value="<?= (old('id_laundry')) ? old('id_laundry') : $meter['id_laundry'];?>">
                    <div class="form-group row">
                        <label for="jenis_laundry" class="col-sm-2 col-form-label">Jenis Laundry</label>
                        <div class="col-sm-5">
                            <input name="jenis_laundry" type="text" id="jenis_laundry" class="form-control"
                                value="<?= (old('jenis_laundry')) ? old('jenis_laundry') : $meter['jenis_laundry'];?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('jenis_laundry'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-5">
                            <input name="harga" type="text" class="form-control" id="harga"
                                value="<?= (old('harga')) ? old('harga') : $meter['harga'];?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('harga'); ?>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-warning  ml-2 float-right">Simpan</button>
                        <a href="/meter" class="btn btn-success  float-right">Kembali</a>

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