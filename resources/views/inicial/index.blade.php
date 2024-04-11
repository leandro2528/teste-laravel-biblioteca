@extends('system.app')

@section('title', 'Painel Inicial')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <p class="alert alert-info">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, voluptates.
                @guest    
                    <a class="btn btn-success btn-sm" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('register') }}">Cadastre-se</a>
                @endguest

                @auth
                    <a class="btn btn-primary btn-sm" href="{{ route('dashboards-index') }}">Painel Inicial</a>
                @endauth
            </p>
        </div>
    </div>
</div>
@endsection

