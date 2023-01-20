<!DOCTYPE html>
<html>

<head>
    <title> CETAK PRINT LAPORAN JURNAL UMUM</title>
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
                Jurnal Umum
            </div>
            <div class="mb-5 h4 mx-auto text-center" style="width: 500px;">
                Periode 2020 - 2021
            </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Akun</th>
                        <th>No Akun</th>
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