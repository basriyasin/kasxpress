@extends('inc.template')

@section('style')
<link href="{{ asset('css/front.index.css') }}" rel="stylesheet">
@endsection

@section('content')
<section id="hero" class="hero-bg-1">
    <div class="hero-container">
        <div class="row col-md-12 col-center">
            <div class="col-md-6 col-center text-lg-left text-white">
                <h3>Mau Uang Tunai Hingga Rp 3 Juta?</h3>
                <p>
                    Cukup dengan KTP dan foto diri terbaru, pinjaman bisa cair dalam 24 jam. Ayo pinjam sekarang dengan Klik tombol ajukan pinjaman
                </p>
            </div>
            <div class="col-md-4 col-center">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#borrow" data-toggle="tab">Pinjaman</a>
                    </li>
                    <li class="">
                        <a href="#invest" data-toggle="tab">Pendanaan</a>
                    </li>
                </ul>
                <div class="tab-content" >
                    <div id="borrow" class="tab-pane fade in active">
                        <form autocomplete="off" class="">
                            <input class="form-control" name="amount" placeholder="Berapa yang Anda butuhkan?" required="" type="text">
                            <select class="form-control" name="terms" placeholder="Berapa lama?" required="" >
                                <option value="0">Berapa lama?</option>
                                <option value="3">3 bulan</option>
                                <option value="6">6 bulan</option>
                                <option value="9">9 bulan</option>
                                <option value="12">12 bulan</option>
                                <option value="15">15 bulan</option>
                                <option value="18">18 bulan</option>
                                <option value="21">21 bulan</option>
                                <option value="24">24 bulan</option>
                            </select>
                            <input class="form-control" name="name" placeholder="Nama" required="" type="text">
                            <input class="form-control" name="contact" placeholder="Telepon" required="" type="text">
                            <input class="form-control" name="email" placeholder="Email" required="" type="email">
                            <input class="form-control" name="company" placeholder="Nama Perusahaan" required="" type="text">
                            <select class="form-control" name="companytypes" placeholder="Bentuk Usaha" required="">
                                <option value="NULL">Bentuk Usaha</option>
                                <option value="PT">PT</option>
                                <option value="CV">CV</option>
                                <option value="Perseorangan">Perseorangan</option>
                            </select>
                            <button class="btn btn-main" type="submit">SIMULASI</button>    
                        </form>
                    </div>
                    <div id="invest" class="tab-pane fade">
                        <form autocomplete="off" class="ng-invalid ng-touched">
                            <input autocomplete="off" class="form-control" formcontrolname="fullName" placeholder="Nama *" type="text">
                            <input autocomplete="off" class="form-control" formcontrolname="userName" placeholder="Email *" type="text">
                            <input autocomplete="off" class="form-control" formcontrolname="mobilePhoneNumber" placeholder="No. Telepon *" type="text">
                            <input autocomplete="off" class="form-control" formcontrolname="password" placeholder="Password" type="password">
                            <input autocomplete="off" class="form-control" formcontrolname="retypedPassword" placeholder="Konfirmasi Password" type="password">
                            <!--
                            <span style="font-size:11px; line-height:1.1"> 
                                Password wajib mengandung: Minimal 8 karakter | Minimal 1 huruf kapital dan 1 huruf kecil | Minimal 1 angka
                            </span>
                            -->
                            <input autocomplete="off" class="form-control"placeholder="Nama/Email Referral/Kode Referral" type="text">
                            <select class="form-control selectboxbg" formcontrolname="howDidYouFindUs" style="margin-left:-5px">
                                <option value="">Dari mana Anda tahu tentang kami? *</option>
                                <option value="Google Search">Google Search</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Media Artikel">Media Artikel</option>
                                <option value="Dari Teman">Dari Teman</option>
                                <option value="Linkedin atau Twitter">Linkedin atau Twitter</option>
                                <option value="Iklan">Iklan</option>
                                <option value="Other">Lainnya</option>
                            </select>
                            <button class="btn btn-main" type="submit">DAFTAR</button>    
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="hero" class="paralax hero-bg-2 text-black">
    <div class="hero-container no-bg">
        <div class="row col-md-12">
            <div class="col-md-6 col-center text-lg-left white">
                <div class="section-header">
                    <h3 class="section-title">KasXpress?</h3>
                </div>
                <p class="text-justify">
                    KasXpress adalah pionir layanan peer-to-peer lending berbasis teknologi finansial di Indonesia. 
                    Kami mendukung pertumbuhan bisnis lokal dan membentuk dunia keuangan yang lebih inklusif dan inovatif 
                    dengan menghubungkan Karyawan berpotensi dan pemberi pinjaman. Pendekatan KasXpress telah menciptakan suku 
                    bunga kompetitif bagi Karyawan peminjam dan alternatif investasi yang aman dan menarik bagi pemberi pinjaman.
                </p>
                <div class="col-md-12 row">
                    <div class="col-sm-6 col-center">
                        <a href="#">Perkembangan Kami</a>
                    </div>
                    <div class="col-sm-6 col-center">
                        <a href="#">Turut Bersama Anda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="hero" class="hero-bg-3">
    <div class="hero-container">
        <div class="col-md-6 text-sm-left text-white float-right">
            <h3>Penghasilan yang menarik dari membantu Karyawan</h3>
            <p>
                Tunggu apa lagi? Bergabunglah bersama dengan para pemberi pinjaman di KasXpress.
            </p>
            <a class="btn btn-main" href="#">Bergabung Sekarang</a>
        </div>
    </div>
