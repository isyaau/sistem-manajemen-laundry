<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pemasukan MH Laundry</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Daftar Pemasukan Laundry</h6>
            <a href="/pemasukan/create" class="d-none float-right d-sm-inline-block btn btn-sm btn-info shadow-sm"><i
                    class="fas fa-edit  fa-sm text-white-50"></i> Tambah</a>

            <a href="/pemasukan/createkas"
                class="mr-5 -none float-right d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                    class="fas fa-edit  fa-sm text-white-50"></i>Kas</a>

            <a href="/pengeluaran/createkas"
                class="mr-5 -none float-right d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-edit  fa-sm text-white-50"></i>Piutang</a>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>No Trx</th>
                            <th>Tanggal</th>
                            <th>Jenis Laundry</th>
                            <th>Pelayanan</th>
                            <th>Total</th>
                            <th>Transaksi</th>
                            <th>DP Transaksi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($joinpemasukan->getResult() as $j) : ?>

                        <tr>

                            <td><?= $j->id_pemasukan; ?></td>
                            <td><?= $j->created_at; ?></td>
                            <td><?= $j->tipe; ?></td>
                            <td><?= $j->jenis_laundry; ?></td>
                            <td><?= $j->total; ?></td>
                            <td><?= $j->transaksi; ?></td>
                            <td><?= $j->dp_trx; ?></td>
                            <td>
                                <a href="/pemasukan/edit/<?= $j->id_pemasukan;?>"
                                    class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                        class="fas fa-edit fa-sm text-white-50"></i></a>
                                <a href="/pemasukan/cetak/<?= $j->id_pemasukan;?>"
                                    class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                        class="fas fa-info fa-sm text-white-50"></i></a>
                                <form action="/pemasukan/<?= $j->id_pemasukan;?>" method="post" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit"
                                        class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"
                                        onclick="return confirm('Apakah Anda Yakin ?');"><i
                                            class="fas fa-trash fa-sm text-white-50"></i></a> </button>
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