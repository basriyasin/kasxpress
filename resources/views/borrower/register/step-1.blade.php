@extends('inc.template')

@section('style')
<link href="{{ asset('css/investor.css') }}" rel="stylesheet">
@endsection

@section('content')
<section id="hero" class="hero-bg-1">
    <div class="row height-100 margin-vertical-50 borrowerInfo">

        <div class="col-md-7 col-center">
             <div class="row margin-top-20">
                <div class="detail-box">
                    <div class="header">
                        <div class="col-md-12">
                            <h3>Apakah anda bekerja di salah satu perusahaan ini?</h3>
                        </div>
                    </div>
                    <div class="container">
                        <div class="tab-content">
                            <form autocomplete="off" class="col-md-12 row">
                                <div class="col-md-12 row">
                                    <div class="col-md-12">
                                        <label>Daftar Perusahaan</label>
                                        <select class="form-control" name="perusahaan" required="">
                                            <option disabled selected="">-- Pilih Perusahaan --</option>
                                            <option>PT Aldiracita Corpotama</option>
                                            <option>PT Amantara Securities</option>
                                            <option>PT Anugerah Securindo Indah</option>
                                            <option>PT ARTHA SECURITIES INDONESIA</option>
                                            <option>PT Asjaya Indosurya Securities</option>
                                            <option>PT BAHANA SECURITIES</option>
                                            <option>PT BARCLAYS CAPITAL SECURITIES INDONESIA</option>
                                            <option>PT BATAVIA PROSPERINDO SEKURITAS</option>
                                            <option>PT BCA SEKURITAS</option>
                                            <option>PT BEPEDE JATENG SECURITIES</option>
                                            <option>PT Binaartha Parama</option>
                                            <option>PT Bloom Nusantara Capital</option>
                                            <option>PT BNI Securities</option>
                                            <option value="notfound">Tidak ada dalam daftar.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 row hidden" id="newPerusahaan">
                                    <div class="col-md-12">
                                        <label>Nama Perusahaan Anda Bekerja</label>
                                        <input class="form-control" name="newPerusahaan" placeholder="Nama Perusahaan Anda Bekerja">
                                    </div>
                                </div>
                                <div class="col-md-12 row">
                                    <div class="col-md-12">
                                        <input class="margin-top-20 btn btn-main" type="submit" value="Selanjutnya">    
                                    </div>
                                </div>
                            </form>
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

                $('select[name="perusahaan"]')
                        .change(function () {
                            val = $(this).find(":selected").val();
                            console.log(val);
                            if (val == "notfound") {
                                $('#newPerusahaan').removeClass('hidden');
                                $('input[name="newPerusahaan"]').removeAttr('disabled');
                            } else {
                                $('input[name="newPerusahaan"]').addClass('hidden');
                                $('input[name="newPerusahaan"]').attr('disabled', 'disabled');
                            }
                        });
            });
</script>
@endsection