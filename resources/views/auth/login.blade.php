@extends('inc.template')

@section('style')
<link href="{{ asset('css/front.index.css') }}" rel="stylesheet">
@endsection

@section('content')


<section id="hero" class="hero-bg-5">
    <div class="hero-container">
        <div class="row col-md-12 ">


            <div class="container custom-frm text-left">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-center">
                        <div class="box" style="margin-top: 15px;">
                            <div class="section-header">
                                <h3 class="section-title" style="font-size: 24px;">Login</h3>
                            </div>
                            <div class="panel-body ">
                                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="col-md-4 control-label">Alamat E-Mail</label>
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-user"></i> </span>
                                                <input id="email" type="email" class="form-control" placeholder="Alamat E-Mail" name="email" value="{{ old('email') }}">

                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            @if ($errors->has('email'))
                                            <span class="help-block" style="color: red;">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Kata Sandi</label>
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock"></i> </span>
                                                <input id="password" type="password" placeholder="Kata Ssndi" class="form-control" name="password">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            @if ($errors->has('password'))
                                            <span class="help-block" style="color: red;">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" style="margin-top: 0px !important;"><i class="fa fa-btn fa-sign-in"></i> Masuk</button>
                                    </div>
                                    <div class="col-md-12 row"><BR></div>
                                    <div class="col-md-12">
                                        <a href="#" class="btn-link" onclick="forgotPassword();return false;" style="font-size: 13px;">Lupa Password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="box" style="margin-top: 15px;">
                            <div class="col-md-12 text-center">
                                <p class="text-center">Belum punya akun?</p>
                                <a href="{{ url('/register') }}" class="btn btn-register">Daftar disini</a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
