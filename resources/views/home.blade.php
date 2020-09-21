@extends('layouts.main')

@section('content')
    <div class="container d-flex justify-content-center">
        <a href="{{ route('login_google') }}" class="site-btn-google m-5 d-flex justify-content-between">
            <img src="{{ asset('/asset/procurar.svg') }}" alt="">
            Sign in with google
        </a>
    </div>
@endsection
