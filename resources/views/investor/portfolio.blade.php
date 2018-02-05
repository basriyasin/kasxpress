@extends('inc.investor.template')

@section('style')
<link href="{{ asset('css/front.index.css') }}" rel="stylesheet">
@endsection

@section('content')
<section id="heroV2" class="hero-bg-2 text-black padding-bottom-50">
    <div class="hero-container no-bg">
        <div class="section-header col-center col-md-12">
            <h3 class="about-title">Pinjaman Portfolio</h3>
            <div class="large-2 medium-1 small-4 columns small-centered border-green margin-bottom-20"></div>
            <span class="font-gray">PER {{date('d F Y g:i A')}}</span>
        </div>

        <div class="container pinjamanDetail">
            <div id="box-2" class="row">
                <div class="col-md-3 wow fadeIn">
                    <div class="item" style="background-color: #0058ff;">   
                        <div class="percen">
                            <p>3</p>
                        </div>
                        <div class="dest">
                            <p>Jumlah Pinjaman</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeIn">
                    <div class="item" style="background-color: #0058ff;">
                        <div class="percen">
                            <p>1</p>
                        </div>
                        <div class="dest">
                            <p>Pinjaman Berjalan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeIn">
                    <div class="item" style="background-color: #0083ff;">
                        <div class="percen">
                            <p>74,00%</p>
                        </div>
                        <div class="dest">
                            <p>Pendanaan Diterima <span>(Pemasukan/Pendanaan)</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeIn">
                    <div class="item" style="background-color: #0096ff;">
                        <div class="percen">
                            <p>92,27%</p>
                        </div>
                        <div class="dest">
                            <p>Cicilan Sukses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="box-2" class="row">
                <div class="col-md-3 wow fadeIn">
                    <div class="item" style="background-color: #00d9c7;">
                        <div class="nominal">
                            <p>Rp 16.000.000,00</p>
                            <p class="uppersubtext">Disbursed: Rp15.000.000,00</p>
                        </div>
                        <div class="dest">
                            <p>Nominal Pendanaan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeIn">
                    <div class="item" style="background-color: #00d0ba;">
                        <div class="nominal">
                            <p>Rp 10.989.641,62</p>
                        </div>
                        <div class="dest">
                            <p>Total Pendapatan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeIn">
                    <div class="item" style="background-color: #00c5ac;">
                        <div class="nominal">
                            <p>Rp 0,00 </p>
                        </div>
                        <div class="dest">
                            <p>Perkiraan Pendapatan <span>Bulan Ini</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeIn">
                    <div class="item" style="background-color: #00b99b;">
                        <div class="nominal">
                            <p>Rp 0,00 </p>
                        </div>
                        <div class="dest">
                            <p>Pinjaman Tertunda <span>Bulan Ini</span></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr class="margin-vertical-50">
        <div class="section-header col-center col-md-12">
            <h3 class="about-title">Cicilan Pinjaman</h3>
            <div class="large-2 medium-1 small-4 columns small-centered border-green margin-bottom-20"></div>
        </div>
        <div class="container cicilanPinjaman">
            <table class="table table-responsive table-striped " width="100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="15%">Kode Pinjaman</th>
                        <th width="10%">Tenor</th>
                        <th width="20%">Pembayaran Pertama</th>
                        <th width="50%">Periode</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span>1</span></td>
                        <td>
                            <span>IBBT-17110238</span>
                        </td>
                        <td>
                            <span>24 Bulan</span>
                        </td>
                        <td>
                        </td>
                        <td class="payment-history">
                            <span>Pinjaman belum dicairkan, silahkan cek kembali beberapa saat lagi. <i>Tanggal Pendanaan -</i></span>
                        </td>
                    </tr>
                    <tr>
                        <td><span>2</span></td>
                        <td>
                            <span>IBBT-17110239</span>
                        </td>
                        <td>
                            <span>6 Bulan</span>
                        </td>
                        <td>
                            <span>2018-02-01</span>
                        </td>
                        <td class="payment-history">
                            <div class="year" style="background-color: #D3D3D3;">
                                <div class="text-center"><span class="text-center">2018</span></div>
                            </div>
                            <div class="months" st1yle="background-color: #e0e0e0;">
                                <div class="item">
                                    <span>1</span>
                                </div>
                                <div class="item">
                                    <span>2</span>
                                    <i class="icon icon-green fa fa-check-circle"></i>
                                </div>
                                <div class="item">
                                    <span>3</span>
                                    <i class="icon icon-green fa fa-check-circle"></i>
                                </div>
                                <div class="item">
                                    <span>4</span>
                                    <i class="icon icon-green2 fa fa-check-circle"></i>
                                </div>
                                <div class="item">
                                    <span>5</span>
                                    <i class="icon icon-green2 fa fa-check-circle"></i>
                                </div>
                                <div class="item">
                                    <span>6</span>
                                    <i class="icon icon-green2 fa fa-check-circle"></i>
                                </div>
                                <div class="item">
                                    <span>7</span>
                                    <i class="icon icon-red fa fa-adjust"></i>
                                </div>
                                <div class="item">
                                    <span>8</span>
                                    <i class="icon icon-green fa fa-check-circle"></i>
                                </div>
                                <div class="item">
                                    <span>9</span>
                                </div>
                                <div class="item">
                                    <span>10</span>
                                </div>
                                <div class="item">
                                    <span>11</span>
                                </div>
                                <div class="item">
                                    <span>12</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><span>3</span></td>
                        <td>
                            <span>IBBT-17110239</span>
                        </td>
                        <td>
                            <span>12 Bulan</span>
                        </td>
                        <td>
                            <span>2018-06-15</span>
                        </td>
                        <td class="payment-history">
                            <div class="year" style="background-color: #D3D3D3;">
                                <div class="text-center"><span class="text-center">2018</span></div>
                            </div>
                            <div class="months" st1yle="background-color: #e0e0e0;">
                                <div class="item"><span>1</span></div>
                                <div class="item"><span>2</span></div>
                                <div class="item"><span>3</span></div>
                                <div class="item"><span>4</span></div>
                                <div class="item"><span>5</span></div>
                                <div class="item">
                                    <span>6</span>
                                    <i class="icon icon-green fa fa-check-circle"></i>
                                </div>
                                <div class="item">
                                    <span>7</span>
                                    <i class="icon icon-green fa fa-check-circle"></i>
                                </div>
                                <div class="item">
                                    <span>8</span>
                                    <i class="icon icon-green2 fa fa-check-circle"></i>
                                </div>
                                <div class="item">
                                    <span>9</span>
                                    <i class="icon icon-green2 fa fa-check-circle"></i>
                                </div>
                                <div class="item">
                                    <span>10</span>
                                    <i class="icon icon-green2 fa fa-check-circle"></i>
                                </div>
                                <div class="item">
                                    <span>11</span>
                                    <i class="icon icon-red fa fa-adjust"></i>
                                </div>
                                <div class="item">
                                    <span>12</span>
                                    <i class="icon icon-green2 fa fa-check-circle"></i>
                                </div>
                            </div>
                            <div class="year" style="background-color: #D3D3D3;">
                                <div class="text-center"><span class="text-center">2019</span></div>
                            </div>
                            <div class="months" st1yle="background-color: #e0e0e0;">
                                <div class="item">
                                    <span>1</span>
                                    <i class="icon icon-green fa fa-check-circle"></i>
                                </div>
                                <div class="item">
                                    <span>2</span>
                                    <i class="icon icon-green fa fa-check-circle"></i>
                                </div>
                                <div class="item">
                                    <span>3</span>
                                    <i class="icon icon-green2 fa fa-check-circle"></i>
                                </div>
                                <div class="item">
                                    <span>4</span>
                                    <i class="icon icon-red fa fa-adjust"></i>
                                </div>
                                <div class="item">
                                    <span>5</span>
                                    <i class="icon fa fa-minus-circle"></i>
                                </div>
                                <div class="item">
                                    <span>6</span>
                                </div>
                                <div class="item">
                                    <span>7</span>
                                </div>
                                <div class="item">
                                    <span>8</span>
                                </div>
                                <div class="item">
                                    <span>9</span>
                                </div>
                                <div class="item">
                                    <span>10</span>
                                </div>
                                <div class="item">
                                    <span>11</span>
                                </div>
                                <div class="item">
                                    <span>12</span>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>


            <div class="container" style="margin:10px auto 60px">
                <p class="text-center" style="font-size: 12px">* Semua status cicilan akan di mutahirkan pada tanggal 8 dan 23 setiap bulan, atau pada hari kerja berikutnya apabila tanggal-tanggal tersebut merupakan hari libur.</p>
                <div class="row" style="max-width:900px; margin: 0 auto;font-size: 10px">
                    <div class="col-sm-3 col-xs-6">
                        <div class="icon icon-green">
                            <i class="fa fa-check-circle"></i>
                        </div>
                        Pembayaran tepat waktu 
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="icon icon-green2">
                            <i class="fa fa-check-circle"></i>
                        </div>
                        Pembayaran terlambat
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="icon icon-red">
                            <i class="fa fa-adjust"></i>
                        </div>
                        Pembayaran parsial
                    </div>
                    <div class="col-sm-3 col-xs-6">
                        <div class="icon">
                            <i class="fa fa-minus-circle"></i>
                        </div>
                        Pembayaran tertunda
                    </div>
                </div>
            </div>

        </div>


        <hr class="margin-vertical-50">
        <div class="section-header col-center col-md-12">
            <h3 class="about-title">Detail Pinjaman</h3>
            <div class="large-2 medium-1 small-4 columns small-centered border-green margin-bottom-20"></div>
        </div>

        <div class="container cicilanPinjaman">
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th width="10%">No</th>
                        <th width="10%">Kode Pinjaman</th>
                        <th width="10%">Bung Simpel <br>(%)</th>
                        <th width="10%">Bunga Efektif <br>(%)</th>
                        <th width="10%">Tenur</th>
                        <th width="10%">Pendanaan Anda <br>(Rp)</th>
                        <th width="10%">Perkiraan Cicilan <br>(Rp)</th>
                        <th width="10%">Realisasi Cicilan <br>(Rp)</th>
                        <th width="10%">Status</th>
                        <th width="10%">Factsheet</th>
                        <th width="10%">Keterangan</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><span>1</span></td>
                        <td>
                            <span>IBBT-17110238</span>
                        </td>
                        <td>
                            <span>16,00</span>
                        </td>
                        <td>
                            <span>23,90</span>
                        </td>
                        <td>
                            <span>24 Bulan</span>
                        </td>
                        <td>
                            <span>1.000.000,00</span>
                        </td>
                        <td>
                            <span>0,00</span>
                        </td>
                        <td>
                            <span>0,00</span>
                        </td>
                        <td>
                            <span>FUNDING</span>
                        </td>
                        <td>
                            <span><i class="fa fa-file-pdf-o"></i></span>
                        </td>
                        <td>

                        </td>

                    </tr>



                    <tr>
                        <td><span>2</span></td>
                        <td>
                            <span>IBBT-17110239</span>
                        </td>
                        <td>
                            <span>16,00</span>
                        </td>
                        <td>
                            <span>23,90</span>
                        </td>
                        <td>
                            <span>3 Bulan</span>
                        </td>
                        <td>
                            <span>1.000.000,00</span>
                        </td>
                        <td>
                            <span>0,00</span>
                        </td>
                        <td>
                            <span>0,00</span>
                        </td>
                        <td>
                            <span>ONGOING</span>
                        </td>
                        <td>
                            <span><i class="fa fa-file-pdf-o"></i></span>
                        </td>
                        <td>

                        </td>

                    </tr>


                </tbody>

            </table>

        </div>
    </div>
</section>

@endsection


@section('script')
<script>
    $(document)
            .ready(function () {

            });
</script>
@endsection