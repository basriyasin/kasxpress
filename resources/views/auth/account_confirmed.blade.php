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
                    <div class="col-md-10 col-md-offset-2 col-center">
                        <div class="box text-center">
                            <p class="text-center">
                                Terima kasih telah mengkonfirmasi E-Mail Anda. Kini anda dapat melakukan masuk menggunakan <b>{{ $user->email }}</b>.
                            </p>
                            <a href="{{ route('front.login') }}" class="btn btn-register">Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
