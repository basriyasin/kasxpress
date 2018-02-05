@extends('inc.investor.template')

@section('style')
<link href="{{ asset('css/front.index.css') }}" rel="stylesheet">
@endsection

@section('content')
<section id="heroV2" class="hero-bg-2 text-black padding-bottom-50">
    <div class="hero-container no-bg">
        <div class="row col-md-12">
            <div class="section-header col-center col-md-12">
                <h3 class="section-title" id="nav-section-title">Cari Peminjam</h3>
            </div>


            <!-----------------------------
            Transaction Tab
        ------------------------------>
            <div class="row col-md-11 col-center">
                <ul class="nav nav-tabs col-center">
                    <li class="active"><a href="#market" data-toggle="tab" title="Cari Peminjam">Peminjam</a></li>
                    <li class=""><a href="#checkout" data-toggle="tab" title="Checkout Pendanaan">Checkout</a></li>
                    <li class=""><a href="#history" data-toggle="tab" title="Riwayat Pendanaan">Riwayat</a></li>
                </ul>
                <div class="tab-content" >

                    <!-----------------------------
                    Market Tab
                ------------------------------>
                    <div id="market" class="tab-pane fade in active">
                        <div class="table-responsive">          
                            <table class="table table-striped table">
                                <thead style="vertical-align: middle">
                                    <tr>
                                        <th width="1%">No</th>
                                        <th width="20%">Jumlah Pendanaan</th>
                                        <th width="5%">Tanggal Publikasi</th>
                                        <th width="3%">Rating</th>
                                        <th width="10%">Bunga Efektif & Simpel</th>
                                        <th width="13%">Pinjaman</th>
                                        <th width="3%">Tenor</th>
                                        <th width="10%">Progress</th>
                                        <th width="20%">Jumlah & Waktu Tersisa</th>
                                        <th width="15%">Perusahaan</th>
                                        <th width="8%">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <input name="pendanaan" placeholder="Rp. 0,00"><br>
                                            <span class="text-sm-left text-muted">Min. Rp. 1.000.000,00</span>
                                        </td>
                                        <td>
                                            <div class="publication-date">
                                                <span class="month">Jan</span>
                                                <span class="day">12</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="rating">AA</span>
                                        </td>
                                        <td>12.5%<br>15.5%</td>
                                        <td>Rp. 2.500.000,00</td>
                                        <td>24 bulan</td>
                                        <td> 
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                    80%
                                                </div>
                                            </div> 
                                        </td>
                                        <td>
                                            Rp. 1.000.000,00<br>
                                            3 hari
                                        </td>
                                        <td>PT. XYZ</td>
                                        <td>Funding</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <input name="pendanaan" placeholder="Rp. 0,00"><br>
                                            <span class="text-muted">Min. Rp. 1.000.000,00</span>
                                        </td>
                                        <td>
                                            <div class="publication-date">
                                                <span class="month">Jan</span>
                                                <span class="day">16</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="rating">A</span>
                                        </td>
                                        <td>12.5%<br>15.5%</td>
                                        <td>Rp. 3.000.000,00</td>
                                        <td>24 bulan</td>
                                        <td> 
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                    50%
                                                </div>
                                            </div> 
                                        </td>
                                        <td>
                                            Rp. 1.500.000,00<br>
                                            7 hari
                                        </td>
                                        <td>PT. Lalala</td>
                                        <td>Funding</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="11" align="center">
                                            <div class="pagination col-center col-md-1">
                                                <a class="active" href="#">1</a>
                                                <a href="#">2</a>
                                                <a href="#">3</a>
                                                <a href="#">4</a>
                                                <a href="#">5</a>
                                                <a href="#">6</a>
                                                <a href="#">7</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="col-md-12 row">
                                <div class="col-md-12">
                                    <input type="submit" class="float-right col-md-1 btn btn-main" value="Checkout">&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-----------------------------
                    End of Market Tab
                ------------------------------>



                    <!-----------------------------
                    Checkout Tab
                ------------------------------>
                    <div id="checkout" class="tab-pane fade in">
                        <div class="table-responsive">          
                            <table class="table table-striped table">
                                <thead style="vertical-align: middle">
                                    <tr>
                                        <th width="1%">No</th>
                                        <th width="20%">Jumlah Pendanaan</th>
                                        <th width="5%">Tanggal Publikasi</th>
                                        <th width="3%">Rating</th>
                                        <th width="10%">Bunga Efektif & Simpel</th>
                                        <th width="13%">Pinjaman</th>
                                        <th width="3%">Tenor</th>
                                        <th width="10%">Progress</th>
                                        <th width="20%">Jumlah & Waktu Tersisa</th>
                                        <th width="15%">Perusahaan</th>
                                        <th width="8%">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td align="left">
                                            Rp. 1.000.000,00
                                        </td>
                                        <td>
                                            <div class="publication-date">
                                                <span class="month">Jan</span>
                                                <span class="day">12</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="rating">AA</span>
                                        </td>
                                        <td>12.5%<br>15.5%</td>
                                        <td>Rp. 2.500.000,00</td>
                                        <td>24 bulan</td>
                                        <td> 
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                    80%
                                                </div>
                                            </div> 
                                        </td>
                                        <td>
                                            Rp. 1.000.000,00<br>
                                            3 hari
                                        </td>
                                        <td>PT. XYZ</td>
                                        <td>Funding</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td align="left">
                                            Rp. 1.250.000,00
                                        </td>
                                        <td>
                                            <div class="publication-date">
                                                <span class="month">Jan</span>
                                                <span class="day">16</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="rating">A</span>
                                        </td>
                                        <td>12.5%<br>15.5%</td>
                                        <td>Rp. 3.000.000,00</td>
                                        <td>24 bulan</td>
                                        <td> 
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                    50%
                                                </div>
                                            </div> 
                                        </td>
                                        <td>
                                            Rp. 1.500.000,00<br>
                                            7 hari
                                        </td>
                                        <td>PT. Lalala</td>
                                        <td>Funding</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="col-md-12 row">
                                <div class="col-md-12">
                                    <p class="text-left text-muted">
                                        <span class="text-danger">*</span>
                                        Semua bentuk pendanaan memiliki resiko, 
                                        termasuk resiko kehilangan jumlah dana yang diberikan. 
                                        Kegiatan pendanaan belum tentu sesuai untuk semua orang.
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="float-right col-md-1 btn btn-main" value="Konfirmasi">&nbsp;
                                    <input type="submit" class="float-right col-md-1 btn margin-right-20" id="back" value="Kembali">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-----------------------------
                    End of Checkout Tab
                    ------------------------------>



                    <!-----------------------------
                    History Tab
                ------------------------------>
                    <div id="history" class="tab-pane fade in">
                        <div class="table-responsive">          
                            <table class="table table-striped table">
                                <thead style="vertical-align: middle">
                                    <tr>
                                        <th width="1%">No</th>
                                        <th width="20%">Jumlah Pendanaan</th>
                                        <th width="5%">Tanggal Publikasi</th>
                                        <th width="3%">Rating</th>
                                        <th width="10%">Bunga Efektif & Simpel</th>
                                        <th width="13%">Pinjaman</th>
                                        <th width="3%">Tenor</th>
                                        <th width="10%">Progress</th>
                                        <th width="20%">Jumlah & Waktu Tersisa</th>
                                        <th width="15%">Perusahaan</th>
                                        <th width="8%">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td align="left">
                                            Rp. 1.000.000,00
                                        </td>
                                        <td>
                                            <div class="publication-date">
                                                <span class="month">Jan</span>
                                                <span class="day">12</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="rating">AA</span>
                                        </td>
                                        <td>12.5%<br>15.5%</td>
                                        <td>Rp. 2.500.000,00</td>
                                        <td>24 bulan</td>
                                        <td> 
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                                    80%
                                                </div>
                                            </div> 
                                        </td>
                                        <td>
                                            Rp. 1.000.000,00<br>
                                            3 hari
                                        </td>
                                        <td>PT. XYZ</td>
                                        <td>Funding</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td align="left">
                                            Rp. 1.000.000,00
                                        </td>
                                        <td>
                                            <div class="publication-date">
                                                <span class="month">Jan</span>
                                                <span class="day">16</span>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="rating">A</span>
                                        </td>
                                        <td>12.5%<br>15.5%</td>
                                        <td>Rp. 3.000.000,00</td>
                                        <td>24 bulan</td>
                                        <td> 
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                                    50%
                                                </div>
                                            </div> 
                                        </td>
                                        <td>
                                            Rp. 1.500.000,00<br>
                                            7 hari
                                        </td>
                                        <td>PT. Lalala</td>
                                        <td>Funding</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="11" align="center">
                                            <div class="pagination col-center col-md-1">
                                                <a class="active" href="#">1</a>
                                                <a href="#">2</a>
                                                <a href="#">3</a>
                                                <a href="#">4</a>
                                                <a href="#">5</a>
                                                <a href="#">6</a>
                                                <a href="#">7</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-----------------------------
                    End of History Tab
                ------------------------------>

                </div>
            </div>
            <!-----------------------------
            End of Transaction Tab
        ------------------------------>

        </div>

        <hr class="margin-vertical-50">
        <div class="row col-md-10 col-center">
            <div class="col-md-4">
                <h5 align="left">Total Pinjaman: 0</h5>
            </div>
            <div class="col-md-8">
                <h5 align="left">Total Nominal Pinjaman: Rp. 0,00</h5>
            </div>
        </div>

        <div class="row col-md-10 col-center text-left">
            <div class="col-md-4">
                Status
            </div>
            <div class="col-md-8 text-justify">
                <ul class="no-padding-left">
                    <li>
                        Aktif - Pinjaman yang sudah didistribusikan dan cicilan yang sedang berjalan.
                    </li>
                    <li>
                        Pendanaan Tuntas - Pinjaman yang sudah tuntas pendanaannya, namum belum didistribusikan 
                        (Setelah "Pendanaan Tuntas" atau pinjaman 100% terdanai melalui crowdfunding, akan ada 
                        jeda waktu ± 7 hari kerja hingga pinjaman didistribusikan ke peminjan dan menjadi "Aktif".
                        Pemberi pinjaman akan mulai menerima repayment sebulan setelah pinjaman menjadi "Aktif")
                    </li>
                    <li>
                        Pendanaan - Pinjaman yang terbuka untuk pendanaan.
                    </li>
                    <li>
                        Tuntas - Pinjaman yang cicilannya telah dibayar secara tuntuas
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <p class="text-justify">
                    Catatan: Kami akan mengirimkan status repayment untuk pinjaman yang telah Anda danai 7 hari 
                    kerja setelah tanggal jatuh tempo tiap bulan.
                </p>
                <p class="text-justify">
                    Peringkat adalah estimasi kesanggupan karyawan melunasi pinjaman berdasarkan informasi yang
                    tersedia bagi KasXpress dan tunduk pada perubahan keadaan. Peringkan bukan rekomendasi untuk
                    memberi pinjaman, juka bukan dukungan/<i>endorsement</i> atau non-dukungan/<i>non-endorsement</i>
                    bagi satu karyawan. Informasi yang diterima KasXpress berasal dari sumber yang dapat dipercaya,
                    tetapi keakuratan dan kelengkapannya tidak dijamin. KasXpress  tidak mengambil bagian dari risiko 
                    penggunaan ataupun non-penggunaan dari peringkat ini. Tidak ada bagian dari laporan ini yang
                    dapat diperbanyak, disimpan dalam sistem pencarian, atau ditransmisikan dalam bentuk apapun dan
                    dengan cara apapun. Peringkat dan informasi tersebut tidak termasuk informasi sebagaimana diatur
                    dalam Pasal 4 Peraturan Bank Indonesia 15/1/PB/2013 Tanggal 18 Februari 2013 Tentang Lembaga
                    Pengelola Informasi Perkreditan.
                </p>
            </div>
        </div>

        <hr class="margin-vertical-50">

        <div class="col-md-10 col-center">
            <h3 align="center">KasXpress Rating (Bunga Efektif)</h3>
            <div class="row text-center rating-group margin-vertical-50">
                <div class="col-md-1 col-center">
                    <div class="rating rating-aa">
                        AA
                        <span class="rate">16% - 20%</span>
                    </div>
                </div>
                <div class="col-md-1 col-center">
                    <div class="rating rating-a">
                        A
                        <span class="rate">21% - 23%</span>
                    </div>
                </div>
                <div class="col-md-1 col-center">
                    <div class="rating rating-bb">
                        BB
                        <span class="rate">25% - 27%</span>
                    </div>
                </div>
                <div class="col-md-1 col-center">
                    <div class="rating rating-b">
                        B
                        <span class="rate">28% - 30%</span>
                    </div>
                </div>
                <div class="col-md-1 col-center">
                    <div class="rating rating-c">
                        CC
                        <span class="rate">32% - 35%</span>
                    </div>
                </div>
                <div class="col-md-1 col-center">
                    <div class="rating rating-cc">
                        C
                        <span class="rate">36% - 40%</span>
                    </div>
                </div>
                <div class="col-md-1 col-center">
                    <div class="rating rating-d">
                        D
                        <span class="rate">40% - 45%</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-10 col-center text-justify">
            <p class="text-justify">
                Nilai Rating KasXpress adalah estimasi level risiko peminjam. Lewat penilaian ini, KasXpress memberikan
                angka numerik terhadap probabilitas dan kemampuan peminjam melunasi kewajibannya. Nilai ini dihasilkan
                melalui metode khusus yang ditunjang oleh sumber data eksternal berisu informasi tentang Karyawan Indonesia,
                data laporan keuangan, kunjungan langsung, keadaan pasar, struktur pinjaman dan metode lainnya.
            </p>
            <b  class="text-left">Pernyataan:</b>
            <p class="text-justify">
                Kami dari KasXpress berusaha sebaik mingkini mendapatkan informasi terpercaya dan konprehensif, namun
                kelengkapan dan ketepatan informasi tidak bisa dijamin. Rating dapat berubah sewaktu-waktu dan bukanlah
                sebuah rekomendasi. KasXpress tidak bertanggung jawab atas pilihan Anda menggunakan sistem rating kamii.
                Isi laporan ini tidak boleh diperbanyak, disimpan ataupun disebarkan dalam bentuk dan cara apapun.
            </p>
        </div>

        <hr class="margin-vertical-50">

        <div class="col-md-10 col-center text-justify">
            <h3 align="center" class="margin-vertical-50 text-center text-muted text-center">Suku Bunga Simpel vs. Suku Bunga Efektif</h3>
            <p class="text-justify">
                Semua pinjaman memiliki tiga elemen utama: jumlah pokok, sukuu bunga dan jumlah bulanan pembayaran.
                Dari berbagai metode menghitung suku bunga pinjamann, sukubunga simpel dan suku bunga efektif adalah
                dua cara paling umum.
            </p>
            <table align="center" width="80%" border="1" cellpadding="10">
                <tr>
                    <th width="50%">Suku Bunga Simiple</th>
                    <th width="50%">Suku Bunga Efektif</th>
                </tr>
                <tr>
                    <td>
                        <p>
                            Karena kemudahan metode ini, KasXpress menggunakan perhitungan suku bunga simpel untuk
                            kenyamanan anda.<br>
                            <b>Rumus suku bunga simpel pertahun<br>
                                = Jumlah Bunga / Jumlah Pokok / Jumlah Bulan Pembayaran x 12</b><br><br>

                            Contoh,<br>
                            Pinjaman 6 bulan dengan angsuran pokok Rp. 100.000.000,00 dibayar perbulan dengan bunga 
                            Rp. 5.000.000,00<br><br>

                            Simpel interest rate pertahun<br>
                            = 5.000.000 / 100.000.000 / 6 x 12<br>
                            = 10%
                        </p>
                    </td>
                    <td>
                        <p>
                            Suku Bunga Efektif menghitung imbal balik bila pembayaran bulanan diinvestasikan kembali
                            dengan suku bunga yang sama hingga akhiir periode pinjaman. Suku Bunga Efektit
                            memperhitungkan efek compounding dan frekuensi angsuran.<br><br>

                            Metode ini tidak memiliki rumus sederhana, tetapi dapat dihitung lewat fungsi RATE Excel
                            <b>Rate (nper, pmt, pv, [fv], [type], [guess])</b><br<br>

                            nper = Jumlah periode pembayaran.<br>
                            pmt = Pembayaran setiap periode, termasuk pokok dan bunga tetapi bukan biaa.
                            PV = Nilai saat inimical
                            FV = Nilai masa depan
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <b>Sebagai contoh:</b>
                        <p>
                            Suku bunga efektif biasanya lebih tinggi dari pada suku bunga simpel meskipun keuntungan
                            yang Anda dapatkan sama. Di bawah adah contoh perbandingan suku bunga simpel dan suku
                            bunga efektif pada pinjaman 12 bulan yang sama:
                        </p>
                        <table width="40%" align="center" class="small-rate-table" height="0">
                            <thead>
                                <tr>
                                    <th width="30%" style="border-bottom: 1px solid black;">Suku Bunga Simple</th>
                                    <th width="30%" style="border-bottom: 1px solid black;">&nbsp;</th>
                                    <th width="30%" style="border-bottom: 1px solid black;">Suku Bunga Efektif</th>
                                </tr>
                            </thead>
                            <tr>
                                <td>14.0%</td>
                                <td>=</td>
                                <td>24.91%</td>
                            </tr>
                            <tr>
                                <td>15.0%</td>
                                <td>=</td>
                                <td>26.62%</td>
                            </tr>
                            <tr>
                                <td>16.0%</td>
                                <td>=</td>
                                <td>28.33%</td>
                            </tr>
                            <tr>
                                <td>17.0%</td>
                                <td>=</td>
                                <td>30.03%</td>
                            </tr>
                            <tr>
                                <td>18.0%</td>
                                <td>=</td>
                                <td>31.72%</td>
                            </tr>
                            <tr>
                                <td>19.0%</td>
                                <td>=</td>
                                <td>33.40%</td>
                            </tr>
                            <tr>
                                <td>20.0%</td>
                                <td>=</td>
                                <td>35.07%</td>
                            </tr>
                            <tr>
                                <td>21.0%</td>
                                <td>=</td>
                                <td>36.74%</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

</section>

@endsection


@section('script')
<script>
    $(document)
            .ready(function () {

                $('.nav-tabs a:first').tab('show');


                $('a[data-toggle="tab"]')
                        .on('show.bs.tab', function (e) {
                            $('#nav-section-title')
                                    .html(
                                            $(this).attr('title')
                                            );
                        });
            });
</script>
@endsection