</section>
<section id="hero" class="hero-bg-4">
    <div class="hero-container">
        <div class="row col-md-12">
            <div class="col-md-6 col-center text-sm-left text-white">
                <h3 class="text-center">Tingkatkan bisnis Anda sekarang!</h3>
                <p class="text-center">
                    Dapatkan modal usaha yang mudah dan kembangkan usaha Anda                
                </p>
                <div class="col-md-4 col-center text-center">
                    <a class="btn btn-main" href="#">Ambil Pinjaman</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="hero" class="hero-bg-white">
    <div id="services">
        <div class="container ">
            <div class="section-header">
                <h3 class="section-title">Mengapa KasXpress?</h3>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 wow fadeInLeftBig" data-wow-delay="0.8s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-briefcase"></i></a></div>
                        <h4 class="title"><a href="">Tanpa agunan</a></h4>
                        <p class="description">Kami menghilangkan kewajiban yang umumnya dibebankan oleh Bank dan institusi keuangan lainnya</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay="0.2s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-percent"></i></a></div>
                        <h4 class="title"><a href="">Suku bunga bersahabat</a></h4>
                        <p class="description">Dapatkan suku bunga terbaik untuk kecepatan proses yang ditawarkan</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInRightBig" data-wow-delay="0.8s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-clock-o"></i></a></div>
                        <h4 class="title"><a href="">Proses singkat</a></h4>
                        <p class="description">Dengan bantuan teknologi, kami mampu menganalisis data dengan waktu yang lebih singkat </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInLeftBig" data-wow-delay="0.8s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-fighter-jet"></i></a></div>
                        <h4 class="title"><a href="">Penerimaan dana kilat</a></h4>
                        <p class="description">Anda cukup memberikan kami 6 hari untuk mengumpulkan dana dari pemberi pinjaman</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay="0.2s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-shield"></i></a></div>
                        <h4 class="title"><a href="">Platform aman</a></h4>
                        <p class="description">Kami menjamin keamanan transaksi finansial dan informasi pribadi anda</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInRightBig" data-wow-delay="0.8s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-money"></i></a></div>
                        <h4 class="title"><a href="">Pinjaman hingga 2 miliar </a></h4>
                        <p class="description">Dapatkan pinjaman antara Rp 3 juta sampai Rp 2 miliar, disesuaikan dengan kebutuhan Anda. </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInLeftBig" data-wow-delay="0.8s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-tasks"></i></a></div>
                        <h4 class="title"><a href="">Kendali penuh</a></h4>
                        <p class="description">Teknologi yang dapat membantu dan memudahkan anda atas alternatif investasi yang anda miliki</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay="0.2s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-thumbs-o-up"></i></a></div>
                        <h4 class="title"><a href="">Alternatif investasi yang terjangkau</a></h4>
                        <p class="description">Dimulai dari Rp. 1 juta dengan minimum deposit Rp. 10 juta</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInRightBig" data-wow-delay="0.8s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-file-text"></i></a></div>
                        <h4 class="title"><a href="">Review ketat</a></h4>
                        <p class="description">Lebih ketat dari review yang dilakukan oleh bank dan multifinance untuk para peminjam</p>
                    </div>
                </div>


                <!--
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-line-chart"></i></a></div>
                        <h4 class="title"><a href="">Return menarik</a></h4>
                        <p class="description">Dapatkan return yang lebih besar dari deposit biasa Lipat gandakan return Anda dengan compounding effect.
                            <br>*) Sebelum potongan
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="box">
                        <div class="icon"><a href=""><i class="fa fa-exclamation-triangle"></i></a></div>
                        <h4 class="title"><a href="">Risk Exposure terkendali</a></h4>
                        <p class="description">Menggunakan analisis kredit yang ketat dan diversifikasi Portfolio</p>
                    </div>
                </div>
                -->
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