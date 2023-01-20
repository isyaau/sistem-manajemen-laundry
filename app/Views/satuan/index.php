<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Laundry Satuan MH Laundry</h1>

    <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Laundry Satuan</h6>
            <a href="/satuan/create" class="d-none float-right d-sm-inline-block btn btn-sm btn-info shadow-sm"><i
                    class="fas fa-edit  fa-sm text-white-50"></i> Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Jenis Laundry</th>
                            <th>Harga</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($satuan as $s):?>

                        <tr>


                            <td><?= $s['jenis_laundry']; ?></td>
                            <td><?= $s['harga']; ?></td>
                            <td>
                                <a href="/satuan/edit/<?= $s['id_laundry'];?>"
                                    class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                        class="fas fa-edit fa-sm text-white-50"></i> Ubah</a>
                                <form action="/satuan/<?= $s['id_laundry'];?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit"
                                        class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"
                                        onclick="return confirm('Apakah Anda Yakin ?');"><i
                                            class="fas fa-edit fa-sm text-white-50"></i> Hapus</a> </button>
                                </form>

                            </td>

                        </tr>

                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?= $this->endSection(); ?>