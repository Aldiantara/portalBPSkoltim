<?= $this->extend('admin/dashboard') ?>

<?= $this->section('content') ?>
<div class="row">
    <div class="col-xs-12">
        <div class="widget-box">
            <div class="widget-header">
                <h4 class="widget-title" style="font-family:Poppins;">Grafik Pengunjung Website</h4>
            </div>
            <br>
            <form method="get" action="/contentDashboard">
                <div class="row" style="margin-bottom:15px;">
                    <!-- PILIH TAHUN -->
                    <div>
                        <!-- <label for="">Filter Data</label> -->
                        <div class="col-xs-12 col-sm-4 col-md-3" style="margin-left: 20px;">
                            <select name="tahun" class="btn btn-white btn-default btn-round btn-block" style="height: 36px;" onchange="this.form.submit()">
                                <?php $startYear = 2023;
                                $currentYear = date('Y');
                                for ($y = $startYear; $y <= $currentYear; $y++): ?>
                                    <option value="<?= $y ?>" <?= ($tahun == $y) ? 'selected' : '' ?>>
                                        <?= $y ?>
                                    </option>
                                <?php endfor; ?>
                            </select>
                        </div>
                    </div>

                    <!-- BUTTON CETAK -->
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <button type="button"
                            class="btn btn-white btn-default btn-round btn-block"
                            onclick="cetakLaporan()">
                            <i class="ace-icon fa fa-print bigger-140"></i>
                            Cetak Laporan
                        </button>
                    </div>

                </div>
            </form>

            <!-- exportPDF -->
            <div id="exportPDF" style="background:white;">
                <h3 style="text-align:center;margin:20px 0; font-family: 'Montserrat', sans-serif; font-weight: 700;">
                    Laporan Statistik Pengunjung Portal Website BPS Kolaka Timur<br>
                    Tahun <?= $tahun ?>
                </h3>
                <div class="row" style="margin-top: 30px;">
                    <div class="col-xs-12">
                        <div style="width:100%; height:280px;">
                            <canvas id="visitorChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:70px;">
                    <div class="col-xs-12">
                        <div style="width:100%; height:280px;">
                            <canvas id="visitorBarChart"></canvas>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:50px; display:flex; justify-content:center">
                    <div class="col-xs-12 col-md-6">
                        <div style="width:100%; height:300px;">
                            <canvas id="visitorPieChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TABEL REKAP VISITOR -->
            <div id="rekapTable" class="row" style="margin-top:60px; visibility:hidden; height:0; overflow:hidden;">
                <div class="col-xs-12">
                    <h4 style="text-align:center; margin-bottom:15px; font-family: 'Montserrat', sans-serif; font-weight: 700;">
                        Rekap Jumlah Pengunjung Portal Website BPS Kolaka Timur <br>
                        Tahun <?= $tahun ?>
                    </h4>

                    <table class="table table-bordered table-striped">
                        <thead style="background:#2c3e50; color:white;">
                            <tr>
                                <th style="text-align:center; width:50px;">No</th>
                                <th>Bulan</th>
                                <th style="text-align:right;">Jumlah Pengunjung</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $namaBulan = [
                                1 => 'Januari',
                                2 => 'Februari',
                                3 => 'Maret',
                                4 => 'April',
                                5 => 'Mei',
                                6 => 'Juni',
                                7 => 'Juli',
                                8 => 'Agustus',
                                9 => 'September',
                                10 => 'Oktober',
                                11 => 'November',
                                12 => 'Desember'
                            ];

                            $no = 1;
                            $total = 0;

                            foreach ($dataBulan as $bulan => $jumlah):
                                $total += $jumlah;
                            ?>
                                <tr>
                                    <td style="text-align:center;"><?= $no++ ?></td>
                                    <td><?= $namaBulan[$bulan] ?></td>
                                    <td style="text-align:right;"><?= number_format($jumlah) ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr style="font-weight:bold; background:#ecf0f1;">
                                <td colspan="2" style="text-align:center;">TOTAL</td>
                                <td style="text-align:right;"><?= number_format($total) ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- END TABEL -->
            </div>
            <!-- end exportPDF -->
        </div>
    </div>
</div>
<script>
    // fungsi cetak laporan
    function cetakLaporan() {

        const grafik = document.getElementById('exportPDF');
        const rekap = document.getElementById('rekapTable');

        if (!grafik || !rekap) {
            alert('Area grafik / rekap tidak ditemukan di halaman ini');
            return;
        }

        rekap.style.visibility = 'visible';
        rekap.style.height = 'auto';

        const {
            jsPDF
        } = window.jspdf;
        const pdf = new jsPDF('p', 'mm', 'a4');

        html2canvas(grafik, {
            scale: 2
        }).then(canvasGrafik => {

            const imgGrafik = canvasGrafik.toDataURL('image/png');
            const pageWidth = 210;
            const imgHeight = canvasGrafik.height * pageWidth / canvasGrafik.width;

            pdf.addImage(imgGrafik, 'PNG', 0, 10, pageWidth, imgHeight);
            pdf.addPage();

            html2canvas(rekap, {
                scale: 2
            }).then(canvasRekap => {

                const imgRekap = canvasRekap.toDataURL('image/png');
                const imgHeight2 = canvasRekap.height * pageWidth / canvasRekap.width;

                pdf.addImage(imgRekap, 'PNG', 0, 10, pageWidth, imgHeight2);
                pdf.save('laporan-visitor-<?= $tahun ?>.pdf');

                rekap.style.visibility = 'hidden';
                rekap.style.height = '0';
            });
        });
    }
    // end Fungsi cetak laporan
</script>

<?= $this->endSection() ?>