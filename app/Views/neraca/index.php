<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Neraca Saldo MH Laundry</h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
    <?php endif; ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-success">Neraca Saldo</h6><br>
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

            <form action="neraca/cetak" class="form-inline">


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
                    Neraca Saldo
                </div>
                <div class="mb-5 h4 mx-auto text-center" style="width: 500px;">
                    Periode 2020 - 2021
                </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor Akun</th>
                            <th>Nama Akun</th>
                            <th>Debit</th>
                            <th>Kredit</th>

                        </tr>
                    </thead>

                    <tbody>

                        <tr>

                            <td>1101</td>
                            <td>Kas</td>

                            <td>
                                <?php print_r($kasdebit) ?>
                            </td>


                            <td>
                                <?php print_r($kaskredit) ?>
                            </td>

                        </tr>

                        <tr>

                            <td>2102</td>
                            <td>Persediaan</td>

                            <td>
                                <?php print_r($persediaandebit) ?>
                            </td>


                            <td>
                                <?php print_r($persediaankredit) ?>
                            </td>

                        </tr>

                        <tr>

                            <td>2101</td>
                            <td>Peralatan</td>

                            <td>
                                <?php print_r($peralatandebit) ?>
                            </td>


                            <td>
                                <?php print_r($peralatankredit) ?>
                            </td>

                        </tr>

                        <tr>

                            <td>3101</td>
                            <td>Piutang</td>

                            <td>
                                <?php print_r($piutangdebit) ?>
                            </td>


                            <td>
                                <?php print_r($piutangkredit) ?>
                            </td>

                        </tr>


                        <tr>

                            <td>4101</td>
                            <td>Pemasukan</td>

                            <td>
                                <?php print_r($pemasukandebit) ?>
                            </td>


                            <td>
                                <?php print_r($pemasukankredit) ?>
                            </td>

                        </tr>

                        <tr>

                            <td>5101</td>
                            <td>Beban Gaji</td>

                            <td>
                                <?php print_r($gajidebit) ?>
                            </td>

                            <td>
                                <?php print_r($gajikredit) ?>
                            </td>

                        </tr>



                        <tr>

                            <td>5102</td>
                            <td>Beban Listrik dan Air</td>

                            <td>
                                <?php print_r($listrikdebit) ?>
                            </td>


                            <td>
                                <?php print_r($listrikkredit) ?>
                            </td>

                        </tr>

                        <tr>

                            <td>5103</td>
                            <td>Beban Iklan</td>

                            <td>
                                <?php print_r($iklandebit) ?>
                            </td>


                            <td>
                                <?php print_r($iklankredit) ?>
                            </td>

                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;"><b>Total</b></td>
                            <td><b><?php print_r($debit) ?></b></td>
                            <td><b><?php print_r($kredit) ?></b></td>
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