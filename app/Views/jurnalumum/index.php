<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Jurnal Umum MH Laundry</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Laporan Jurnal Umum</h6><br>
            <form action="" class="form-inline">


                <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><b>Bulan : </b> </label>
                <select class="custom-select my-1 mr-5" name="bulan" id="bulan">
                    <option selected>Pilih...</option>
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>

                <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><b>Tahun : </b> </label>
                <select class="custom-select my-1 mr-5" name="tahun" id="tahun">
                    <option selected>Pilih...</option>
                    <?php for($x=2000 ;$x<=2030;$x++ ):  ?>
                    <option value="<?= $x; ?>"><?= $x; ?></option>
                    <?php endfor; ?>
                </select>
                <button type="submit" class="btn btn-success my-1">Cari</button>



            </form>

            <form action="jurnalumum/cetak" class="form-inline">


                <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><b>Bulan : </b> </label>
                <select class="custom-select my-1 mr-5" name="bulan" id="bulan">
                    <option selected>Pilih...</option>
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>

                <label class="my-1 mr-2" for="inlineFormCustomSelectPref"><b>Tahun : </b> </label>
                <select class="custom-select my-1 mr-5" name="tahun" id="tahun">
                    <option selected>Pilih...</option>
                    <?php for($x=2000 ;$x<=2030;$x++ ):  ?>
                    <option value="<?= $x; ?>"><?= $x; ?></option>
                    <?php endfor; ?>
                </select>
                <button type="submit" class="btn btn-primary my-1">Cetak</button>



            </form>

        </div>
        <div class="card-body">
            <div class="table-responsive">

                <div class="h2 mx-auto text-center" style="width: 500px;">
                    MH Laundry
                </div>
                <div class="h4 mx-auto text-center" style="width: 500px;">
                    Jurnal Umum
                </div>
                <div class="mb-5 h4 mx-auto text-center" style="width: 500px;">
                    Tahun <?= date("Y"); ?>
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>No Trx</th>
                            <th>Keterangan</th>
                            <th>Akun</th>
                            <th>Debit</th>
                            <th>Kredit</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($joinjurnalumum->getResult() as $j):?>

                        <tr>
                            <td> <?= $j->created_at; ?></td>
                            <td> <?php if($j->keterangan=='Kredit'){?>
                                <?= $j->id_pemasukan; ?>
                                <?php }
                                if($j->keterangan=='Debit'){ ?>
                                <?= $j->id_pengeluaran; ?>
                                <?php }; ?>
                            </td>
                            <td> <?= $j->nama_akun; ?></td>
                            <td><?= $j->no_akun; ?></td>

                            <td>
                                <?php if($j->keterangan=='Debit'){?>
                                <?= $j->total; ?>
                                <?php }
                                if($j->keterangan=='Kredit'){ ?><p> </p>
                                <?php }; ?>
                            </td>

                            <td>
                                <?php if($j->keterangan=='Kredit'){?>
                                <?= $j->total; ?>
                                <?php }
                                if($j->keterangan=='Debit'){?><p> </p>
                                <?php }; ?>
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