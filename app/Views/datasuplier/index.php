<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Suplier MH Laundry</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Data Suplier</h6>
            <a href="/datasuplier/create" class="d-none float-right d-sm-inline-block btn btn-sm btn-info shadow-sm"><i
                    class="fas fa-edit  fa-sm text-white-50"></i> Tambah</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <th>No Telepon</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($suplier as $s):?>
                        <tr>
                            <td><?= $s['nama_suplier']; ?></td>
                            <td><?= $s['alamat_suplier']; ?></td>
                            <td><?= $s['email']; ?></td>
                            <td><?= $s['no_hp']; ?></td>
                            <td>
                                <a href="/datasuplier/edit/<?= $s['id_suplier'];?>"
                                    class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                        class="fas fa-edit fa-sm text-white-50"></i> Ubah</a>
                                <form action="/datasuplier/<?= $s['id_suplier'];?>" method="post" class="d-inline">
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