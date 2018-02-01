@extends('inc.template')

@section('style')
<link href="{{ asset('css/front.borrow.css') }}" rel="stylesheet">
@endsection

@section('content')
<section id="hero" class="hero-bg-5 no-shadows">
    <div class="hero-container">
        <div class="col-md-8 col-center">
            <div class="col-md-6 col-center text-lg-left text-white float-right">
                <h3>Meminjam uang kini menjadi lebih praktis bagi para pekerja</h3>
                <p>
                    Dapatkan pinjaman fasilitas untuk karyawan dengan syarat mudah, proses cepat, dan biaya kompetitif.
                </p>
                <a class="btn btn-main" href="#">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</section>
<section id="section">
    <div class="section-container col-md-12">
        <div id="box-2" class="row">
            <div class="col-md-4 wow fadeIn">
                <div class="title text-center">
                    <i class="icon fa fa-user-plus"></i>
                    <h5>Tim Indonesia bertaraf internasional</h5>
                </div>
                <p class="text-center">
                    Beranggotakan spesialis industri terkait
                </p>
            </div>
            <div class="col-md-4 wow fadeIn">
                <div class="title text-center">
                    <i class="icon fa fa-desktop"></i>
                    <h5>Penggunaan teknologi mutakhir</h5>
                </div>
                <p class="text-center">
                    Analisa kredit dapat dilakukan secara akurat, tanpa melalui proses berbelit dan memakan waktu 
                </p>
            </div>
            <div class="col-md-4 wow fadeIn">
                <div class="title text-center">
                    <i class="icon fa fa-warning"></i>
                    <h5>Manajemen risiko yang kuat</h5>
                </div>
                <p class="text-center">
                    Kami memiliki keunggulan dalam penilaian setiap pinjaman yang diajukan 
                </p>
            </div>
        </div>
    </div>
</div>
</section>
<section id="section" class="hero-bg-2 text-black">
    <div class="hero-container no-bg col-md-12">
        <div class="row">
            <div class="col-md-10 col-sm-10 col-center text-center white">
                <div class="section-header text-left wow fadeInDown">
                    Siapapun Anda - manajer, staf admin, hingga petugas kebersihan - berhak mendapatkan kehidupan 
                    yang layak dan bahagia. Namun terkadang, adanya kebutuhan mendadak di samping kebutuhan 
                    sehari-hari dapat menjadi beban yang besar, terlebih saat Anda memiliki kondisi finansial 
                    yang kurang stabil.
                </div>
                <div class="row">
                    <div class="col-md-5 feature-2 col-center wow fadeInLeft">
                        <h5 class="text-left">Tak perlu khawatir, kami punya solusinya.</h5>
                        <p class="text-justify">
                            Kini semua orang dapat mengajukan pinjaman pribadi atau karyawan melalui online marketplace KasXpress. 
                            Kami menghadirkan cara baru untuk mendapatkan pinjaman dengan memfasilitasi karyawan yang terdaftar 
                            di perusahaan yang bekerjasama dengan KasXpress. Nantinya, Anda akan terhubung secara langsung dengan 
                            ratusan pemberi pinjaman dari Sabang sampai Merauke, 100% online. Dapatkan pinjaman dengan syarat mudah, 
                            proses cepat, dan bunga kompetitif.
                        </p>
                    </div>
                    <div class="col-md-6 feature-2 col-center wow fadeInRight">
                        <h5 class="text-left">Apakah Anda layak mendapatkan pinjaman?</h5>
                        <ul>
                            <li>Berusia 21 tahun atau lebih.</li>
                            <li>Terdaftar sebagai karyawan di perusahaan yang bekerjasama dengan KasXpress.</li>
                            <li>Berpenghasilan tetap dengan jumlah minimal Rp 3.100.000.</li>
                            <li>Memiliki kelengkapan dokumen: KTP, NPWP, Surat Keterangan Kerja, dan slip gaji.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section" class="hero-bg-6">
    <div class="section-container col-md-12 wow fadeInUp">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Silumasi Pinjaman</h3>
            </div>
            <div class="col-md-4 col-center">
                <form autocomplete="off" class="">
                    <input class="form-control" id="credit-amount" placeholder="Berapa yang Anda butuhkan?" required="" type="text" pattern="[0-9]*">
                    <select class="form-control" id="credit-terms" placeholder="Berapa lama?" required="" >
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
                    <button class="btn btn-main" type="submit">SIMULASI</button>    
                </form>
            </div>
            <div class="col-md-4 col-center simulasi-cicilan">
                <div class="item">
                    <h5>Cicilan Bulanan :</h5>
                    <span id="cicilan-bulanan">Rp.0,00 - Rp.0.00</span>
                </div>
                <div class="item">
                    <h5>Total Cicilan :</h5>
                    <span id="total-cicilan">Rp.0,00 - Rp.0.00</span>
                </div>
                <div class="item">
                    <h5>Rate Bunga Tahunan (Rate Bunga Simpel) :</h5>
                    <span id="total-cicilan">12% - 26%</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section">
    <div class="section-container col-md-12">
        <div id="box-2" class="row">
            <div class="col-md-12">
                <h3 class="text-center">PROSES MUDAH</h3>
            </div>
            <div class="col-md-4 wow fadeIn">
                <i class="title text-center icon fa fa-list"></i>
                <p class="text-center">
                    1. Isi form aplikasi online Cepat dan mudah! Satu aplikasi hanya akan memakan waktu anda 5 menit.
                </p>
            </div>
            <div class="col-md-4 wow fadeIn">
                <i class="title text-center icon fa fa-check-square-o"></i>
                <p class="text-center">
                    2. Berkomunikasi dengan agen kami Dalam kurun waktu 4 hari, agen kami akan menghubungi anda untuk mengabarkan status pengajuan pinjaman anda dan proses selanjutnya. 
                </p>
            </div>
            <div class="col-md-4 wow fadeIn">
                <i class="title text-center icon fa fa-calendar"></i>
                <p class="text-center">
                    3. Pinjaman disetujui dan dana diterima Dana akan diterima 6 hari setelah pinjaman anda disetujui.
                </p>
            </div>
        </div>
    </div>
</div>
</section>
@endsection


@section('script')
<script src="{{ asset('/js/front.borrow.js') }}"></script>
@endsection