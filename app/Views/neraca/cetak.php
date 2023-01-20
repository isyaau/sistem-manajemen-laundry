<!DOCTYPE html>
<html>

<head>
    <title> CETAK PRINT LAPORAN LABA RUGI</title>
    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
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
    <script>
    window.print();
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/assets/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/assets/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/assets/js/sb-admin-2.min.js"></script>


</body>

</html>