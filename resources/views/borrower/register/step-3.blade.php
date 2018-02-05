@extends('inc.template')

@section('style')
<link href="{{ asset('css/investor.css') }}" rel="stylesheet">
@endsection

@section('content')
<section id="hero" class="hero-bg-1">
    <div class="row height-100">

        <div class="col-md-10 row col-center margin-top-20 margin-bottom-20 borrowerInfo">
            <h3 class="col-md-12 text-center">Pengajuan Pinjaman Karyawan PT. SUSANTO</h3>
            <div class="col-md-8">
                <div class="detail-box">
                    <ul class="nav nav-tabs nav-tab-log">
                        <li class="active bg-gray col-lg-4 col-md-6 col-sm-12">
                            <a href="#personal-data" data-toggle="tab">Data Pribadi</a>
                        </li>
                        <li class="bg-gray col-lg-4 col-md-6 col-sm-12">
                            <a href="#personal-contact" data-toggle="tab">Kontak dan Domisili</a>
                        </li>
                        <li class="bg-gray col-lg-4 col-md-6 col-sm-12">
                            <a href="#family-contact" data-toggle="tab">Kerabat Dekat</a>
                        </li>
                        <li class="bg-gray col-lg-4 col-md-6 col-sm-12">
                            <a href="#job-detail" data-toggle="tab">Data Pekerjaan</a>
                        </li>
                        <li class="bg-gray col-lg-4 col-md-6 col-sm-12">
                            <a href="#bank-detail" data-toggle="tab">Data Bank</a>
                        </li>
                        <li class="bg-gray col-lg-4 col-md-6 col-sm-12">
                            <a href="#documents" data-toggle="tab">Dokumen Kelengkapan</a>
                        </li>
                        </li>
                    </ul>
                    <div class="container">
                        <div class="tab-content">
                            <div id="personal-data" class="tab-pane fade in active">
                                <form autocomplete="off" id="data-form" next-form="personal-contact">
                                    <div class="col-md-12 row">
                                        <div class="col-md-3">
                                            <label>Sapaan</label>
                                            <select class="form-control" name="personal-data.sapaan" required>
                                                <option value="NULL">Mr.</option>
                                                <option value="PT">Ms.</option>
                                            </select>
                                        </div>
                                        <div class="col-md-9">
                                            <label>Nama Lengkap</label>
                                            <input class="form-control" name="personal-data.namaLengkap" placeholder="Contoh: Danny" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-6">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="personal-data.tanggalLahir" 
                                                   pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" 
                                                   max="{{ date('Y-m-d', strtotime('-17 years')) }}" 
                                                   value="{{ date('Y-m-d', strtotime('-17 years')) }}" 
                                                   required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="personal-data.tempatLahir" placeholder="Contoh: Jakarta" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12 row">
                                        <div class="col-md-6">
                                            <label>Nomor KTP</label>
                                            <input class="form-control" name="personal-data.ktp" placeholder="Contoh: 7200000000000000" maxlength="16" pattern="[0-9]{16}" required>                                                   
                                        </div>
                                        <div class="col-md-6">
                                            <label>Masa Berlaku Hingga</label>
                                            <input class="form-control" type="date" name="personal-data.ktpExpireDate"
                                                   min="{{ date('Y-m-d', strtotime('+3 month')) }}" 
                                                   value="{{ date('Y-m-d', strtotime('+3 month')) }}" 
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-10">
                                            <label>Nomor NPWP</label>
                                            <input class="form-control" name="personal-data.npwp" placeholder="Contoh: 9999999999999" 
                                                   id="personal-data-npwp"
                                                   pattern="[0-9]{13}"
                                                   maxlength="13"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">

                                        <div class="col-md-6">
                                            <label>Pendidikan Terakhir</label>
                                            <select class="form-control" name="personal-data.pendidikan"required>
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
                                            <select class="form-control" name="personal-data.status" required>
                                                <option disabled selected="">-- Status Pernikahan --</option>
                                                <option value="lajang">Lajang</option>
                                                <option value="menikah">Menikah</option>
                                                <option value="bercerai">Janda / Duda</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-6">
                                            <label>Jumlah Tanggungan</label>
                                            <select class="form-control" name="personal-data.tanggungan" placeholder="" required>
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
                                    <div class="col-md-12 row">
                                        <div class="col-md-12">
                                            <input class="margin-top-20 margin-bottom-20 btn btn-main" type="submit" value="Selanjutnya">    
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="personal-contact" class="tab-pane fade">
                                <form autocomplete="off" id="data-form" next-form="family-contact"> 
                                    <div class="col-md-12 row">
                                        <div class="col-md-6">
                                            <label>No. HP</label>
                                            <input class="form-control" name="personal-contact.noHP" placeholder="Contoh: 0811223344455" minlength="11" maxlength="13" pattern="[0-9]{11,13}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Telepon Rumah</label>
                                            <input class="form-control" name="personal-contact.namaLengkap" placeholder="Contoh: 0411223344" maxlength="10" pattern="[0-9]{10}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-12">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="personal-contact.alamatDomisili" placeholder="Alamat domisili" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-4">
                                            <label>Provinsi</label>
                                            <select class="form-control" name="personal-contact.provinsiDomisili" placeholder="" required>
                                                <option disabled selected="">-- Pilih Provinsi --</option>
                                                <option >DKI Jakarta</option>
                                                <option >Jawa Barat</option>
                                                <option >Jawa Tengah</option>
                                                <option >Jawa Timur</option>
                                                <option >Kalimantan Barat</option>
                                                <option >Kalimantan Selatan</option>
                                                <option >Kalimantan Tengah</option>
                                                <option >Kalimantan Timur</option>
                                                <option >Kalimantan Utara</option>
                                                <option >Sumatra Barat</option>
                                                <option >Sumatra Selatan</option>
                                                <option >Sumatra Tengah</option>
                                                <option >Sumatra Timur</option>
                                                <option >Sumatra Utara</option>
                                                <option >Sulawesi Barat</option>
                                                <option >Sulawesi Selatan</option>
                                                <option >Sulawesi Tengah</option>
                                                <option >Sulawesi Tenggara</option>
                                                <option >Sulawesi Timur</option>
                                                <option >Sulawesi Utara</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kota</label>
                                            <select class="form-control" name="personal-contact.kotaDomisili" placeholder="" required>
                                                <option disabled selected="">-- Pilih Kota --</option>
                                                <option >Jakarta Barat</option>
                                                <option >Jakarta Pusat</option>
                                                <option >Jakarta Selatan</option>
                                                <option >Jakarta Timur</option>
                                                <option >Jakarta Utara</option>
                                                <option >Tangerang</option>
                                                <option >Bekasi</option>
                                                <option >Bogor</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kecamatan</label>
                                            <select class="form-control" name="personal-contact.kecamatanDomisili" placeholder="" required>
                                                <option disabled selected="">-- Pilih Kecamatan --</option>
                                                <option >Kebayoran Baru</option>
                                                <option >Kebayoran Lama</option>
                                                <option >Pesanggrahan</option>
                                                <option >Cilandak</option>
                                                <option >Pasar Minggu</option>
                                                <option >Jagakarsa</option>
                                                <option >Mampang Prapatan</option>
                                                <option >Pancoran</option>
                                                <option >Tebet</option>
                                                <option >Setiabudi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-12 ">
                                            <div class="form-control col-md-12">
                                                <input id="sameAsDomisili" type="checkbox"> Alamat Domisili sama dengan alamat KTP
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-12">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="personal-contact.alamatKTP" placeholder="Alamat sesuai Kartu Tanda Penduduk" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-4">
                                            <label>Provinsi</label>
                                            <select class="form-control" name="personal-contact.provinsiKTP" placeholder="" required>
                                                <option disabled selected="">-- Pilih Provinsi --</option>
                                                <option >DKI Jakarta</option>
                                                <option >Jawa Barat</option>
                                                <option >Jawa Tengah</option>
                                                <option >Jawa Timur</option>
                                                <option >Kalimantan Barat</option>
                                                <option >Kalimantan Selatan</option>
                                                <option >Kalimantan Tengah</option>
                                                <option >Kalimantan Timur</option>
                                                <option >Kalimantan Utara</option>
                                                <option >Sumatra Barat</option>
                                                <option >Sumatra Selatan</option>
                                                <option >Sumatra Tengah</option>
                                                <option >Sumatra Timur</option>
                                                <option >Sumatra Utara</option>
                                                <option >Sulawesi Barat</option>
                                                <option >Sulawesi Selatan</option>
                                                <option >Sulawesi Tengah</option>
                                                <option >Sulawesi Tenggara</option>
                                                <option >Sulawesi Timur</option>
                                                <option >Sulawesi Utara</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kota</label>
                                            <select class="form-control" name="personal-contact.kotaKTP" placeholder="" required>
                                                <option disabled selected="">-- Pilih Kota --</option>
                                                <option >Jakarta Barat</option>
                                                <option >Jakarta Pusat</option>
                                                <option >Jakarta Selatan</option>
                                                <option >Jakarta Timur</option>
                                                <option >Jakarta Utara</option>
                                                <option >Tangerang</option>
                                                <option >Bekasi</option>
                                                <option >Bogor</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kecamatan</label>
                                            <select class="form-control" name="personal-contact.kecamatanKTP" placeholder="" required>
                                                <option disabled selected="">-- Pilih Kecamatan --</option>
                                                <option >Kebayoran Baru</option>
                                                <option >Kebayoran Lama</option>
                                                <option >Pesanggrahan</option>
                                                <option >Cilandak</option>
                                                <option >Pasar Minggu</option>
                                                <option >Jagakarsa</option>
                                                <option >Mampang Prapatan</option>
                                                <option >Pancoran</option>
                                                <option >Tebet</option>
                                                <option >Setiabudi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-12">
                                            <input class="margin-top-20 margin-bottom-20 btn btn-main" type="submit" value="Selanjutnya">    
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="family-contact" class="tab-pane fade">
                                <form autocomplete="off" id="data-form" next-form="job-detail">
                                    <div class="col-md-12 row">
                                        <div class="col-md-6">
                                            <label>Nama Keluarga Tidak Serumah</label>
                                            <input class="form-control" name="" placeholder="Nama Kerabat" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Hubungan Keluarga</label>
                                            <select class="form-control" name="family-contact.hubunganKeluarga" placeholder="" required>
                                                <option disabled selected="">-- Pilih Hubungan Keluarga --</option>
                                                <option >Saudara Kandung</option>
                                                <option >Saudara Tiri</option>
                                                <option >Ipar</option>
                                                <option >Paman</option>
                                                <option >Bibi</option>
                                                <option >Kakek</option>
                                                <option >Nenek</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-6">
                                            <label>No. HP</label>
                                            <input class="form-control" name=""family-contact.noHP placeholder="Contoh: 0811223344455"  minlength="11" maxlength="13" pattern="[0-9]{11,13}" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Telepon Rumah</label>
                                            <input class="form-control" name="family-contact.namaLengkap" placeholder="Contoh: 0411223344" maxlength="10" pattern="[0-9]{10}"required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-12">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="family-contact.alamat" placeholder="Alamat" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-4">
                                            <label>Provinsi</label>
                                            <select class="form-control" name="family-contact.provinsi" required>
                                                <option disabled selected="">-- Pilih Provinsi --</option>
                                                <option >DKI Jakarta</option>
                                                <option >Jawa Barat</option>
                                                <option >Jawa Tengah</option>
                                                <option >Jawa Timur</option>
                                                <option >Kalimantan Barat</option>
                                                <option >Kalimantan Selatan</option>
                                                <option >Kalimantan Tengah</option>
                                                <option >Kalimantan Timur</option>
                                                <option >Kalimantan Utara</option>
                                                <option >Sumatra Barat</option>
                                                <option >Sumatra Selatan</option>
                                                <option >Sumatra Tengah</option>
                                                <option >Sumatra Timur</option>
                                                <option >Sumatra Utara</option>
                                                <option >Sulawesi Barat</option>
                                                <option >Sulawesi Selatan</option>
                                                <option >Sulawesi Tengah</option>
                                                <option >Sulawesi Tenggara</option>
                                                <option >Sulawesi Timur</option>
                                                <option >Sulawesi Utara</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kota</label>
                                            <select class="form-control" name="family-contact.kota" required>
                                                <option disabled selected="">-- Pilih Kota --</option>
                                                <option >Jakarta Barat</option>
                                                <option >Jakarta Pusat</option>
                                                <option >Jakarta Selatan</option>
                                                <option >Jakarta Timur</option>
                                                <option >Jakarta Utara</option>
                                                <option >Tangerang</option>
                                                <option >Bekasi</option>
                                                <option >Bogor</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Kecamatan</label>
                                            <select class="form-control" name="family-contact.kota" placeholder="" required>
                                                <option disabled selected="">-- Pilih Kecamatan --</option>
                                                <option >Kebayoran Baru</option>
                                                <option >Kebayoran Lama</option>
                                                <option >Pesanggrahan</option>
                                                <option >Cilandak</option>
                                                <option >Pasar Minggu</option>
                                                <option >Jagakarsa</option>
                                                <option >Mampang Prapatan</option>
                                                <option >Pancoran</option>
                                                <option >Tebet</option>
                                                <option >Setiabudi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-12">
                                            <input class="margin-top-20 margin-bottom-20 btn btn-main" type="submit" value="Selanjutnya">    
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="job-detail" class="tab-pane fade" id="data-form" >
                                <form autocomplete="off" next-form="bank-detail">
                                    <div class="col-md-12 row">
                                        <div class="col-md-6">
                                            <label>Nama Perusahaan</label>
                                            <input class="form-control" name="job-detail.namaPerusahaan" placeholder="Nama Perusahaan" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label>Jabatan</label>
                                            <input class="form-control" name="job-detail.jabatan" placeholder="Contoh: Manager" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-6">
                                            <label>Status Pekerjaan</label>
                                            <select class="form-control" name="job-detail.statusPekerjaan" required>
                                                <option value="permanen" selected>Permanen</option>
                                                <option value="kontrak">Kontrak</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label>NIK</label>
                                            <input class="form-control" name="job-detail.nik" placeholder="Nomor Induk Karyawan" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12 row">
                                        <div class="col-md-6">
                                            <label>Lama Bekerja di Perusahaan ini</label>
                                            <input class="form-control" name="job-detail.lamaBekerja" placeholder="Bulan" required>
                                        </div>

                                    </div>
                                    <hr class="margin-vertical-50">
                                    <div class="col-md-12 row">
                                        <div class="col-md-6">
                                            <label>Gaji Per Bulan</label>
                                            <input class="form-control" name="job-detail.gaji" placeholder="Gaji (IDR)"required pattern="[0-9]*">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Pengeluaran Per Bulan</label>
                                            <input class="form-control" name="job-detail.pengeluaran"  placeholder="Pengeluaran (IDR)" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-12">
                                            <input class="margin-top-20 margin-bottom-20 btn btn-main" type="submit" value="Selanjutnya">    
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <div id="bank-detail" class="tab-pane fade">
                                <form autocomplete="off" id="data-form" next-form="documents">
                                    <div class="col-md-12 row">
                                        <div class="col-md-5">
                                            <label>Nama Bank</label>
                                            <select class="form-control" name="bank-detail.namaBank" required>
                                                <option selected disabled="">--Pilih Bank--</option>
                                                <option value="ARTAJASA PEMBAYARAN ELEK. (RTGS)">ARTAJASA PEMBAYARAN ELEK. (RTGS)</option>
                                                <option value="BANGKOK BANK PUBLIC CO.LTD">BANGKOK BANK PUBLIC CO.LTD</option>
                                                <option value="BANK INDEX SELINDO">BANK INDEX SELINDO</option>
                                                <option value="BANK INDONESIA">BANK INDONESIA</option>
                                                <option value="BANK INDONESIA KP JAKARTA">BANK INDONESIA KP JAKARTA</option>
                                                <option value="BANK OF AMERICA NA">BANK OF AMERICA NA</option>
                                                <option value="BANK OF CHINA (HONG KONG) LIMITED">BANK OF CHINA (HONG KONG) LIMITED</option>
                                                <option value="BI CABANG AMBON,AMB">BI CABANG AMBON,AMB</option>
                                                <option value="BI CABANG BALIKPAPAN,BLP">BI CABANG BALIKPAPAN,BLP</option>
                                                <option value="BI CABANG BANDA ACEH,BDA">BI CABANG BANDA ACEH,BDA</option>
                                                <option value="BI CABANG BANDAR LAMPUNG,BDL">BI CABANG BANDAR LAMPUNG,BDL</option>
                                                <option value="BI CABANG BANDUNG,BDG">BI CABANG BANDUNG,BDG</option>
                                                <option value="BI CABANG BANJARMASIN">BI CABANG BANJARMASIN</option>
                                                <option value="BI CABANG BATAM,BTM">BI CABANG BATAM,BTM</option>
                                                <option value="BI CABANG BENGKULU">BI CABANG BENGKULU</option>
                                                <option value="BI CABANG CIREBON,CRB">BI CABANG CIREBON,CRB</option>
                                                <option value="BI CABANG DENPASAR,BALI">BI CABANG DENPASAR,BALI</option>
                                                <option value="BI CABANG JAMBI">BI CABANG JAMBI</option>
                                                <option value="BI CABANG JAYAPURA">BI CABANG JAYAPURA</option>
                                                <option value="BI CABANG JEMBER,JBR">BI CABANG JEMBER,JBR</option>
                                                <option value="BI CABANG KEDIRI,KDR">BI CABANG KEDIRI,KDR</option>
                                                <option value="BI CABANG KENDARI,KDI">BI CABANG KENDARI,KDI</option>
                                                <option value="BI CABANG KUPANG,KPG">BI CABANG KUPANG,KPG</option>
                                                <option value="BI CABANG LHOKSEUMAWE,LSM">BI CABANG LHOKSEUMAWE,LSM</option>
                                                <option value="BI CABANG MALANG,MLG">BI CABANG MALANG,MLG</option>
                                                <option value="BI CABANG MANADO,MDO">BI CABANG MANADO,MDO</option>
                                                <option value="BI CABANG MATARAM,CKA">BI CABANG MATARAM,CKA</option>
                                                <option value="BI CABANG MEDAN,MDN">BI CABANG MEDAN,MDN</option>
                                                <option value="BI CABANG PADANG,PDG">BI CABANG PADANG,PDG</option>
                                                <option value="BI CABANG PALANGKARAYA">BI CABANG PALANGKARAYA</option>
                                                <option value="BI CABANG PALEMBANG,PLG">BI CABANG PALEMBANG,PLG</option>
                                                <option value="BI CABANG PALU,PLS">BI CABANG PALU,PLS</option>
                                                <option value="BI CABANG PEKAN BARU,PKB">BI CABANG PEKAN BARU,PKB</option>
                                                <option value="BI CABANG PONTIANAK,PTK">BI CABANG PONTIANAK,PTK</option>
                                                <option value="BI CABANG SAMARINDA,SMD">BI CABANG SAMARINDA,SMD</option>
                                                <option value="BI CABANG SEMARANG,SMG">BI CABANG SEMARANG,SMG</option>
                                                <option value="BI CABANG SIBOLGA">BI CABANG SIBOLGA</option>
                                                <option value="BI CABANG SOLO,SLO">BI CABANG SOLO,SLO</option>
                                                <option value="BI CABANG SURABAYA,SBY">BI CABANG SURABAYA,SBY</option>
                                                <option value="BI CABANG TEGAL">BI CABANG TEGAL</option>
                                                <option value="BI CABANG TERNATE">BI CABANG TERNATE</option>
                                            </select>
                                        </div>
                                        <div class="col-md-7">
                                            <label>No Rekening</label>
                                            <input class="form-control" name="bank-detail.no-rekening" placeholder="No Rekening" minlength="6" maxlength="20" pattern="[0-9]{6,20}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-7 ml-md-auto">
                                            <label>Atas Nama</label>
                                            <input class="form-control" name="bank-detail.atas_nama" placeholder="Nama Pemilik Rekening" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="col-md-12">
                                            <input class="margin-top-20 margin-bottom-20 btn btn-main" type="submit" value="Selanjutnya">    
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="documents" class="tab-pane fade">
                                <form autocomplete="off" class="form-horizontal">
                                    <div class="col-md-12 columns">
                                        <label class="bold blue f-14 m-bottom-5">Arsip KTP*</label>
                                        <div class="m-bottom-10 upload-container">
                                            <span class="image-preview">
                                            </span>
                                            <label for="foto-ktp" class="button upload-label button--grey button--upload button--grey--bordered">Upload File</label>
                                            <input type="file" id="foto-ktp" class="show-for-sr upload" data-type="consumer-ktp" required>
                                            <input type="hidden" name="documents.cpd_ktp_file" class="filename" value="">
                                        </div>
                                        <small class="block f-14 light-grey"><em>Format yang disarankan: jpg, pdf, png, gif, bmp (maks. 10 MB)</em></small>
                                    </div>

                                    <div class="col-md-12 columns">
                                        <label class="bold blue f-14 m-bottom-5">Arsip NPWP*</label>
                                        <div class="m-bottom-10 upload-container">
                                            <span class="image-preview">
                                            </span>
                                            <label for="foto-npwp" class="button upload-label button--grey button--upload button--grey--bordered">Upload File</label>
                                            <input type="file" data-id="3482" id="foto-npwp" class="show-for-sr upload" upload-status="Consumer" data-type="consumer-npwp" required>
                                            <input type="hidden" name="cpd_npwp_file" class="filename" value="">
                                        </div>
                                        <small class="block f-14 light-grey"><em>Format yang disarankan: jpg, pdf, png, gif, bmp (maks. 10 MB)</em></small>
                                    </div>

                                    <div class="col-md-12 columns">
                                        <label class="bold blue f-14 m-bottom-5">Arsip Cover Buku Tabungan*</label>
                                        <div class="m-bottom-10 upload-container">
                                            <span class="image-preview">
                                            </span>
                                            <label for="cover-tabungan" class="button upload-label button--grey button--upload button--grey--bordered">Upload File</label>
                                            <input type="file" data-id="3482" id="cover-tabungan" class="show-for-sr upload" upload-status="Consumer" data-type="consumer-tabungan" required>
                                            <input type="hidden" name="documents.cpd_cover_tabungan" class="filename" value="">
                                        </div>
                                        <small class="block f-14 light-grey"><em>Format yang disarankan: jpg, pdf, png, gif, bmp (maks. 10 MB)</em></small>
                                    </div>


                                    <div class="col-md-12 columns">
                                        <label class="bold blue f-14 m-bottom-5">Arsip Slip Gaji Terakhir*</label>
                                        <div class="m-bottom-10 upload-container">
                                            <span class="image-preview">
                                            </span>
                                            <label for="latest-salary" class="button upload-label button--grey button--upload button--grey--bordered">Upload File</label>
                                            <input type="file" data-id="" id="latest-salary" class="show-for-sr upload" upload-status="Consumer" data-type="latest-salary" required>
                                            <input type="hidden" name="documents.cld_latest_salary_slip_file" class="filename" value="">
                                        </div>
                                        <small class="block f-14 light-grey"><em>Format yang disarankan: jpg, pdf, png, gif, bmp (maks. 10 MB)</em></small>
                                    </div>

                                    <div class="col-md-12 columns">
                                        <label class="bold blue f-14 m-bottom-5">Bukti Pembayaran Gaji 3 Bulan Terakhir di Rekening Tabungan *</label>
                                        <div class="m-bottom-10 upload-container">
                                            <span class="image-preview">
                                            </span>
                                            <label for="consumer-bukti-gaji" class="button upload-label button--grey button--upload button--grey--bordered">Upload File</label>
                                            <input type="file" data-id="" id="consumer-bukti-gaji" class="show-for-sr upload" upload-status="Consumer" data-type="consumer-bukti-gaji" required>
                                            <input type="hidden" name="documents.cld_bukti_pembayaran_gaji" class="filename" value="">
                                        </div>
                                        <small class="block f-14 light-grey"><em>Format yang disarankan: jpg, pdf, png, gif, bmp (maks. 10 MB)</em></small>
                                    </div>

                                    <div class="col-md-12 columns" id="contract-letter">
                                        <label class="bold blue f-14 m-bottom-5">Arsip Surat Kontrak*</label>
                                        <div class="m-bottom-10 upload-container">
                                            <span class="image-preview">
                                            </span>
                                            <label for="contract-letter-file" class="button upload-label button--grey button--upload button--grey--bordered">Upload File</label>
                                            <input type="file" data-id="" id="contract-letter-file" class="show-for-sr upload" upload-status="Consumer" data-type="contract-letter" required>
                                            <input type="hidden" name="documents.cld_contract_letter_file" class="filename" value="">
                                        </div>
                                        <small class="block f-14 light-grey"><em>Format yang disarankan: jpg, pdf, png, gif, bmp (maks. 10 MB)</em></small>
                                    </div>

                                    <div class="col-md-12 columns" id="status-permanen" display="none">
                                        <label class="bold blue f-14 m-bottom-5">Arsip Surat Keterangan Penetapan Karyawan*</label>
                                        <div class="m-bottom-10 upload-container">
                                            <span class="image-preview">
                                            </span>
                                            <label for="consumer-sk-penetapan" class="button upload-label button--grey button--upload button--grey--bordered">Upload File</label>
                                            <input type="file" data-id="" id="consumer-sk-penetapan" class="show-for-sr upload" upload-status="Consumer" data-type="consumer-sk-penetapan">
                                            <input type="hidden" name="documents.cld_surat_keterangan_penetapan" class="filename" value="">
                                        </div>
                                        <small class="block f-14 light-grey"><em>Format yang disarankan: jpg, pdf, png, gif, bmp (maks. 10 MB)</em></small>
                                    </div>

                                    <div class="col-md-12 columns">
                                        <label class="bold blue f-14 m-bottom-5">Arsip Pas Photo*</label>
                                        <div class="m-bottom-10 upload-container">
                                            <span class="image-preview">
                                            </span>
                                            <label for="consumer-loan-photo" class="button upload-label button--grey button--upload button--grey--bordered">Upload File</label>
                                            <input type="file" data-id="" id="consumer-loan-photo" class="show-for-sr upload" upload-status="Consumer" data-type="consumer-loan-photo" required>
                                            <input type="hidden" name="documents.cld_loan_photo" class="filename" value="">
                                        </div>
                                        <small class="block f-14 light-grey"><em>Format yang disarankan: jpg, pdf, png, gif, bmp (maks. 10 MB)</em></small>
                                    </div>


                                    <div class="col-md-12 columns">
                                        <label class="bold blue f-14 m-bottom-5">Arsip Kartu Tanda Pengenal Karyawan*</label>
                                        <div class="m-bottom-10 upload-container">
                                            <span class="image-preview">
                                            </span>
                                            <label for="consumer-id-card" class="button upload-label button--grey button--upload button--grey--bordered">Upload File</label>
                                            <input type="file" data-id="" id="consumer-id-card" class="show-for-sr upload" upload-status="Consumer" data-type="consumer-id-card" required>
                                            <input type="hidden" name="documents.cld_id_card" class="filename" value="">
                                        </div>
                                        <small class="block f-14 light-grey"><em>Format yang disarankan: jpg, pdf, png, gif, bmp (maks. 10 MB)</em></small>
                                    </div>
                                    <div id="panel4">
                                        <div class="col-md-12 column text-center">
                                                <h4 class="text-uppercase m-bot-10">Pernyataan Borrower</h4>
                                        </div>
                                        <div class="col-md-12 column">
                                            <label>
                                                <input type="checkbox" name="documents.agree1" required>
                                                Saya menyatakan bahwa data-data yang telah saya isi di atas adalah valid dan saya telah melakukan pengecekan kebenaran data-data tersebut.
                                            </label>
                                        </div>
                                        <div class="col-md-12 column">
                                            <label>
                                                <input type="checkbox" name="documents.agree2" required>
                                                Dengan mengisi formulir ini, saya menyatakan bahwa pihak Investree berhak melakukan pengecekan keabsahan data yang telah saya berikan.
                                            </label>
                                        </div>
                                        <div class="col-md-12 column" style="text-align:center;">
                                            <label>
                                                Saya menyatakan bahwa telah membaca, mengerti dan menyetujui <a href="https://www.investree.id/pdf/deklarasi_dan_autorisasi" class="fancypdf orange"><span class="imageshow fancypdf thumbnail">Deklarasi dan Autorisasi</span></a> serta <a href="https://www.investree.id/pdf/syarat_dan_ketentuan_zurich" class="fancypdf f-12 orange"><span class="imageshow fancypdf thumbnail">Syarat dan Ketentuan</span></a> atas pengajuan asuransi Credit Life Zurich.
                                            </label>
                                        </div>
                                        <div class="col-md-12 row">
                                            <div class="col-md-12">
                                                <input class="margin-top-20 margin-bottom-20 btn btn-main" type="submit" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="detail-box detailed-box-simulation bg-gray">
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
<script src="{{ asset('/lib/jquery/masked_input_1.4-min.js') }}"></script>
<script>
$(document)
        .ready(function () {

            $('.nav-tabs a:first').tab('show');

            var formData = {};
            // Form Submition
            $('form')
                    .submit(function (e) {
                        e.preventDefault();
                        $("html, body").animate({scrollTop: 0}, "slow");

                        if ($(this).attr('next-form')) {
                            next = $(this).attr('next-form');
                            $('a[href="#' + next + '"]').tab('show');
                            formData[$(this).parent().attr('id')] = $(this).serializeArray();
                            console.log(formData);
                        }

                        return false;
                    });
            // End of Form Submition


            $('#sameAsDomisili')
                    .click(function () {
                        if (this.checked) {
                            console.log(1);
                            alamat = $('textarea[name="personal-contact.alamatDomisili"]').val();
                            provinsi = $('select[name="personal-contact.provinsiDomisili"]').val()
                            kota = $('select[name="personal-contact.kotaDomisili"]').val();
                            kecamatan = $('select[name="personal-contact.kecamatanDomisili"]').val();

                            $('textarea[name="personal-contact.alamatKTP"]').val(alamat);
                            $('select[name="personal-contact.provinsiKTP"]').val(provinsi);
                            $('select[name="personal-contact.kotaKTP"]').val(kota);
                            $('select[name="personal-contact.kecamatanKTP"]').val(kecamatan);
                        }
                    });

        });
</script>
@endsection