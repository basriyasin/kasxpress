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
                        <div class="box">
                            <p class="text-center">
                                Terima kasih telah mendaftarkan diri sebagai <b>{{ ucwords($user->role) }}</b> di kasXpress.<br>
                                Harap periksa E-Mail Anda (<b>{{ $user->email }}</b>) untuk melakukan aktivasi. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
