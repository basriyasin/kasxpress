@extends('inc.investor.template')

@section('style')
<link href="{{ asset('css/front.index.css') }}" rel="stylesheet">
@endsection

@section('content')
<section id="hero" class="hero-bg-2 text-black padding-bottom-50">
    <div class="hero-container no-bg">
        <div class="row col-md-12">
            <div class="section-header col-center col-md-12">
                <h3 class="about-title">Deposit</em></h3>
                <div class="large-2 medium-1 small-4 columns small-centered border-green margin-bottom-20"></div>
            </div>


            <!-----------------------------
            Account info
         ------------------------------>
            <div id="infoAccount" class="row col-md-10 col-center f-13">
                <div class="container-fluid deposit-header">
                    <h5  align="left">Virtual Account</h5>
                    <p>Untuk melakukan deposit, silahkan transfer ke rekening berikut ini:</p>
                </div>

                <div class="transferInfo">
                    <div class="row">
                        <div class="col-md-2">
                            <strong>Bank</strong><BR>
                            Sinarmas
                        </div>
                        <div class="col-md-2">
                            <strong>Cabang</strong><BR>
                            KCU Thamrin
                        </div>
                        <div class="col-md-4">
                            <strong>Nama Pemilik Rekening</strong><BR>
                            MDKU QQ {{ Auth::user()->name }}
                        </div>
                        <div class="col-md-4">
                            <strong>Nomor Virtual Account</strong><BR>
                            8299980000185394
                        </div>
                    </div>
                </div>

                <h5  align="left">Informasi Akun Bank Anda</h5>
                <div class="bankInfo col-md-12">
                    <div class="row">
                        <div class="col-md-4 item">
                            <strong>Bank</strong><BR>
                            <span>BCA</span>
                        </div>
                        <div class="col-md-4 item">
                            <strong>Cabang</strong><BR>
                            <span>Wolter Mongonsidi</span>
                        </div>
                        <div class="col-md-4 item">
                            <strong>Nomor Rekening</strong><BR>
                            <span>600078345</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 item">
                            <strong>Detail Bank</strong><BR>
                            <span>Tabungan</span>
                        </div>
                        <div class="col-md-4 item">
                            <strong>Nama Pemilik Rekening</strong><BR>
                            <span>{{ Auth::user()->name }}</span>
                        </div>
                    </div>
                </div>

                <div id="syaratKetentuan" style="padding-top: 30px;">
                    <h5  align="left">Syarat & Ketentuan</h5>
                    <div class="syaratList text-left">
                        <ol>
                            <li>Proses deposit membutuhkan waktu 30 menit<strong>*</strong> atau lebih, silahkan periksa kembali saldo anda.</li>
                            <li>Semua biaya transaksi ditanggung oleh Pendana</li>
                            <li>Untuk bantuan, silahkan kunjungi halaman <a href="/faq" routerlink="/faq">FAQ</a>, hubungi (021)55500069 / (021)22952883, Whatsapp 087771265290, atau email ke <a href="#">layanan@kasxpress.co.id</a></li>
                        </ol>
                        <i><span style="font-size:12px">* 30 menit untuk transfer ATM. Untuk kliring dan internet banking 1 hari.</span></i>
                    </div>
                </div>
                <div id="caraTransfer" style="padding-top: 30px;">
                    <h5  align="left">Cara Transfer</h5>
                    Saat ini kami memiliki 4 jenis pembayaran yaitu:
                    <ul class="text-left">
                        <li>Internet Banking</li>
                        <li>Melalui Atm</li>
                        <li>Teller Bank Sinarmas</li>
                        <li>Bank Lain Via LLG/RTGS</li>
                    </ul>
                </div>

            </div>

        </div>
        <!-----------------------------
        End of Account info
    ------------------------------>

        <div class="col-md-10 col-center">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa fa-plus-circle"></i>
                                Internet Banking
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">

                            <strong>Internet Banking BCA </strong><br>
                            <ol>
                                <li>Login ke Akun KlikBCA </li>
                                <li>Pilih “Transfer Dana” </li>
                                <li>Pilih “Daftar Rekening Tujuan” </li>
                                <li>Masukkan informasi rekening KasXpress:<br> 
                                    - Bank: PT Bank Sinarmas<br> 
                                    - Kategori Penerima: Perusahaan <br> 
                                    - Kota: Jakarta   <br>  
                                    - Nama Penerima: MDKU QQ {{ Auth::user()->name }}        <br> 
                                    - Nomor Akun: 8299 + ID KasXpress (tanpa spasi)<br>
                                    - Input: KeyBCA Response    
                                </li>
                                <li>Pilih “Transfer ke Rek. Bank lain Dalam Negeri” </li>
                                <li>Pilih Destination Account 8299 + ID KasXpress (tanpa spasi) (PT Mitrausaha Indonesia Grup)  </li>
                                <li>Masukkan jumlah deposit. <br>Gunakan LLG jika jumlah deposit kurang dari Rp. 500 juta.<br>Gunakan RTGS jika jumlah deposit lebih dari Rp. 500 juta. </li>
                                <li>Masukkan Respons KeyBCA </li>
                            </ol>

                            <br>
                            <strong>Internet Banking General</strong>
                            <br>
                            <ol>
                                <li>Login ke Akun Internet Banking Anda.</li>
                                <li>Masukkan informasi Akun rekening KasXpress:<br> 
                                    - Bank: PT Bank Sinarmas<br> 
                                    - Kota: Jakarta   <br>  
                                    - Nama Penerima: MDKU QQ {{ Auth::user()->name }}        <br> 
                                    - Nomor Akun: 8299 + ID KasXpress (tanpa spasi)
                                </li>
                                <li>Masukkan jumlah deposit Anda</li>
                                <li>Pada layar konfirmasi pastikan sesuai tagihan Anda</li>

                            </ol>

                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa fa-plus-circle"></i>
                                Melalui ATM
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">

                            <strong>ATM Sinarmas</strong>
                            <br>
                            Melalui Menu "Transfer"
                            <ol>
                                <li>Pilih "Transfer"</li>
                                <li>Pilih "Rekening Bank Sinarmas"</li>
                                <li>Pilih "Rekening Nasabah Lain"</li>
                                <li>Masukkan nomor Virtual Account Anda dengan format 8299 + ID KasXpress (tanpa spasi)</li>
                                <li>Pada layar konfirmasi pastikan sesuai tagihan Anda</li>
                            </ol>


                            Melalui Menu "Pembayaran"
                            <ol>
                                <li>Pilih "Pembayaran"</li>
                                <li>Pilih "Layar Berikutnya"</li>
                                <li>Pilih "Virtual Account"</li>
                                <li>Masukkan nomor Virtual Account Anda dengan format 8299 + ID KasXpress (tanpa spasi)</li>
                                <li>Pada layar konfirmasi pastikan sesuai tagihan Anda</li>
                            </ol>
                            <br>
                            <strong>ATM lainnya (ATM Bersama, Alto, Prima)</strong>
                            <br>

                            Melalui menu "Transfer"
                            <ol>
                                <li>Pilih "Layanan Transfer"</li>
                                <li>Pilih "Transfer Rek. Bank Lain"</li>
                                <li>Masukan kode 153 + Virtual Account Anda dengan format 8299 + ID KasXpress (tanpa spasi)</li>
                                <li>Pada layar konfirmasi pastikan sesuai tagihan Anda</li>
                            </ol>




                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa fa-plus-circle"></i>
                                Teller Bank Sinarmas
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">

                            <ol>
                                <li>Sebutkan nomor Virtual Account Anda 8299 + ID KasXpress (tanpa spasi) kepada Teller Bank Sinarmas</li>
                                <li>Pastikan jumlah nominal dan pembayaran Anda yang diberikan oleh Teller sudah sesuai dengan Tagihan Anda</li>
                                <li>Anda akan menerima bukti bayar tagihan Anda</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="fa fa-plus-circle"></i>
                                Bank Lain Via LLG/RTGS
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                            <ol>
                                <li>Sebutkan Bank Tujuan Anda</li>
                                <li>Sebutkan nomor Virtual Account Anda 8299 + ID KasXpress (tanpa spasi) kepada Teller</li>
                                <li>Akan muncul Nama Nasabah QQ KasXpress</li>
                                <li>Pastikan jumlah nominal dan pembayaran Anda yang diberikan oleh Teller sudah sesuai dengan Tagihan Anda</li>
                                <li>Anda akan menerima bukti bayar tagihan Anda</li>
                            </ol>
                        </div>
                    </div>
                </div>

            </div><!-- panel-group -->
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