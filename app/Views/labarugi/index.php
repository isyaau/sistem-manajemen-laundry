<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Laba Rugi MH Laundry</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Laporan Laba Rugi</h6><br>
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

            <form action="labarugi/cetak" class="form-inline">


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
                    Laporan Laba Rugi
                </div>
                <div class="mb-3 h4 mx-auto text-center" style="width: 500px;">
                    Periode 2020 - 2021
                </div>
                <table border="0" id="dataTable" width="100%" cellspacing="0">

                    <tbody>
                        <tr>
                            <td><b>Pendapatan</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Pendapatan Jasa</td>
                            <td>Rp. <?php print_r($pemasukan)?></td>
                        </tr>

                        <tr style="height: 70px;">
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td> <b>Beban</b></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Peralatan</td>
                            <td>Rp. <?php print_r($peralatan)?></td>
                        </tr>
                        <tr>
                            <td>Persediaan</td>
                            <td>Rp. <?php print_r($persediaan)?></td>
                        </tr>
                        <tr>
                            <td>Beban iklan</td>
                            <td>Rp. <?php print_r($bebaniklan)?></td>
                        </tr>
                        <tr>
                            <td>Beban Gaji</td>
                            <td>Rp. <?php print_r($bebangaji)?></td>
                        </tr>
                        <tr>
                            <td>Beban Listrik</td>
                            <td>Rp. <?php print_r($bebanlistrik)?></td>
                        </tr>
                        <tr>
                            <td>Piutang</td>
                            <td>Rp. <?php print_r($piutang)?></td>
                        </tr>
                        <tr style="height: 70px;">
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><b>Total</b></td>
                            <td>Rp. <?php print_r($kasdebit-$kaskredit)?></td>
                        </tr>
                        <tr style="height: 50px;">
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <td>Keterangan :</td>
                        </tr>
                        <tr>
                            <td>(-) Rugi</td>
                        </tr>
                        <tr>
                            <td>(+) Laba</td>
                        </tr>


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