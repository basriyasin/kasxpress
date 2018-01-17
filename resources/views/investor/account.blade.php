@extends('inc.investor.template')

@section('style')
<link href="{{ asset('css/front.index.css') }}" rel="stylesheet">
@endsection

@section('content')
<section id="hero" class="hero-bg-2 text-black">
    <div class="hero-container no-bg">
        <div class="row col-md-12">
            <div class="section-header col-center col-md-12">
                <h3 class="section-title">Akun Pemberi Pinjaman</h3>
            </div>

            <div class="row col-md-10 col-center">

                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="header">
                            <i class="fa fa-area-chart"></i>
                            Ringkasan Rekening
                        </div>
                        <div class="container">
                            <div class="item">
                                <div class="title">
                                    Total Pendapatan <span class="float-right"> Rp. 10.989.641,00</span>
                                </div>
                                <div class="progress">                                
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                    </div>
                                </div>
                            </div> 
                            <div class="item">
                                <div class="title">
                                    Total Pendanaan <span class="float-right"> Rp. 15.000.000,00</span>
                                </div>
                                <div class="progress">                                
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                    </div>
                                </div>
                            </div> 
                            <div class="item">
                                <div class="title">
                                    Total Penarikan <span class="float-right"> Rp. 0,00</span>
                                </div>
                                <div class="progress">                                
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="header">
                            <i class="fa fa-server"></i>
                            Ringkasan Dalam Proses
                        </div>
                        <div class="container">
                            <div class="item">
                                <div class="title">
                                    Deposit <span class="float-right"> Rp. 0,00</span>
                                </div>
                                <div class="progress">                                
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:0%"></div>
                                </div>
                            </div> 
                            <div class="item">
                                <div class="title">
                                    Pendanaan <span class="float-right"> Rp. 0,00</span>
                                </div>
                                <div class="progress">                                
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                    </div>
                                </div>
                            </div> 
                            <div class="item">
                                <div class="title">
                                    Penarikan <span class="float-right"> Rp. 0,00</span>
                                </div>
                                <div class="progress">                                
                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>

            <div class="row col-md-10 col-center">
                <div class="col-md-4">
                    <div class="detail-box">
                        <div class="header">
                            <i class="fa fa-level-up"></i>
                            Pendapatan
                        </div>
                        <div class="container">
                            <div class="item">
                                <div class="title">
                                    Pokok<span class="float-right"> Rp. 9.099.533,24</span>
                                </div>
                            </div> 
                            <div class="item">
                                <div class="title">
                                    Bunga <span class="float-right"> Rp. 1.649.999,94</span>
                                </div>
                            </div> 
                            <div class="item">
                                <div class="title">
                                    Dana Keterlambatan Pinjaman<span class="float-right"> Rp. 0,00</span>
                                </div>
                            </div> 
                        </div>
                        <div class="footer">
                            <div class="item">
                                <div class="title">
                                    Total <span class="float-right"> Rp. 10.989.461,00</span>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="detail-box">
                        <div class="header">
                            <i class="fa fa-level-down"></i>
                            Pengeluaran
                        </div>
                        <div class="container">
                            <div class="item">
                                <div class="title">
                                    Biaya Layanan
                                    <span class="float-right"> Rp. 322.486,00</span>
                                </div>
                            </div> 
                            <div class="item">
                                <div class="title">
                                    Biaya Hukum
                                    <span class="float-right"> Rp. 0,00</span>
                                </div>
                            </div> 
                            <div class="item">
                                <div class="title">
                                    Write Off
                                    <span class="float-right"> Rp. 0,00</span>
                                </div>
                            </div> 
                        </div>
                        <div class="footer">
                            <div class="item">
                                <div class="title">
                                    Total <span class="float-right"> Rp. 322.486,00</span>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>


                <div class="col-md-4 clearfix">
                    <div class="detail-box">
                        <div class="header">
                            <i class="fa fa-umbrella"></i>
                            Pajak
                        </div>
                        <div class="container">
                            <div class="item">
                                <div class="title">
                                    Pengembalian Pajak
                                    <span class="float-right"> Rp. 91.778,12</span>
                                </div>
                            </div> 
                        </div>
                        <div class="footer">
                            <div class="item">
                                <div class="title">
                                    Total <span class="float-right"> Rp. 91.778,12</span>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>


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

            });
</script>
@endsection