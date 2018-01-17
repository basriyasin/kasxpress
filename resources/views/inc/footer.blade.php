<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">                
                    <ul class="footer-list col-md-4">
                        <li>KASXPRESS</li>
                        <li><a href="{{ route('front.about') }}">Tentang Kami</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                    <ul class="footer-list col-md-4">
                        <li>Pelayanan</li>
                        <li><a href="{{ route('front.borrow') }}">Pinjaman</a></li>
                        <li><a href="{{ route('front.index') }}">Pendanaan</a></li>
                        <li><a href="#">Partner</a></li>
                    </ul>
                    <ul class="footer-list col-md-4 text-right">
                        <li>Kontak Kami</li>
                        <li><a href="#">Perumahan Citra</a></li>
                        <li><a href="#">Jl. Kesayangan IV, Kalideres</a></li>
                        <li><a href="#">Jakarta Barat</a></li>
                        <li><a href="#">Indonesia</a></li>
                    </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; {{ date('Y')}} Copyright <strong>KASXPRESS</strong>. All Rights Reserved
        </div>
    </div>
</footer>
