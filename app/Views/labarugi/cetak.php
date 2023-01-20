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
                        <td><?php print_r($pemasukan)?></td>
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
                        <td><?php print_r($peralatan)?></td>
                    </tr>
                    <tr>
                        <td>Persediaan</td>
                        <td><?php print_r($persediaan)?></td>
                    </tr>
                    <tr>
                        <td>Beban iklan</td>
                        <td><?php print_r($bebaniklan)?></td>
                    </tr>
                    <tr>
                        <td>Beban Gaji</td>
                        <td><?php print_r($bebangaji)?></td>
                    </tr>
                    <tr>
                        <td>Beban Listrik</td>
                        <td><?php print_r($bebanlistrik)?></td>
                    </tr>
                    <tr>
                        <td>Piutang</td>
                        <td><?php print_r($piutang)?></td>
                    </tr>
                    <tr style="height: 70px;">
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><b>Total</b></td>
                        <td> <?php print_r($kasdebit-$kaskredit)?></td>
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