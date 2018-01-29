@extends('inc.template')

@section('style')
<link href="{{ asset('css/investor.css') }}" rel="stylesheet">
@endsection

@section('content')
<section id="hero" class="hero-bg-1">
    <div class="row height-100">

        <div class="col-md-10 row col-center margin-top-20">
            <h3>Pengajuan Pinjaman Karyawan PT. SUSANTO Lalala.</h3>
            <hr class="margin-vertical-50">
            <div class="col-md-8">
                <div class="detail-box">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#personal-data" data-toggle="tab">Data Pribadi</a>
                        </li>
                        <li class="">
                            <a href="#personal-contact" data-toggle="tab">Kontak dan Domisili</a>
                        </li>
                        <li class="">
                            <a href="#family-contact" data-toggle="tab">Kerabat Dekat</a>
                        </li>
                        <li class="">
                            <a href="#job-detail" data-toggle="tab">Data Pekerjaan</a>
                        </li>
                        <li class="">
                            <a href="#bank-detail" data-toggle="tab">Data Bank</a>
                        </li>
                        <li class="">
                            <a href="#documents" data-toggle="tab">Dokumen Kelengkapan</a>
                        </li>
                        </li>
                    </ul>
                    <div class="container">
                        <div class="tab-content">
                            <div id="personal-data" class="tab-pane fade in active">
                                <form autocomplete="off" class="col-md-12 row">
                                    <div class="col-md-12 row">
                                        <div class="col-md-3">
                                            <label>Sapaan</label>
                                            <select class="form-control" name="jenisKelamin" required="">
                                                <option value="NULL">Mr.</option>
                                                <option value="PT">Ms.</option>
                                            </select>
                                        </div>
                                        <div class="col-md-9">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" name="namaLengkap" placeholder="Contoh: Danny" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-6">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" type="date" name="tempatLahir" placeholder="Contoh: Jakarta">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" name="tanggalLahir" placeholder="Tanggal Lahir" required="">
                                        </div>
                                    </div>

                                    <div class="col-md-12 row">
                                        <div class="col-md-6">
                                            <label>Nomor KTP</label>
                                            <input class="form-control" name="noKtp" placeholder="Contoh: 72000xx" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Masa Berlaku Hingga</label>
                                            <input class="form-control" type="date" name="ktpExpireDate" placeholder="Berlaku Hingga">
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-10">
                                            <label>Nomor NPWP</label>
                                            <input class="form-control" name="npwp" placeholder="Format: 99.999.999.9-999.999" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">

                                        <div class="col-md-6">
                                            <label>Pendidikan Terakhir</label>
                                            <select class="form-control" name="pendidikan"required="">
                                                <option disabled selected="">-- Pendidikan Terakhir --</option>
                                                <option value="smk">SMK</option>
                                                <option value="s1">Sarjana</option>
                                                <option value="s2">Master</option>
                                                <option value="s3">Doktor</option>
                                                <option value="prof">Professor</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Status Pernikahan</label>
                                            <select class="form-control" name="status" required="">
                                                <option disabled selected="">-- Status Pernikahan --</option>
                                                <option value="lajang">Lajang</option>
                                                <option value="menikah">Menikah</option>
                                                <option value="bercerai">Janda / Duda</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-6">
                                            &nbsp;
                                        </div>
                                        <div class="col-md-6">
                                            <label>Jumlah Tanggungan</label>
                                            <select class="form-control" name="tanggungan" placeholder="" required="">
                                                <option disabled selected="">-- Jumlah Tanggungan --</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>



                                    <input class="margin-top-20 btn btn-main" type="submit" value="Selanjutnya">    
                                </form>
                            </div>
                            <div id="personal-contact" class="tab-pane fade">
                                personal-contact
                            </div>
                            <div id="family-contact" class="tab-pane fade">
                                family-contact
                            </div>
                            <div id="job-detail" class="tab-pane fade">
                                job-detail
                            </div>
                            <div id="bank-detail" class="tab-pane fade">
                                bank-detail
                            </div>
                            <div id="documents" class="tab-pane fade">
                                documents
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="detail-box bg-gray">
                    <div class="header">
                        Simulasi Pembayaran
                    </div>
                    <div class="container">
                        <div class="item">
                            <div class="title">
                                Pinjaman Diterima <br>
                                <span class="item"> Rp. 19.000.000,00</span>
                            </div>
                        </div> 
                        <div class="item">
                            <div class="title">
                                Cicilan per Bulan <br>
                                <span class=""> Rp. 1.846.667,00 - Rp. 2.106.667,00</span>
                            </div>
                        </div> 
                        <div class="item">
                            <div class="title">
                                Lama Pinjaman <br>
                                <span class=""> 12 Bulan</span>
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