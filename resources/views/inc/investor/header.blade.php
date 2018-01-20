<header id="header" >
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="{{ Request::route()->getName() != 'investor.account' ?: 'menu-active'}} ">
                    <a href="{{ route('investor.account') }}">{{ trans('menu.investor.account') }}</a>
                </li>
                <li class="{{ Request::route()->getName() != 'investor.invest' ?: 'menu-active'}}">
                    <a href="{{ route('investor.invest') }}">{{ trans('menu.investor.invest') }}</a>
                </li>
                <li class="{{ Request::route()->getName() != 'investor.deposit' ?: 'menu-active'}}">
                    <a href="{{ route('investor.deposit') }}">{{ trans('menu.investor.deposit') }}</a>
                </li>
                <li class="{{ Request::route()->getName() != 'investor.portfolio' ?: 'menu-active'}}">
                    <a href="{{ route('investor.portfolio') }}">{{ trans('menu.investor.portfolio') }}</a>
                </li>
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
                <li class="menu-has-children">
                    <a href="#">Narto Uzumaki</a>
                    <ul>
                        <li><a href="#">{{ trans('menu.settings') }}</a></li>
                        <li><a href="#">{{ trans('menu.signout') }}</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
