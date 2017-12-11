@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Painel de controle</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Olá, {{auth::user()->name}}, Seja bem vindo ao Anime-List.
                    Veja a sua lista de animes clicando no link abaixo:<br><br>

                    <a class="btn btn-default" href="/posts">Lista <i class="fa fa-list-ul"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
