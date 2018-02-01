@extends('inc.template')

@section('style')
<link href="{{ asset('css/front.index.css') }}" rel="stylesheet">
@endsection

@section('content')
<section id="portfolio" class="hero-bg-4">
    <div class="portfolio-container caption row">
        <div class="col-md-8 text-lg-left text-white">
            <h1>Cara Cerdas Meminjam dan Mendanai</h1>
            <p>Lebih fleksibel, aman, dan nyaman mengajukan aplikasi pinjaman serta melakukan pendanaan 
                melalui <em>peer-to-peer lending.</em></p>

        </div>
    </div>
</section>
<section id="hero" class="hero-bg-white">
    <div class="hero-container no-bg">
        <div class="col-md-8 col-sm-11 col-center text-lg-left white" >
            <div class="section-header">
                <h3 class="about-title">Cara Kerja <em>Peer-to-Peer Lending</em></h3>
                <div class="large-2 medium-1 small-4 columns small-centered border-green margin-bottom-20"></div>
            </div>
            <div class="col-md-12 text-center">
                <img class="col-lg-4 col-md-6 col-sm-12" src="{{ asset('img/how_it_works.png') }}">
            </div>
            <p class="text-justify">
                Familiar dengan situasi ini? — Seorang teman ingin meminjam kepada Anda tapi segan. Ia lalu memutuskan meminta bantuan kepada bank namun terkendala persyaratan yang rumit. 
                Di sisi lain, Anda memiliki dana berlebih tapi enggan meminjamkan karena merasa waswas. 
                Peer-to-peer lending (P2PL) ada untuk memecahkan masalah tersebut. 
                Tanpa perantara bank atau lembaga finansial lainnya, P2PL merupakan praktik meminjam dan memberikan pinjaman secara online melalui sebuah wadah yang disebut marketplace.
                <br><br>
                Mengajukan pinjaman atau mendanai dengan orang lain yang bukan teman menjadi poin penting dari keberadaan kami. 
                KasXpress akan membantu mengamankan hubungan antara Borrower dan Lender sehingga keduanya dapat sama-sama menikmati keuntungan; pinjaman berbunga kompetitif untuk Borrower dan return terbaik untuk Lender.
            </p>

            <div class="blue_divider"></div>
            <div id="services">
                <div class="section-header">
                    <h3 class="about-title"> Bagaimana Cara Kerjanya?</h3>
                    <div class="large-2 medium-1 small-4 columns small-centered border-green margin-bottom-20"></div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 wow fadeInLeftBig" data-wow-delay="0.8s">
                        <div class="box" style="height: 100%">
                            <div class="icon"><a href=""><i class="fa fa-users"></i></a></div>
                            <h4 class="title"><a href="">Borrower</a></h4>
                            <div class="col-md-12">
                                <div class="col-md-3 pull-left">
                                    <a href=""><i class="fa fa-wpforms fa-3x" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-9 columns">
                                    <p style="font-weight: bold; margin-bottom: 0;">1. Mengajukan Pinjaman</p>
                                    <p style="font-size: 14px;">Borrower melengkapi informasi yang dibutuhkan pada aplikasi pinjaman.</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-3 pull-left">
                                    <a href=""><i class="fa fa-handshake-o fa-3x" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-9 columns">
                                    <p style="font-weight: bold; margin-bottom: 0;">2. Analisis dan persetujuan</p>
                                    <p style="font-size: 14px;">Tim KasXpress menganalisis dan menyetujui aplikasi pinjaman sebelum ditawarkan kepada Pendana.</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-3 pull-left">
                                    <a href=""><i class="fa fa-money fa-3x" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-9 columns">
                                    <p style="font-weight: bold; margin-bottom: 0;">3. Membayar pinjaman</p>
                                    <p style="font-size: 14px;">Borrower membayar pinjaman melalui Investree sesuai dengan jadwal yang telah ditentukan.</p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 wow fadeInRightBig" data-wow-delay="0.8s">
                        <div class="box" style="height: 100%">
                            <div class="icon"><a href=""><i class="fa fa-users"></i></a></div>
                            <h4 class="title"><a href="">Pendana</a></h4>
                            <div class="col-md-12">
                                <div class="col-md-3 pull-left">
                                    <a href=""><i class="fa fa-search fa-3x" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-9 columns">
                                    <p style="font-weight: bold; margin-bottom: 0;">1. Menelusuri marketplace</p>
                                    <p style="font-size: 14px;">Pendana menganalisis pinjaman berdasarkan informasi yang tertera di fact sheet.</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-3 pull-left">
                                    <a href=""><i class="fa fa fa-money fa-3x" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-9 columns">
                                    <p style="font-weight: bold; margin-bottom: 0;">2. Mendanai pada tawaran pinjaman</p>
                                    <p style="font-size: 14px;">Pendana menentukan jumlah pendanaan pada tawaran pinjaman yang dipilih.</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="col-md-3 pull-left">
                                    <a href=""><i class="fa fa fa-money fa-3x" aria-hidden="true"></i></a>
                                </div>
                                <div class="col-md-9 columns">
                                    <p style="font-weight: bold; margin-bottom: 0;">3. Menerima pengembalian pinjaman</p>
                                    <p style="font-size: 14px;">Pendana menerima pengembalian pinjaman beserta bunga yang dapat didanai kembali pada tawaran pinjaman lainnya.</p>
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