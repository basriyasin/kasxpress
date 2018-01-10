<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="{{ route('front.index') }}">{{ Lang::get('menu.front.home') }}</a></li>
                <li><a href="{{ route('front.borrow') }}">{{ trans('menu.front.pinjaman_karyawan') }}</a></li>
                <li><a href="#services">{{ trans('menu.front.pendanaan') }}</a></li>
                <li><a href="#portfolio">{{ trans('menu.front.cara_kerja') }}</a></li>
                <li><a href="#portfolio">{{ trans('menu.front.tentang_kami') }}</a></li>
                <li><a href="#portfolio">{{ trans('menu.front.daftar') }}</a></li>
                <li class="menu-has-children">
                    <a href="#team">
                        <img class="lang-menu" src="{{ asset('img/flag/').'/'.Session::get('lang').'.png' }}" />
                        {{ strtoupper(Session::get('lang')) }}
                    </a>
                    <ul>
                        @foreach(config('app.supported_locale') as $v)
                            <li>
                                <a href="{{ route('menu.setLang', $v) }}">
                                    <img class="lang-menu" src="{{ asset('img/flag/').'/'.$v.'.png' }}" /> {{ strtoupper($v) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
