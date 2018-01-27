@extends('inc.template')

@section('style')
<link href="{{ asset('css/front.index.css') }}" rel="stylesheet">
<link href="{{ asset('css/investor.css') }}" rel="stylesheet">
@endsection

@section('content')

<section id="hero" class="hero-bg-white">
    <div class="hero-container no-bg">
        <div class="col-md-12 col-center text-lg-left white">
                <div class="section-header col-center col-md-12">
                    <h3 class="about-title"> Daftar</h3>
                    <div class="large-2 medium-1 small-4 columns small-centered border-green margin-bottom-20"></div>
                </div>
                <div class="row clearfix col-center">
                    <div class="col-lg-5 col-md-5 col-center">
                        <h3 class="title m-bottom-20 f-24">Ingin uang Anda bermanfaat?</h3>
                        <h5 class="title f-18 m-bottom-0">Dapatkan return sampai dengan</h5>
                        <p class="title f-18 black m-bottom-0"><span class="f-40 blue">20%</span> p.a. dari pokok pinjaman</p>
                        <small class="f-13 grey block m-bottom-20">*sampai dengan 6 bulan pendanaan, pre tax, asumsi pendanaan dan tidak ada penarikan dini.</small>
                        <button class="btn btn-blue" onclick="showModal('investor')">Berikan Pinjaman</button>
                    </div>

                    <div class="col-lg-5 col-md-5 col-center">
                        <h3 class="title m-bottom-20 f-24">Dapatkan pinjaman personal</h3>
                        <h5 class="title f-18 m-bottom-0">Dapatkan pinjaman mulai dari</h5>
                        <p class="title f-18 black m-bottom-0"><span class="f-40 blue">0.9%</span> per bulan atas nilai pinjaman </p>
                        <small class="f-13 grey block m-bottom-20">*Setiap orang mungkin bisa berbeda, bergantung pada penilaian individu peminjam.</small>
                        <button class="btn btn-green" onclick="showModal('peminjam')">Ajukan Pinjaman</button>
                    </div>
                </div>

        </div>

    </div>

</section>

@endsection

<!-- Modal -->
<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="register-modal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"  style="padding:25px;">

                <form class="form-default custom-frm2" action="{{ url('/register')}}" method="post" ajax-form="true">
                    {!! csrf_field() !!}
                    <input type="hidden" name="role" value="">
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <label for="middle-label" class="text-right f-13">Nama Lengkap *</label>
                        </div>
                        <div class="col-md-9 columns">
                            <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" required="" maxlength="120">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <label for="middle-label" class="text-right f-13">Alamat Email *</label>
                        </div>
                        <div class="col-md-9 columns">
                            <input type="email" class="form-control" name="email" placeholder="Alamat Email" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <label for="middle-label" class="text-right f-13">No Handphone *</label>
                        </div>
                        <div class="col-md-9 columns">
                            <input type="text" class="form-control" name="mobile_number" placeholder="No Handphone" required="" minlength="10">
                        </div>
                    </div>
                    <div class="row">
                        <div class="small-12 medium-12 large-12 columns" style="margin-top: -30px;margin-bottom: -13px;"><hr></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <label for="middle-label" class="text-right f-13">Kata Sandi *</label>
                        </div>
                        <div class="col-md-9 columns">
                            <input type="password" class="form-control" name="password" placeholder="Kata Sandi" required="" minlength="8">
                        </div>
                    </div>
                    <div class="row m-bottom-10 pass_checker" style="display: none;">
                        <div class="col-md-3 text-right">

                        </div>
                        <div class="col-md-9 columns">
                            <small class="red">Password minimal 8 karakter, 1 huruf kapital dan 1 angka</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <label for="middle-label" class="text-right f-13">Konfirmasi Kata Sandi *</label>
                        </div>
                        <div class="col-md-9 columns">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Kata Sandi" required="" minlength="6">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 columns" style="margin-top: -30px;margin-bottom: -15px;"><hr></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 columns">
                            <div class="check-wrapper f-13">
                                <input id="agreement" type="checkbox" name="rd_agree_subscribe" required="required">
                                <label for="agreement">&nbsp;&nbsp;Izinkan KasXpress untuk mengirimkan saya informasi melalui email
                                </label>
                            </div>
                            <div class="check-wrapper f-13">
                                <input id="agreement2" type="checkbox" name="rd_agree_privacy" required="required">
                                <label for="agreement2">&nbsp;&nbsp;Saya telah membaca dan saya setuju dengan <a target="_blank" href="{{route('front.login')}}">Kebijakan Privasi </a> &amp; <a target="_blank" href="{{route('front.login')}}">Syarat Ketentuan </a></label> <br>
                            </div>
                        </div>
                    </div>
                    <input name="role" id="role" type="hidden">
                    <div class="row">
                        <div class="col-md-3 text-left">
                            <button type="submit" class="btn btn-primary btn-blue"> Buat Akun</button>
                        </div>
                        <div class="col-md-9 text-right">
                            <label for="agreement2" class="f-18">&nbsp;&nbsp;Sudah punya akun?<a target="_blank" href="{{route('front.login')}}"> Login </a></label> <br>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
<!--End of Modal -->


@section('script')
<script>
    
    function showModal(type){
        if(type == 'investor'){
            $('#modalTitle').html('Pendaftaran Investor');
            $('#role').val('investor');
        } else {
            $('#modalTitle').html('Pendaftaran Peminjam');
            $('#role').val('peminjam');
        }
        $('#register-modal').modal('show');
    }

</script>
@endsection