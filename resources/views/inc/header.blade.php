<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="{{ Request::route()->getName() != 'front.index' ?: 'menu-active'}} ">
                    <a href="{{ route('front.index') }}">{{ Lang::get('menu.front.home') }}</a>
                </li>
                <li class="{{ Request::route()->getName() != 'front.borrow' ?: 'menu-active'}}">
                    <a href="{{ route('front.borrow') }}">{{ trans('menu.front.pinjaman_karyawan') }}</a>
                </li>
                <li class="{{ Request::route()->getName() != 'front.how-it-works' ?: 'menu-active'}}">
                    <a href="{{ route('front.how-it-works') }}">{{ trans('menu.front.cara_kerja') }}</a>
                </li>
                <li class="{{ Request::route()->getName() != 'front.about' ?: 'menu-active'}}">
                    <a href="{{ route('front.about') }}">{{ trans('menu.front.tentang_kami') }}</a>
                </li>
                @if(!Auth::check())
                <li>
                    <a href="{{ route('front.login') }}">{{ trans('menu.front.daftar') }}</a>
                </li>
                @endif
                <li class="menu-has-children">
                    <a href="#">
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
                @if (Auth::check())
                <li class="menu-has-children">
                    <a href="#">{{ Auth::user()->name }}</a>
                    <ul>
                        <li><a href="#">{{ trans('menu.settings') }}</a></li>
                        <li><a href="{{ url('/logout') }}">{{ trans('menu.signout') }}</a></li>
                    </ul>
                </li>
                @endif
        </nav>
    </div>
</header>
