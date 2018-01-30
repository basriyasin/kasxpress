@extends('inc.template')

@section('style')
<link href="{{ asset('css/investor.css') }}" rel="stylesheet">
@endsection

@section('content')
<section id="hero" class="hero-bg-1">
    <div class="row height-100">

        <div class="col-md-10 row col-center margin-top-20"  id="borrowerInfo">
            <h3 class="margin-vertical-50 col-md-12">Simulasi Pinjaman</h3>
            <div class="col-md-6">
                <div class="detail-box">
                    <div class="container">
                        <div class="tab-content">
                            <div class="col-md-12 row">
                                <form autocomplete="off" class="col-md-12 row">
                                    <div class="col-md-12">
                                        <label>Jumlah Pinjaman</label>
                                        <input class="form-control" name="namaLengkap" placeholder="" required="">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Lama Pinjaman</label>
                                        <select class="form-control" name="lamaPinjaman" required="">
                                            @for($i=1; $i<=24; $i++)
                                                <option >{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Tujuan Pinjaman</label>
                                        <select class="form-control margin-bottom-20" name="tujuanPinjaman" required="">
                                            <option >Acara Keluarga</option>
                                            <option >Modal Usaha</option>
                                        </select>
                                        <textarea class="form-control" name="tujuanPinjaman" rows="5"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Darimana Anda Tahu tentang KasXpress?</label>
                                        <select class="form-control margin-bottom-20" name="ad" required="">
                                            <option >Iklan Google</option>
                                            <option >Pencarian Google</option>
                                            <option >Media Cetak</option>
                                            <option >Teman</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="margin-top-20 btn btn-main" type="submit" value="Selanjutnya">    
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="detail-box detailed-box-simulation bg-gray">
                    <div class="header">
                        Simulasi Pembayaran
                    </div>
                    <div class="container">
                        <div class="col-md-12 row border-bottom margin-bottom-20">
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="title">
                                        Nilai Pinjaman:<br>
                                        <span class="item">Rp. 5.000.000,00</span>
                                    </div>
                                </div> 
                                <div class="item">
                                    <div class="title">
                                        Nilai Pencairan:<br>
                                        <span class="item">Rp. 4.750.000,00</span>
                                    </div>
                                </div> 
                            </div>
                            <div class="col-md-6">
                                <div class="item">
                                    <div class="title">
                                        Biaya KasXpress:<br>
                                        <span class="item">3% - 5%</span>
                                    </div>
                                </div> 
                                <div class="item">
                                    <div class="title">
                                        Bunga <i>Flat</i> Per Bulan:<br>
                                        <span class="item">0.90% - 2.20%</span>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-12 row border-bottom margin-bottom-20">
                            <div class="col-md-12">
                                <div class="item">
                                    <div class="title">
                                        Cicilan Per Bulan:<br>
                                        <span class="item">Rp. 461.667,00 - Rp. 526.667,00</span><br>
                                        <span class="text-small text-muted"><i>*) Biaya pinjaman diipengaruhi oleh hasil analisis credit-scoring dari data peminijam.</i></span>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="col-md-12 row">
                            <div class="col-md-12">
                                <div class="item">
                                    <div class="title">
                                        Lama Pinjaman:<br>
                                        <span class="item">12 Bulan</span>
                                    </div>
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
//    $(document)
//            .ready(function () {
//
//                $('.nav-tabs a:first').tab('show');
//
//            });
</script>
@endsection