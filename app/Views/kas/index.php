<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data KAS MH Laundry</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Kas MH Laundry</h6>

            <h6 class="m-3 font text-black d-none float-left d-sm-inline-block">Akun : Kas (1101)</h6>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>Tanggal</th>
                            <th>No Trx</th>
                            <th>No Akun</th>
                            <th>Keterangan</th>
                            <th>Total</th>
                            <th>Aksi</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($joinakun->getResult() as $k):?>
                        <tr>
                            <td><?= $k->created_at; ?></td>
                            <td><?= $k->id_kas; ?></td>
                            <td><?= $k->no_akun ; ?></td>
                            <td><?= $k->nama_akun ; ?></td>
                            <td><?= $k->total ; ?></td>
                            <td>
                                <a href="/kas/edit/<?= $k->id_kas ;?>"
                                    class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                        class="fas fa-edit fa-sm text-white-50"></i> Ubah</a>
                                <form action="/kas/<?= $k->id_kas ;?>" method="post" class="d-inline">
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