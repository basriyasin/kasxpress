@extends('inc.template')

@section('style')
<link href="{{ asset('css/front.index.css') }}" rel="stylesheet">
@endsection

@section('content')
<section id="portfolio" class="portfolio-bg">
    <div class="portfolio-container caption row">
        <div class="col-md-8 text-lg-left text-white">
            <h1>Cerita Kami</h1>
            <h3>Pionir <em>peer-to-peer lending marketplace</em> di Indonesia.</h3> 
            <h3>Saatnya mengenal kami lebih jauh!</h3>

        </div>
    </div>
</section>
<section id="hero" class="hero-bg-white">
    <div class="hero-container no-bg">
        <div class="col-md-12">
            <div class="col-md-12 col-center text-lg-left white">
                <div class="col-md-8 col-center text-lg-left white">
                     <div class="section-header">
                        <h3 class="about-title"> Tentang kasxpress</h3>
                        <div class="large-1 medium-1 small-4 columns small-centered border-green margin-bottom-20"></div>
                    </div>
                    <p class="text-justify">
                    KasXpress adalah pionir layanan peer-to-peer lending berbasis teknologi finansial di Indonesia. 
                    Kami mendukung pertumbuhan bisnis lokal dan membentuk dunia keuangan yang lebih inklusif dan inovatif 
                    dengan menghubungkan Karyawan berpotensi dan pemberi pinjaman. Pendekatan KasXpress telah menciptakan suku 
                    bunga kompetitif bagi Karyawan peminjam dan alternatif investasi yang aman dan menarik bagi pemberi pinjaman.
                    <br>
                    <a href="https://kasxpress.com">KasXpress.com</a> adalah platform web yang digunakan KasXpress untuk menawarkan semua pinjaman yang tersedia pada Anda, calon investor. 
                    Anda dapat menghasilkan keuntungan hingga 16% setiap tahunnya dengan pokok pinjaman yang dijamin sampai dengan 100% oleh mitra KasXpress, para Lending Partners.
                    </p>
                    <div class="blue_divider"></div>
                    <div class="section-header">
                        <h3 class="about-title"> Tim Kami</h3>
                        <div class="large-1 medium-1 small-4 columns small-centered border-green margin-bottom-20"></div>
                    </div>
                    <p class="text-center">
                        Sebagai sebuah tim, kami berkomitmen untuk membantu sesama bisnis mencapai potensi terbesar mereka 
                        sementara memungkinkan pemberi pinjaman untuk mendapatkan hasil yang baik dan memberikan kontribusi kepada masyarakat.
                        
                    </p>
                </div>
                <div class="team-container">
                    <div class="row">
                        <div class="col-md-8 col-center">
                            <div class="row">
                                <div class="text-center columns col-md-4">
                                    <img src="{{ asset('img/contact.png') }}" class="img-circle-about th border-yellow-rounded">
                                    <h5 class="gray">Danny Sutradewa</h5>
                                    <h6>Directur</h6>
                                </div>
                                <div class="text-center columns col-md-4">
                                    <img src="{{ asset('img/contact.png') }}" class="img-circle-about th border-yellow-rounded">
                                    <h5 class="gray">Edward Masili</h5>
                                    <h6>Direktur</h6>
                                </div>
                                <div class="text-center columns col-md-4">
                                    <img src="{{ asset('img/contact.png') }}" class="img-circle-about th border-yellow-rounded">
                                    <h5 class="gray">Sudarman Sutradharma</h5>
                                    <h6>Advisor</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<section class="mission-section">
        <div class="section-header">
            <h3 class="about-title">Visi</h3>
            <div class="large-1 medium-1 small-4 columns small-centered border-green margin-bottom-20"></div>
            <p style="font-style: italic; font-size: 14px; text-align: center;">
                Menjadi perusahaan finansial teknologi (teknologi keuangan) yang prudent &amp; terpercaya
                (trustworthy) dengan tujuan untuk mensejahterahkan para pekerja di Indonesia dalam aspek
                finansial.
            </p>
        </div>
        <div class="our_mission text-center" style="padding: 40px;">
            <h3 class="about-title">Misi</h3>
            <div class="large-1 medium-1 small-4 columns small-centered border-green margin-bottom-20"></div>
            <div class="margin-bottom-20">
                <div class="large-1 columns text-center">
                    <div class="icon"><a href=""><i class="fa fa-check fa-2x" aria-hidden="true"></i></a></div>
                </div>
                <div class="large-11 columns">
                    <p>
                        Memberikan pinjaman secara cepat dan mudah namun juga memperhatikan secara penuh aspek kehati-hatian dan resiko.
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="margin-bottom-20">
                <div class="large-1 columns text-center">
                    <div class="icon"><a href=""><i class="fa fa-check fa-2x" aria-hidden="true"></i></a></div>
                </div>
                <div class="large-11 columns">
                    <p>
                        Selalu menjaga integritas &amp; transparansi kepada para peminjam dan pemberi pinjaman (Lender).
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="margin-bottom-20">
                <div class="large-1 columns text-center">
                    <div class="icon"><a href=""><i class="fa fa-check fa-2x" aria-hidden="true"></i></a></div>
                </div>
                <div class="large-11 columns">
                    <p>
                        Memberikan keuntungan (return) yang pasti dengan resiko yang sekecil-kecilnya kepada para pemberi pinjaman (Lender)
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="margin-bottom-20">
                <div class="large-1 columns text-center">
                    <div class="icon"><a href=""><i class="fa fa-check fa-2x" aria-hidden="true"></i></a></div>
                </div>
                <div class="large-11 columns">
                    <p>
                        Memberikan dukungan finansial dengan biaya finansial yang wajar kepada para peminjam (borrower).
                    </p>
                </div>
                <div class="clearfix"></div>
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