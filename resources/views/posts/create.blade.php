@component('layouts.elements.body')
    @slot('title') Novo @endslot
    @slot('description') Anime @endslot



    <form action="{{route('posts.store')}}"  method="post">

        @if(session('erro'))
            <div class="alert alert-danger">
                {{session('erro')}}
            </div>
        @endif

        @include('posts.form')
    </form>


<a href="{{route('posts.index')}}" class="btn btn-xs btn-default">Voltar</a>



@endcomponent