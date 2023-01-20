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
    <div class="mx-5">
        <div class="mx-5">
            <div class="mx-5">

                <table border="0" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <td style="text-align: right;" colspan="2"><img
                                    src="<?= base_url(); ?>/assets/img/img11.png" width="100px" alt="">
                            </td>
                            <td colspan="3">
                                <div class="h2  text-center" style="width: 500px;">
                                    MH LAUNDRY
                                </div>
                                <div class="h4  text-center" style="width: 500px;">
                                    Jl.Sidorejo RT 13/ RW 06
                                    Kebonsari Madiun
                                </div>
                                <div class="h4  text-center" style="width: 500px;">
                                    No HP: 081233005979 / 085645897243
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                _____________________________________________________________________________________________________________________________
                            </td>
                        </tr>

                        <tr>
                            <td>Nama Pelanggan</td>
                            <td>:
                                <?= $joinpemasukan->getRow()->nama_pelanggan; ?>
                            </td>
                            <td></td>
                            <td>Tanggal</td>
                            <td>: <?= $joinpemasukan->getRow()->created_at; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>Alamat</td>
                            <td>: <?= $joinpemasukan->getRow()->alamat; ?></td>
                            <td></td>
                            <td>No Transaksi</td>
                            <td>: <?= $joinpemasukan->getRow()->id_pemasukan; ?></td>
                        </tr>

                        <tr>
                            <td>No HP</td>
                            <td>: <?= $joinpemasukan->getRow()->no_hp; ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><br></td>
                        </tr>

                        <tr>
                            <td colspan="5">
                                _____________________________________________________________________________________________________________________________
                            </td>
                        </tr>

                        <tr style="text-align: center;">

                            <th>Jenis Laundry</th>
                            <th>Pelayanan</th>
                            <th>Harga</th>
                            <th>Satuan</th>
                            <th>Jumlah</th>



                        </tr>
                    </thead>

                    <tbody>


                        <tr style="text-align: center;">
                            <td>Kiloan</td>
                            <td>Setrika</td>
                            <td>4500</td>
                            <td>
                                <?php if($joinpemasukan->getRow()->id_laundry==46){?>
                                <?= $joinpemasukan->getRow()->jumlah; ?>
                                <?php }
                               else{  ?>
                                <p></p>
                                <?php }; ?>
                            </td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Kiloan</td>
                            <td>Cuci Basah</td>
                            <td>3000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Kiloan</td>
                            <td>Cuci Kering</td>
                            <td>3000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Kiloan</td>
                            <td>Cuci + Setrika</td>
                            <td>5000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Satuan</td>
                            <td>Sepatu Kecil</td>
                            <td>7000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Satuan</td>
                            <td>Sepatu Besar</td>
                            <td>10000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Satuan</td>
                            <td>Helm Kecil</td>
                            <td>10000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Satuan</td>
                            <td>Helm Besar</td>
                            <td>15000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Satuan</td>
                            <td>Jaket Kecil</td>
                            <td>8000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Satuan</td>
                            <td>Jaket Besar</td>
                            <td>15000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Satuan</td>
                            <td>Boneka Kecil</td>
                            <td>10000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Satuan</td>
                            <td>Boneka Sedang</td>
                            <td>15000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Satuan</td>
                            <td>Boneka Besar</td>
                            <td>18000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Satuan</td>
                            <td>Tas Kecil</td>
                            <td>10000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Satuan</td>
                            <td>Tas Besar</td>
                            <td>10000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Satuan</td>
                            <td>Bed Cover</td>
                            <td>15000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Meteran</td>
                            <td>Karpet Tipis</td>
                            <td>15000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Meteran</td>
                            <td>Karpet Tebal</td>
                            <td>20000</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>Meteran</td>
                            <td>Kasur Lantai</td>
                            <td>15000</td>
                            <td></td>
                            <td></td>
                        </tr>



                        <tr style="text-align: center;">

                            <td><?= $joinpemasukan->getRow()->tipe; ?></td>
                            <td><?= $joinpemasukan->getRow()->jenis_laundry; ?></td>
                            <td><?= $joinpemasukan->getRow()->harga; ?></td>
                            <td><?= $joinpemasukan->getRow()->jumlah; ?></td>
                            <td><?= $joinpemasukan->getRow()->harga*$joinpemasukan->getRow()->jumlah; ?></td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                            <td style="text-align: center;">
                                ____________ +
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: right;">Diskon</td>
                            <td style="text-align: center;"><?= $joinpemasukan->getRow()->diskon; ?>%</td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: right;">Total</td>
                            <td style="text-align: center;"><?= $joinpemasukan->getRow()->total; ?></td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                _____________________________________________________________________________________________________________________________
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    * Pengambilan Barang Harus Disertai Nota<br>
                    * Klaim Berlaku 24 Jam Setelah Barang Diambil<br>
                    * Kain Luntur, Berkerut Karena Sifat Kain Di Luar Tanggungan<br>
                    * Cucian yang tidak diambil dalam waktu 2 bulan, bila rusak/hilang bukan tanggung jawab
                    kami<br>
                    * Dapat Melayani Antar Laundry Antar jemput<br>
                </p>

            </div>
        </div>

    </div>

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